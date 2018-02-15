<?php
/**
* @version 			SEBLOD 3.x More
* @package			SEBLOD (App Builder & CCK) // SEBLOD nano (Form Builder)
* @url				https://www.seblod.com
* @editor			Octopoos - www.octopoos.com
* @copyright		Copyright (C) 2009 - 2017 SEBLOD. All Rights Reserved.
* @license 			GNU General Public License version 2 or later; see _LICENSE.php
**/

defined( '_JEXEC' ) or die;

// Plugin
class plgCCK_Field_RestrictionCck_Fields extends JCckPluginRestriction
{
	protected static $type	=	'cck_fields';
	
	// -------- -------- -------- -------- -------- -------- -------- -------- // Prepare

	// onCCK_Field_RestrictionPrepareContent
	public static function onCCK_Field_RestrictionPrepareContent( &$field, &$config )
	{
		if ( self::$type != $field->restriction ) {
			return;
		}
		
		$restriction	=	parent::g_getRestriction( $field->restriction_options );
		
		return self::_authorise( $restriction, $field, $config );
	}

	// onCCK_Field_RestrictionPrepareForm
	public static function onCCK_Field_RestrictionPrepareForm( &$field, &$config )
	{
		if ( self::$type != $field->restriction ) {
			return;
		}
		
		$restriction	=	parent::g_getRestriction( $field->restriction_options );
		
		return self::_authorise( $restriction, $field, $config );
	}
	
	// onCCK_Field_RestrictionPrepareStore
	public static function onCCK_Field_RestrictionPrepareStore( &$field, &$config )
	{
		if ( self::$type != $field->restriction ) {
			return;
		}
		
		$restriction	=	parent::g_getRestriction( $field->restriction_options );
		
		return self::_authorise( $restriction, $field, $config );
	}
	
	// _authorise
	protected static function _authorise( $restriction, &$field, &$config )
	{
		$do		=	$restriction->get( 'do', 0 );
		$event	=	( $config['client'] == 'admin' || $config['client'] == 'site' || $config['client'] == 'search' ) ? 'beforeRenderForm' : 'beforeRenderContent';
		
		if ( isset( $config['task'] ) ) {
			if ( $config['task'] == 'download' ) {
				$event	=	'beforeRenderContent';
			} else {
				$event	=	'beforeStore';
			}
		}
		parent::g_addProcess( $event, self::$type, $config, array( 'name'=>$field->name, 'restriction'=>$restriction ), 4 );

		return true;
	}

