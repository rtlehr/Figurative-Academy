<?php

//TEMPLATE: orchard_user_to_user_relationship / site / hidden

defined('_JEXEC') or die;

?>

<?php

  //Get the user ID of the viewer
  $userid = $user->id;

  //Get the ID of the owner
  if (isset($_GET['userid'])) {
    
     $userid = filter_input(INPUT_GET, 'userid', FILTER_SANITIZE_URL);
    
      //Get the viewer username
      $ownerUsername = "";

      // Get a db connection.
      $ownerUsernameDB = JFactory::getDbo();

      $ownerUsernameQuery = $ownerUsernameDB->getQuery(true);
      $ownerUsernameQuery->select($ownerUsernameDB->quoteName('username'));
      $ownerUsernameQuery->from($ownerUsernameDB->quoteName('#__users'));
      $ownerUsernameQuery->where($ownerUsernameDB->quoteName('id') . ' LIKE '. $ownerUsernameDB->quote($userid));

      $ownerUsernameDB->setQuery($ownerUsernameQuery);

      $ownerUsername = $ownerUsernameDB->loadResult();
    ?>

    <script>
      jQuery( document ).ready(function() {

      jQuery("#orchard_user_owner_username").val('<?php echo $ownerUsername ?>');

      jQuery("#art_title").val('<?php echo $cck->getValue('orchard_user_viewer_username') ?> - <?php echo $ownerUsername ?>');

    });
    </script>

<?php
  }
?>

<?php

if (isset($_GET['userid'])) {

  echo $cck->renderField('orchard_user_gallery_grant_permission');
  
  echo $cck->renderField('orchard_user_owner_allow_relationship');
    
  echo $cck->renderField('orchard_user_block_viewer');
    
  echo $cck->renderField('orchard_user_owner_allow_viewer_comment');
    
  echo $cck->renderField('orchard_user_owner_allow_private_image_view');
  
}

echo $cck->renderField('art_catid'); 

echo $cck->renderField('art_title'); 

echo $cck->renderField('orchard_user_owner_id'); 

echo $cck->renderField('orchard_user_viewer_id');
                                               
echo $cck->renderField('orchard_user_owner_username');

echo $cck->renderField('orchard_user_viewer_username'); 

?>
