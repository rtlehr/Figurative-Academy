<?php

//TEMPLATE: orchard_user / content / mainbody

defined('_JEXEC') or die;

?>

<?php

  //Get the user ID of the viewer
  $gallery_viewer = $user->id;

  //Get the ID of the owner
  if (isset($_GET['userid'])) {
     $gallery_owner = filter_input(INPUT_GET, 'userid', FILTER_SANITIZE_URL);
  } else {
      $gallery_owner = "000000";
  }

?>

<?php
  
  //Get the viewer username
  $viewerUsername = "";

  // Get a db connection.
  $viewerUsernameDB = JFactory::getDbo();

  $viewerUsernameQuery = $viewerUsernameDB->getQuery(true);
  $viewerUsernameQuery->select($viewerUsernameDB->quoteName('username'));
  $viewerUsernameQuery->from($viewerUsernameDB->quoteName('#__users'));
  $viewerUsernameQuery->where($viewerUsernameDB->quoteName('id') . ' LIKE '. $viewerUsernameDB->quote($gallery_viewer));

  $viewerUsernameDB->setQuery($viewerUsernameQuery);
  
  $viewerUsername = $viewerUsernameDB->loadResult();

  $ownerUsername = $cck->getValue('user_name'); 

?>

<?php
  
  //Check if the owner has blocked this user
  $userRelationshipResults = "No";

  // Get a db connection.
  $userRelationshipDB = JFactory::getDbo();

  $userRelationshipQuery = $userRelationshipDB->getQuery(true);
  $userRelationshipQuery->select($userRelationshipDB->quoteName(array('orchard_user_block_viewer','orchard_user_owner_allow_viewer_comment')));
  $userRelationshipQuery->from($userRelationshipDB->quoteName('#__cck_store_form_orchard_user_to_user_relationship'));
  $userRelationshipQuery->where($userRelationshipDB->quoteName('orchard_user_owner_id') . ' LIKE '. $userRelationshipDB->quote($gallery_owner) . ' AND ' . $userRelationshipDB->quoteName('orchard_user_viewer_id') . ' LIKE '. $userRelationshipDB->quote($gallery_viewer));

  $userRelationshipDB->setQuery($userRelationshipQuery);
  
  $userRelationshipResults = $userRelationshipDB->loadRow();

?>

<?php

//If the user is not blocked, show the profile
if($userRelationshipResults[0] != "Yes")
{
  echo $cck->renderField('orchard_user_css'); 

  echo $cck->renderField('div_start');

  echo $cck->renderField('div_start_2');

  echo $cck->renderField('div_start_3'); 

  echo $cck->renderField('div_end_3'); 

  echo $cck->renderField('div_end_2');

  echo $cck->renderField('div_start_4');

  echo $cck->renderField('div_start_5');

  echo $cck->renderField('user_name'); 

  echo $cck->renderField('div_in_between_2'); 

  echo $cck->renderField('orchard_user_connect');

  echo $cck->renderField('div_end_5');

  echo $cck->renderField('div_end_4');
  
 ?>

  <div class="row-fluid">

    <div class="span4">
      <?php echo $cck->renderField('user_gender'); ?>
    </div>

    <div class="span4">
      <?php echo $cck->renderField('user_birthdate'); ?>
    </div>

    <div class="span4">
      SOMETHING
    </div>

  </div>

  <div class="row-fluid">

    <div class="span4">  
      <?php echo $cck->renderField('user_city'); ?>
    </div>

    <div class="span4">
      <?php echo $cck->renderField('user_region'); ?>
    </div>

    <div class="span4"> 
      <?php echo $cck->renderField('user_country'); ?>
    </div>

  </div>

<?php
  
  echo $cck->renderField('user_website');

  echo $cck->renderField('orchard_user_about_me');

  echo $cck->renderField('div_end'); 

  echo $cck->renderField('orchard_user_include_gallery');

  echo $cck->renderField('orchard_user_include_comments');

  if($userRelationshipResults[1] != "Yes")
  {
    echo $cck->renderField('orchard_user_write_comment');
  }
  
}
else
{
  echo $cck->getValue('user_name') . " has blocked you from viewing their profile.";
}

?>