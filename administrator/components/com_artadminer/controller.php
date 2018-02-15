<?php
/**
* @module		Art Adminer
* @copyright	Copyright (C) 2013 artetics.com
* @license		GPL
*/

defined('_JEXEC') or die('Direct Access to this location is not allowed.');
error_reporting(E_ERROR);
define ("DS", DIRECTORY_SEPARATOR);
jimport('joomla.application.component.controller');

class ArtAdminerController extends JControllerLegacy {
	function __construct() {
		parent::__construct();
	}
	
	function adminer() {
		require_once(JPATH_COMPONENT.DS.'admin.artadminer.html.php');
		$option = JRequest::getCmd('option');
		HTML_ArtAdminer::adminer($option);
	}
	
	function settings() {
		require_once(JPATH_COMPONENT.DS.'admin.artadminer.html.php');
		JTable::addIncludePath(JPATH_SITE . DS . 'administrator' . DS . 'components' . DS . 'com_artadminer' . DS . 'database');
		$settings =& JTable::getInstance('artadminer_setting', 'Table');
		$settings->load(1);
	    if (!$settings || !$settings->id) {
	      $db	=& JFactory::getDBO();
	      $db->setQuery('CREATE TABLE IF NOT EXISTS `#__art_adminer_setting` (`id` int(11) unsigned NOT NULL auto_increment,`cssfile` varchar(255) NOT NULL,`autologin` tinyint(1),PRIMARY KEY  (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;');
	      $db->query();
	      
	      $db->setQuery("INSERT INTO `#__art_adminer_setting` (`id`, `cssfile`, `autologin`)  VALUES (1, 'adminer-j3.css', 1) ON DUPLICATE KEY UPDATE id=id;");
	      $db->query();
	    }
		$option = JRequest::getCmd('option');		
		//HTML_ArtAdminer::settings($option, $settings);
	}
	
	function settings_save() {
		JTable::addIncludePath(JPATH_SITE . DS . 'administrator' . DS . 'components' . DS . 'com_artadminer' . DS . 'database');
		$option = JRequest::getCmd('option');
		$post = JRequest::get('post');
		$row =& JTable::getInstance('artadminer_setting', 'Table');
		$app = JFactory::getApplication();
		
		if (!$row->bind($post)) {
			return JError::raiseWarning(500, $row->getError());
		}
		
		if (!$row->store()) {
			return JError::raiseWarning(500, $row->getError());
		}
		
		if (array_key_exists('cssfile',$post)) {
			switch ($post['cssfile']) {
				case 'adminer-j3.css':
						$cssFilePath = 'css/j3/adminer.css';
					break;	
				case 'adminer-brade.css':
						$cssFilePath = 'css/brade/adminer.css';
					break;
				case 'adminer-easy.css':
						$cssFilePath = 'css/easy/adminer.css';
					break;
				case 'adminer-flatui.css':
						$cssFilePath = 'css/flatui/adminer.css';
					break;
				case 'adminer-gradient.css':
						$cssFilePath = 'css/gradient/adminer.css';
					break;
				case 'adminer-nette.css':
						$cssFilePath = 'css/nette/adminer.css';
					break;
				case 'adminer-plain.css':
						$cssFilePath = 'css/plain/adminer.css';
					break;
				case 'adminer-tan.css':
						$cssFilePath = 'css/tan/adminer.css';
					break;
				case 'adminer1.css':
						$cssFilePath = 'css/1/adminer.css';
					break;
				case 'adminer2.css':
						$cssFilePath = 'css/2/adminer.css';
					break;
				case 'adminer3.css':
						$cssFilePath = 'css/3/adminer.css';
					break;
			}

			//copy the content and create the file
			copy(JPATH_COMPONENT.'/'.$cssFilePath,JPATH_COMPONENT."/adminer/adminer.css");
		}

		


		$msg = 'Settings Saved. <a href="index.php?option=com_artadminer">Refresh</a> to see style changes.';
		$app->redirect('index.php?option=com_artadminer&task=adminer',$msg);
	}
	
}

?>