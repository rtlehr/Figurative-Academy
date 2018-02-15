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

JCck::loadjQuery();
if ( ( JCck::getConfig_Param( 'validation', 2 ) > 1 ) && $config['validation'] != '' ) {
	JCckDev::addValidation( $config['validation'], $config['validation_options'], $formId );
	$js	=	'if (jQuery("#'.$formId.'").validationEngine("validate",task) === true) { if (jQuery("#'.$formId.'").isStillReady() === true) { jQuery("#'.$formId.' input[name=\'config[unique]\']").val("'.$formId.'"); Joomla.submitform("save", document.getElementById("'.$formId.'")); } }';
} else {
	$js	=	'if (jQuery("#'.$formId.'").isStillReady() === true) { jQuery("#'.$formId.' input[name=\'config[unique]\']").val("'.$formId.'"); Joomla.submitform("save", document.getElementById("'.$formId.'")); }';
}
?>

<script type="text/javascript">
<?php echo $config['submit']; ?> = function(task) { <?php echo $js; ?> }
</script>

<?php
echo ( $config['action'] ) ? $config['action'] : '<form enctype="multipart/form-data" action="'.JRoute::_( 'index.php?option=com_cck' ).'" method="post" id="'.$formId.'" name="'.$formId.'">';
echo @$data;
?>

<div class="clr"></div>
<div>
    <input type="hidden" id="task" name="task" value="" />
    <input type="hidden" id="myid" name="id" value="0" />
    
    <input type="hidden" name="config[type]" value="<?php echo $preconfig['type']; ?>">
    <input type="hidden" name="config[url]" value="<?php echo $preconfig['url']; ?>" />
    <input type="hidden" name="config[copyfrom_id]" value="0" />
    <input type="hidden" name="config[id]" value="0" />
    <input type="hidden" name="config[unique]" value="" />
    <?php echo ( $preconfig['message'] ) ? '<input type="hidden" name="config[message]" value="'.$preconfig['message'].'" />' : ''; ?>
	<?php echo JHtml::_( 'form.token' ); ?>
</div>
</form>