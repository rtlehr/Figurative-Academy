<?php

defined('_JEXEC') or die;

?>


<?php

if (isset($_GET['userid'])) {
  
  echo "Please tell the menber why you want to make the connection.";
  
} else {
  
  echo $cck->renderField('orchard_user_gallery_owner'); 

  echo $cck->renderField('orchard_user_gallery_viewer'); 

  echo $cck->renderField('orchard_user_gallery_viewer_userid');

  echo $cck->renderField('orchard_user_gallery_grant_permission');
  
}

  echo $cck->renderField('orchard_user_gallery_relationship_reason');

  echo $cck->renderField('button_save'); 

?>