<?php

//TEMPLATE: orchard_user_to_user_relationship / site / mainbody

//just a test

defined('_JEXEC') or die;

?>

<?php

if (isset($_GET['userid'])) 
{
  
  echo "Please tell the menber why you want to make the connection.";

  echo $cck->renderField('orchard_user_viewer_relationship_reason');

  echo $cck->renderField('button_save'); 
    
}
else 
{

    echo $cck->renderField('orchard_user_viewer_relationship_reason');

    echo $cck->renderField('orchard_user_gallery_grant_permission');

    echo $cck->renderField('orchard_user_owner_allow_relationship');

    echo $cck->renderField('orchard_user_block_viewer');

    echo $cck->renderField('orchard_user_owner_allow_viewer_comment');

    echo $cck->renderField('orchard_user_owner_allow_private_image_view');

    echo $cck->renderField('button_next');
    
}

?>