<?php

defined('_JEXEC') or die;

?>

<?php

$protectImage = true;

//This is the article ID of the image
$imageID = $cck->getValue('art_id'); 

$db = JFactory::getDbo();

$query = $db->getQuery(true);

$query->select($db->quoteName('orchard_user_gallery_protect_image'));
$query->from($db->quoteName('#__cck_store_form_orchard_user_gallery_item'));
$query->where($db->quoteName('id') . ' LIKE '. $db->quote($imageID));

$db->setQuery($query);

$results = $db->loadResult();

if (isset($_GET['userid'])) {
   $gallery_owner = filter_input(INPUT_GET, 'userid', FILTER_SANITIZE_URL);
} else {
    $gallery_owner = "000000";
}

$user = JFactory::getUser();

$gallery_viewer = $user->id;

if ($results == "Yes")
{

  // Get a db connection.
  $db2 = JFactory::getDbo();

  
  $query2 = $db->getQuery(true);

  $query2->select($db2->quoteName('orchard_user_owner_allow_private_image_view'));
  $query2->from($db2->quoteName('#__cck_store_form_orchard_user_to_user_relationship'));
  $query2->where($db2->quoteName('orchard_user_owner_id') . ' LIKE '. $db2->quote($gallery_owner) . ' AND ' . $db2->quoteName('orchard_user_viewer_id') . ' LIKE '. $db->quote($gallery_viewer));

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
  echo $cck->renderField('orchard_user_gallery_protected_image'); 
}
else
{
  echo $cck->renderField('orchard_user_gallery_image_upload'); 
}

?>
