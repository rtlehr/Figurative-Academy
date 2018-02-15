<?php

  defined('_JEXEC') or die;

?>

<?php

$jinput = JFactory::getApplication()->input;

$viewer_id = $jinput->get('viewer_id', 'default_value', 'STRING');

$db = JFactory::getDbo();

$query = $db->getQuery(true);

$query->select($db->quoteName('username'));
$query->from($db->quoteName('#__users'));
$query->where($db->quoteName('id') . ' LIKE '. $db->quote($viewer_id));

$db->setQuery($query);

$userName = $db->loadResult();

?>

<h2>
  <?php echo "Would you like to give " . $userName . " permision to view your protected images?"; ?>
</h2>

<?php

  echo $cck->renderField('orchard_gallery_permission'); 

  echo $cck->renderField('button_submit'); 

?>