	// _authoriseBeforeRender
	protected static function _authoriseBeforeRender( $process, &$fields, &$storages, &$config = array() )
	{
		$name			=	$process['name'];
		$restriction	=	$process['restriction'];

		$do				=	$restriction->get( 'do', 0 );
		$state			=	0;

		// --
		$condition_field	=	$restriction->get( 'trigger' );
		$condition_live		=	$restriction->get( 'live', '' );
		$condition_match	=	$restriction->get( 'match' );
		$condition_values	=	$restriction->get( 'values' );

		if ( $condition_live != '' ) {
			JPluginHelper::importPlugin( 'cck_field_live' );

			$field			=	(object)array(
									'live'=>$condition_live,
									'live_options'=>$condition_values,
								);
			$value			=	'';

			JEventDispatcher::getInstance()->trigger( 'onCCK_Field_LivePrepareForm', array( &$field, &$value, &$config ) );

			$condition_values	=	$value;
		} elseif ( $condition_values != '' ) {
			if ( $condition_values[0] == '{' && $condition_values[($length - 1)] == '}' ) {
				if ( $do ) {
					return true;
				} else {
					if ( isset( $fields[$name] ) ) {
						$fields[$name]->display	=	0;
						$fields[$name]->state	=	0;	
					}
					
					return false;
				}
			}
		}

		if ( $condition_match == 'hasEach' ) {
			$hasEach			=	true;
			$condition_match	=	'isEqual';
		} else {
			$hasEach			=	false;
		}
		if ( $condition_match == 'isFilled' ) {
			if ( isset( $fields[$condition_field] ) ) {
				if ( is_array( $fields[$condition_field]->value ) ) {
					if ( !empty( $fields[$condition_field]->value ) ) {
						$isFilled	=	false;
						foreach ( $fields[$condition_field]->value as $field ) {
							if ( is_object( $field ) ) {
								if ( $field->value != '' ) {
									$isFilled	=	 true;
									break;
								}
							} elseif ( is_array( $field ) ) {
								foreach ( $field as $k=>$v ) {
									if ( $v->value != '' ) {
										$isFilled	=	 true;
										break;
									}
								}
							} else {
								if ( $field != '' ) {
									$isFilled	=	true;
									break;
								}
							}
						}
						if ( $isFilled ) {
							$state	=	1;
						}
					}
				} else {
					if ( $fields[$condition_field]->value != '' ) {
						$state		=	1;
					}
				}
			}
		} elseif ( $condition_match == 'isEqual' ) {
			if ( isset( $fields[$condition_field] ) ) {
				$condition_values	=	explode( ',', $condition_values );
				if ( isset( $fields[$condition_field]->values ) ) {
					$values 		=	array();
					foreach ( $fields[$condition_field]->values as $value ) {
						$values[]	=	$value->value;
					}
					if ( $hasEach ) {
						if ( ( $count = count( $values ) ) >= ( $length = count( $condition_values ) ) ) {
							$nb		=	0;

							if ( $count ) {
								foreach ( $values as $v ) {
									if ( $v != '' && in_array( $v, $condition_values ) ) {
										$nb++;
									}
								}
							}
							if ( $nb == $length ) {
								$state	=	1;
							}
						}
					} else {
						if ( count( array_intersect( $condition_values, $values ) ) ) {
							$state	=	1;
						}
					}
				} else {
					foreach ( $condition_values as $v ) {
						if ( $fields[$condition_field]->value == $v ) {
							$state	=	1;
							break;
						}
					}
				}
			}
		} elseif ( $condition_match == 'isFuture' || $condition_match == 'isFutureOnly' ) {
			if ( isset( $fields[$condition_field] ) ) {
				$date1			=	new DateTime( $fields[$condition_field]->value, new DateTimeZone( 'UTC' ) );
				$date1->setTime( 00, 00, 00 );
				$date2			=	new DateTime( $condition_values, new DateTimeZone( 'UTC' ) );
				$date2->setTime( 00, 00, 00 );

				if ( ( $condition_match == 'isFuture' && $date1 >= $date2 ) || ( $condition_match == 'isFutureOnly' && $date1 > $date2 ) ) {
					$state	=	1;
				}
			}
		}
		
		if ( $state ) {
			$do		=	( $do ) ? false : true;
		} else {
			$do		=	( $do ) ? true : false;
		}
		
		if ( $do ) {
			return true;
		} else {
			if ( isset( $fields[$name] ) ) {
				$fields[$name]->display	=	0;
				$fields[$name]->state	=	0;	
			}
			
			return false;
		}
	}

	// -------- -------- -------- -------- -------- -------- -------- -------- // Special Events
	
	// onCCK_Field_RestrictionBeforeRenderContent
	public static function onCCK_Field_RestrictionBeforeRenderContent( $process, &$fields, &$storages, &$config = array() )
	{
		return self::_authoriseBeforeRender( $process, $fields, $storages, $config );
	}

	// onCCK_Field_RestrictionBeforeRenderForm
	public static function onCCK_Field_RestrictionBeforeRenderForm( $process, &$fields, &$storages, &$config = array() )
	{
		return self::_authoriseBeforeRender( $process, $fields, $storages, $config );
	}

	// onCCK_Field_RestrictionBeforeStore
	public static function onCCK_Field_RestrictionBeforeStore( $process, &$fields, &$storages, &$config = array() )
	{
		return self::_authoriseBeforeRender( $process, $fields, $storages, $config );
	}
}
?>