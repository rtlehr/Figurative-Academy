<?php

defined('_JEXEC') or die;

?>

<?php

  //Get the user ID of the viewer
  $gallery_viewer = $user->id;

  //Get the ID of the owner
  if (isset($_GET['userid'])) {
    
     $gallery_owner = filter_input(INPUT_GET, 'userid', FILTER_SANITIZE_URL);
    
      //Get the viewer username
      $viewerUsername = "";

      // Get a db connection.
      $viewerUsernameDB = JFactory::getDbo();

      $viewerUsernameQuery = $viewerUsernameDB->getQuery(true);
      $viewerUsernameQuery->select($viewerUsernameDB->quoteName('username'));
      $viewerUsernameQuery->from($viewerUsernameDB->quoteName('#__users'));
      $viewerUsernameQuery->where($viewerUsernameDB->quoteName('id') . ' LIKE '. $viewerUsernameDB->quote($gallery_owner));

      $viewerUsernameDB->setQuery($viewerUsernameQuery);

      $viewerUsername = $viewerUsernameDB->loadResult();
    
  }
  


?>

<script>
  jQuery( document ).ready(function() {
    jQuery("#orchard_user_comment_parent_username").val('<?php echo $viewerUsername ?>');
   });
</script>

<?php

echo $cck->renderField('orchard_user_comment_allow_multiple');

echo $cck->renderField('orchard_user_comment_parent_id');

echo $cck->renderField('art_created');

echo $cck->renderField('orchard_user_comment_author_avatar');

echo $cck->renderField('orchard_user_comment_author');

echo $cck->renderField('orchard_user_comment_user_id');

echo $cck->renderField('art_state');

echo $cck->renderField('art_catid');

echo $cck->renderField('orchard_user_comment_parent_username');

?>

