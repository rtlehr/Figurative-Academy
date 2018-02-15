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

use Joomla\String\StringHelper;

// Plugin
class plgCCK_FieldCCK_Form extends JCckPluginField
{
	protected static $type	=	'cck_form';
	protected static $path;
	
	// -------- -------- -------- -------- -------- -------- -------- -------- // Construct
	
	// onCCK_FieldConstruct
	public function onCCK_FieldConstruct( $type, &$data = array() )
	{
		if ( self::$type != $type ) {
			return;
		}
		parent::g_onCCK_FieldConstruct( $data );
	}
	
	// -------- -------- -------- -------- -------- -------- -------- -------- // Prepare
	
	// onCCK_FieldPrepareContent
	public function onCCK_FieldPrepareContent( &$field, $value = '', &$config = array() )
	{
		if ( self::$type != $field->type ) {
			return;
		}
		parent::g_onCCK_FieldPrepareContent( $field, $config );
		
		// Init
		$value			=	( $field->sorting > -1 ) ? $value : $field->defaultvalue;
		
		// Prepare
		if ( $value ) {
			$app					=	JFactory::getApplication();
			$main_config			=	$config;
			$main_field				=	$field;
			$uniqId					=	'f'.$field->id;
			$formId					=	'seblod_form_'.$uniqId;
			
			$option					=	$app->input->get( 'option', '' );
			$view					=	'';
			$preconfig				=	array();
			$preconfig['action']	=	'';
			$preconfig['client']	=	'site';
			$preconfig['formId']	=	$formId;
			$preconfig['message']	=	'';
			$preconfig['task']		=	$app->input->get( 'task', '' );
			$preconfig['type']		=	$value;
			$preconfig['submit']	=	'JCck.Core.submit_'.$uniqId;
			$preconfig['url']		=	JUri::getInstance()->toString();
			
			$live					=	'';	//todo
			$variation				=	''; //todo
			
			// Prepare
			jimport( 'cck.base.form.form' );
			include JPATH_SITE.'/libraries/cck/base/form/form_inc.php';
			JFactory::getSession()->set( 'cck_hash_'.$formId, JApplication::getHash( '0|'.$preconfig['type'].'|0|0' ) );
			
			ob_start();
			include __DIR__.'/tmpl/render.php';
			$value	=	ob_get_clean();
			
			// Set
			$config		=	$main_config;
			$field		=	$main_field;
		}
		
		// Set
		$field->value	=	$value;
	}
	
