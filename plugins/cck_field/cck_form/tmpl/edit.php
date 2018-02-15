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

$options	=	JCckDev::fromSTRING( $this->item->options );
?>

<div class="seblod">
    <?php echo JCckDev::renderLegend( JText::_( 'COM_CCK_CONSTRUCTION' ), JText::_( 'PLG_CCK_FIELD_'.$this->item->type.'_DESC' ) ); ?>
    <ul class="adminformlist adminformlist-2cols">
        <?php
		echo JCckDev::renderForm( 'core_label', $this->item->label, $config );
		echo JCckDev::renderForm( 'core_defaultvalue', $this->item->defaultvalue, $config );
		//echo JCckDev::renderForm( 'core_extended', $this->item->extended, $config, array( 'label' => _C2_TEXT ) );
		
		echo JCckDev::renderForm( 'core_options_display', $this->item->sorting, $config, array( 'defaultvalue'=>-1 ) );
		echo JCckDev::renderForm( 'core_selectlabel', $this->item->selectlabel, $config );
		echo JCckDev::renderForm( 'core_options', $options, $config );
		
		echo JCckDev::renderSpacer( JText::_( 'COM_CCK_STORAGE' ), JText::_( 'COM_CCK_STORAGE_DESC' ) );
		echo JCckDev::getForm( 'core_storage', $this->item->storage, $config );
        ?>
    </ul>
</div>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$('#selectlabel, #sortable_core_options').isVisibleWhen('sorting','0,1,2');
});
</script>