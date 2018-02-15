<?php

defined('_JEXEC') or die;

?>

<?php

if (isset($_GET['userid'])) {
  
  echo $cck->renderField('orchard_user_gallery_owner'); 

  echo $cck->renderField('orchard_user_gallery_viewer'); 

  echo $cck->renderField('orchard_user_gallery_viewer_userid');

  echo $cck->renderField('orchard_user_gallery_grant_permission');
  
}

echo $cck->renderField('art_catid'); 

echo $cck->renderField('art_title'); 

?>