	// onCCK_FieldPrepareForm
	public function onCCK_FieldPrepareForm( &$field, $value = '', &$config = array(), $inherit = array(), $return = false )
	{
		if ( self::$type != $field->type ) {
			return;
		}
		self::$path	=	parent::g_getPath( self::$type.'/' );
		parent::g_onCCK_FieldPrepareForm( $field, $config );
		
		// Init
		if ( count( $inherit ) ) {
			$id		=	( isset( $inherit['id'] ) && $inherit['id'] != '' ) ? $inherit['id'] : $field->name;
			$name	=	( isset( $inherit['name'] ) && $inherit['name'] != '' ) ? $inherit['name'] : $field->name;
		} else {
			$id		=	$field->name;
			$name	=	$field->name;
		}
		$value		=	( $value != '' ) ? $value : $field->defaultvalue;
		
		// Prepare
		if ( $field->sorting > -1 ) {
			$options	=	explode( '||', $field->options );
			if ( $field->sorting == 1 ) {
				natsort( $options );
				$optionsSorted	=	array_slice( $options, 0 );
			} elseif ( $field->sorting == 2 ) {
				natsort( $options );
				$optionsSorted	=	array_reverse( $options, true );
			} else {
				$optionsSorted	=	$options;
			}
			$opts	=	array();
			if ( trim( $field->selectlabel ) ) {
				if ( $config['doTranslation'] ) {
					$field->selectlabel	=	JText::_( 'COM_CCK_' . str_replace( ' ', '_', trim( $field->selectlabel ) ) );
				}
				$opts[]	=	JHtml::_( 'select.option',  '', '- '.$field->selectlabel.' -', 'value', 'text' );
			}
			$optgroup = 0;
			$validate ="";
	
			if ( count( $optionsSorted ) ) {
				foreach ( $optionsSorted as $val ) {
					if ( trim( $val ) ) {
						if ( StringHelper::strpos( $val, '=' ) !== false ) {
							$opt	=	explode( '=', $val );
							if ( $opt[1] == 'optgroup' ) {
								if ( $optgroup == 1 ) {
									$opts[]	=	JHtml::_( 'select.option', '</OPTGROUP>' );
								}
								$opts[]		=	JHtml::_( 'select.option', '<OPTGROUP>', $opt[0] );
								$optgroup	=	1;
							} elseif ( $opt[1] == 'endgroup' && $optgroup == 1 ) {
								$opts[]		=	JHtml::_( 'select.option', '</OPTGROUP>' );
								$optgroup	=	0;
							} else {
								if ( $config['doTranslation'] && trim( $opt[0] ) ) {
									$opt[0]	=	JText::_( 'COM_CCK_' . str_replace( ' ', '_', trim( $opt[0] ) ) );
								}
								$opts[]	=	JHtml::_( 'select.option', $opt[1], $opt[0], 'value', 'text' );
							}
						} else {
							if ( $val == 'endgroup' && $optgroup == 1 ) {
								$opts[]		=	JHtml::_( 'select.option', '</OPTGROUP>' );
								$optgroup	=	0;
							} else {
								$text	=	$val;
								if ( $config['doTranslation'] && trim( $text ) ) {
									$text	=	JText::_( 'COM_CCK_' . str_replace( ' ', '_', trim( $text ) ) );
								}
								$opts[]	=	JHtml::_( 'select.option', $val, $text, 'value', 'text' );
							}
						}
					}
				}
				if ( $optgroup == 1 ) {
					$opts[]		=	JHtml::_( 'select.option', '</OPTGROUP>' );
				}
			}
			
			$class	=	'inputbox select'.$validate . ( $field->css ? ' '.$field->css : '' );
			$attr	=	'class="'.$class.'" size="1"' . ( $field->attributes ? ' '.$field->attributes : '' );
			$form	=	( count( $opts ) ) ? JHtml::_( 'select.genericlist', $opts, $name, $attr, 'value', 'text', $value, $id ) : '';
			
			// Set
			if ( ! $field->variation ) {  
				$field->form	=	$form;
				if ( $field->script ) {
					parent::g_addScriptDeclaration( $field->script );
				}
			} else {
				$field->text	=	parent::g_getOptionText( $value, $field->options, '', $config );	// TODO
				parent::g_getDisplayVariation( $field, $field->variation, $value, $field->text, $form, $id, $name, '<select', '', '', $config );
			}
			$field->value	=	$value;
		} else {
			// Set
			$field->form	=	'';
			$field->value	=	'';
		}
		
		// Return
		if ( $return === true ) {
			return $field;
		}
	}
	
	// onCCK_FieldPrepareSearch
	public function onCCK_FieldPrepareSearch( &$field, $value = '', &$config = array(), $inherit = array(), $return = false )
	{
		if ( self::$type != $field->type ) {
			return;
		}
		
		// Prepare
		self::onCCK_FieldPrepareForm( $field, $value, $config, $inherit, $return );
		
		// Return
		if ( $return === true ) {
			return $field;
		}
	}
	
	// onCCK_FieldPrepareStore
	public function onCCK_FieldPrepareStore( &$field, $value = '', &$config = array(), $inherit = array(), $return = false )
	{
		if ( self::$type != $field->type ) {
			return;
		}
		
		// Init
		if ( count( $inherit ) ) {
			$name	=	( isset( $inherit['name'] ) && $inherit['name'] != '' ) ? $inherit['name'] : $field->name;
		} else {
			$name	=	$field->name;
		}
		
		// Validate
		$text	=	parent::g_getOptionText( $value, $field->options, '', $config );	// TODO
		parent::g_onCCK_FieldPrepareStore_Validation( $field, $name, $value, $config );
		
		// Set or Return
		if ( $return === true ) {
			return $value;
		}
		$field->text	=	$text;
		$field->value	=	$value;
		parent::g_onCCK_FieldPrepareStore( $field, $name, $value, $config );
	}
	
	// -------- -------- -------- -------- -------- -------- -------- -------- // Render
	
	// onCCK_FieldRenderContent
	public static function onCCK_FieldRenderContent( $field, &$config = array() )
	{
		return parent::g_onCCK_FieldRenderContent( $field );
	}
	
	// onCCK_FieldRenderForm
	public static function onCCK_FieldRenderForm( $field, &$config = array() )
	{
		return parent::g_onCCK_FieldRenderForm( $field );
	}
}
?>