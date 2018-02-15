<?php

defined('_JEXEC') or die;

?>

<?php

$protectImage = true;

$imageID = $cck->getValue('art_id'); 

$db = JFactory::getDbo();

$query = $db->getQuery(true);

$query->select($db->quoteName('orchard_gallery_protect_image'));
$query->from($db->quoteName('#__cck_store_form_orchard_gallery_item'));
$query->where($db->quoteName('id') . ' LIKE '. $db->quote($imageID));

$db->setQuery($query);

$results = $db->loadResult();

//This number will come from the models user ID when the viewer looks at their profile
$gallery_owner = "45";

$user = JFactory::getUser();

$gallery_viewer = $user->id;

if ($results == "Yes")
{

  // Get a db connection.
  $db2 = JFactory::getDbo();

  
  $query2 = $db->getQuery(true);

  $query2->select($db2->quoteName('orchard_gallery_permission'));
  $query2->from($db2->quoteName('#__cck_store_form_orchard_gallery_item_user_relationship'));
  $query2->where($db2->quoteName('orchard_gallery_owner') . ' LIKE '. $db->quote($gallery_owner) . ' AND ' . $db->quoteName('orchard_gallery_viewer') . ' LIKE '. $db->quote($gallery_viewer));

  $db2->setQuery($query2);

  $results2 = $db2->loadResult();
      
  if($results2 == "Yes")
  {
     $protectImage = false;
  }
  
}
else
{
  $protectImage = false;
}

//Show the protected image, or the real image
if ($protectImage)
{
  echo $cck->renderField('orchard_gallery_protected_image'); 
}
else
{
  echo $cck->renderField('orchard_gallery_image_upload'); 
}


?>
