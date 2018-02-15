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

JCckDev::initScript( 'restriction', $this->item );
JCck::loadModalBox();

require_once JPATH_COMPONENT.'/helpers/helper_admin.php';
$lives	=	array_merge( array( JHtml::_( 'select.option', '', JText::_( 'COM_CCK_DEFAULT' ) ) ), Helper_Admin::getPluginOptions( 'field_live', 'cck_', false, false, true ) );
$html	=	JHtml::_( 'select.genericlist', $lives, 'live', 'class="input select"', 'value', 'text', '', 'live' );
?>

<div class="seblod">
	<?php echo JCckDev::renderLegend( JText::_( 'COM_CCK_CONSTRUCTION' ), JText::_( 'PLG_CCK_FIELD_RESTRICTION_'.$this->item->name.'_DESC' ) ); ?>
    <ul class="adminformlist adminformlist-2cols">
        <?php
        echo JCckDev::renderBlank();
		echo JCckDev::renderForm( 'core_bool', '', $config, array( 'label'=>'Invert', 'defaultvalue'=>'0', 'options'=>'Yes=1||No=0', 'storage_field'=>'do' ) );
		echo '<li class="w100"><label>'.JText::_( 'COM_CCK_FIELD_NAME_VALUES' ).'</label>'
		 .	 JCckDev::getForm( 'core_dev_text', '', $config, array( 'label'=>'', 'defaultvalue'=>'', 'storage_field'=>'trigger' ) )
		 .	 JCckDev::getForm( 'core_dev_select', '', $config, array( 'label'=>'', 'selectlabel'=>'', 'defaultvalue'=>'isEqual', 'options'=>'STATE_IS_EQUAL_IN=isEqual||STATE_IS_FILLED=isFilled||STATE_IS_FUTURE=isFuture||STATE_IS_FUTURE_ONLY=isFutureOnly||STATE_HAS_EACH=hasEach', 'storage_field'=>'match' ) )
		 .	 $html
		 .	 JCckDev::getForm( 'core_dev_text', '', $config, array( 'label'=>'', 'defaultvalue'=>'', 'css'=>'input-small', 'storage_field'=>'values' ) )
		 .	 '<span class="c_link" id="live_button" name="live_button">+</span>'
		 .	 '</li>';
        ?>
    </ul>
</div>

<?php
JCckDev::addField( 'live', $config );
?>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$('#live').isVisibleWhen('match','hasEach,isEqual,isFuture,isFutureOnly',false);
	if ($("#match").val() == "isFilled") {
		$("#live_button,#values").hide();
	} else {
		if ($("#live").val()) {
			$("#live_button").show();
			$("#values").hide();
		} else {
			$("#live_button").hide();
			$("#values").show();
		}
	}
	$("div#layout").on("change", "#match", function() {
		if ($(this).val() == "isFilled") {
			$("#live_button,#values").hide();
		} else {
			if ($("#live").val()) {
				$("#live_button").show();
				$("#values").hide();
			} else {
				$("#live_button").hide();
				$("#values").show();
			}
		}
	});
	$("div#layout").on("change", "#live", function() {
		$("#values").val("");
		if ($(this).val()) {
			$("#live_button").show();
			$("#values").hide();
		} else {
			$("#live_button").hide();
			$("#values").show();
		}
	});
	$("div#layout").on("click", "span.c_link", function() {
		var type = $("#live").val();
		if (type) {
			var url = "index.php?option=com_cck&task=box.add&tmpl=component&file=plugins/cck_field_live/"+type+"/tmpl/edit.php&id=values&name="+type+"&validation=1";
			$.colorbox({href:url, iframe:true, innerWidth:930, innerHeight:550, overlayClose:false, fixed:true, onLoad: function(){ $('#cboxClose').remove();}});
		}
	});
});
</script>