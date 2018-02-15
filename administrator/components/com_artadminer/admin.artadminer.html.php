<?php
/**
* @module		Art Adminer
* @copyright	Copyright (C) 2013 artetics.com
* @license		GPL
*/
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
error_reporting(E_ERROR);

class HTML_ArtAdminer {
	
	function settings($option, &$row) {
		//HTML_ArtAdminer::setSettingsToolbar();
	}
	
	function adminer($option) {

		$document = JFactory::getDocument();

		//load uikit
		echo "<script type=\"text/javascript\" src=\"components/com_artadminer/lib/uikit/js/uikit.js\"></script>\n";
		$document->addStyleSheet('components/com_artadminer/lib/uikit/css/uikit.almost-flat.css');

		//load menu.js
		echo "<script type=\"text/javascript\" src=\"components/com_artadminer/assets/menu.js\"></script>\n";

		//load js and css declarations
		$js = "function resizeIframe(obj){";
     		$js .= "obj.style.height = 0;";
     		$js .= "obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';";
  		$js .= "}\n";
		//$css = 'iframe { overflow:hidden; }';
		//$css .= '.subhead-collapse {display:none;}';
		$css = '.header {display:none;}';
		$document->addStyleDeclaration($css);
		$document->addScriptDeclaration($js);

		//HTML_ArtAdminer::setAdminerToolbar();
		$row =& JTable::getInstance('artadminer_setting', 'Table');
		$row->load(1);
		$adminerUrl = JURI::base() . 'components/' . $option . '/adminer.php';

		$cfg = new JConfig();
		if ($row->autologin) {
			$adminerUrl .= '?server=' . $cfg->host . '&username=' . $cfg->user.'&cssfile='.urlencode($row->cssfile);
		} else {
			$adminerUrl .= '?cssfile='.urlencode($row->cssfile);
		}
		
		if ($row->cssfile) {
			//$document->addStyleSheet('components/com_artadminer/css/'.$row->cssfile);
		}

		?>

		<div style="margin-top:10px;">
			<iframe style="width:100%; border: none;" onload="resizeIframe(this)" src="<?php echo $adminerUrl; ?>"></iframe> <!--height:2000px;-->
		</div>
		<!-- This is the settings modal -->
		<div id="art-adminer-settings" class="uk-modal">
		    <div class="uk-modal-dialog">
		    	<a class="uk-modal-close uk-close"></a>
		    	<div class="uk-modal-header">
		    		<h2><i class="uk-icon-cog"></i> <?php echo JText::_( 'Settings' ); ?></h2>
		    	</div>

				<form action="index.php?option=com_artadminer&amp;task=settings_save" class="uk-form uk-form-horizontal" method="post" name="adminForm">

				    <!--<h3 class="uk-margin-top">Art Adminer Theme</h3>
				    <hr />-->

				    <div class="uk-form-row">
				        <label class="uk-form-label" for="">Style</label>
						<div class="uk-form-controls">
							<select name="cssfile">
								<?php $styles = array(
									"J3x" => "adminer-j3.css",
									"Brade" => "adminer-brade.css",
									"Easy" => "adminer-easy.css",
									"Flat UI" => "adminer-flatui.css",
									"Gradient" => "adminer-gradient.css",
									"Nette" => "adminer-nette.css",
									"Plain" => "adminer-plain.css",
									"Tan" => "adminer-tan.css",
									"Legacy 1" => "adminer1.css",
									"Legacy 2" => "adminer2.css",
									"Legacy 3" => "adminer3.css"									
								);	
								foreach ($styles as $stylename => $cssfile) {
									if ($row->cssfile == $cssfile) {
										echo '<option selected="selected" value="'.$cssfile.'">'.$stylename.'</option>';
									} else {
										echo '<option value="'.$cssfile.'">'.$stylename.'</option>';
									}
									
								} ?>

							</select>
                        </div>
				    </div>

				    <!--<h3 class="uk-margin-large-top">DB Connection</h3>
				    <hr />-->

				    <div class="uk-form-row">
				        <label class="uk-form-label" for="">Connect to Joomla DB</label>
						<div class="uk-form-controls">
							<select name="autologin">
								<?php if ($row->autologin) { ?>
									<option selected="selected" value="1">Yes</option>
									<option value="0">No</option>
								<?php } else { ?>
									<option value="1">Yes</option>
									<option selected="selected" value="0">No</option>
								<?php } ?>						
							</select>
                        </div>
				    </div>

				    <!--<div class="uk-margin-top uk-margin-bottom">
					    <div>
					       If 'Connect to Localhost' is set to yes, Art Adminer will autodetect your local database server and connect using the 
					       credentials provided in your Joomla Configuration. If 'Connect to Localhost' is set to no, Art Adminer will use the host, 
					       user and password credentials provided below.
					    </div>
					</div>

				    <div class="uk-form-row">
				        <label class="uk-form-label" for="">Host</label>
						<div class="uk-form-controls">
							<input type="text" name="host">
                        </div>
				    </div>

				    <div class="uk-form-row">
				        <label class="uk-form-label" for="">User</label>
						<div class="uk-form-controls">
							<input type="text" name="user">
                        </div>
				    </div>

				    <div class="uk-form-row">
				        <label class="uk-form-label" for="">Password</label>
						<div class="uk-form-controls">
							<input type="text" name="password">
                        </div>
				    </div>-->

					<input type="hidden" name="id" value="1" />
					</fieldset>
				</form>

		        <div class="uk-modal-footer">
		        	<div class="uk-clearfix">
			        	<div class="uk-float-right">
			        		<a class="uk-button uk-button-primary uk-button-large" href="javascript:void(0);" onclick="document.forms['adminForm'].submit();"><?php echo JText::_( 'Save' ); ?></a>
			        	</div>
			        </div>
		        </div>
		    </div>
		</div> 

		<?php
	}

	function setAdminerToolbar() {
	}
	
	function setSettingsToolbar() {
		JToolBarHelper::title('Settings', 'config.png');
		JToolBarHelper::custom('settings_save', 'save.png', 'default.png', 'Save', false);
		JToolBarHelper::custom('settings', 'cancel.png', 'default.png', 'Cancel', false);
	}
	
}


?>