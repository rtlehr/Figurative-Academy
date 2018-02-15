<?php

  //TEMPLATE: orchard_user / site / mainbody

  defined('_JEXEC') or die;

  $user =& JFactory::getUser();

  $userLoggedIn = false;

  if($user->id)
  {
    $userLoggedIn = true;
  }

?>

<style>
   #tab_permissions .cck_form, #tab_metadata .cck_form, #tab_media .cck_form
   {
    width:100%
   }
   .cck_form
   {
    width:100% !important;
   }
   input[type=text], select {
     width: 100%;
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
   }
</style>

  <div class="row-fluid">
    <div class="span12">
      <?php
      
        echo "<h2>";
      
        if($userLoggedIn)
        {
          
          echo $cck->getValue('user_name');
          echo "'s account settings";

        }
        else
        {
          echo "New User Registration";
        }
      
        echo "</h2>";
      
      ?>
    </div>
  </div>

<?php
 echo $cck->renderField('tab_details');
?>

<?php
  echo '<strong>' . $cck->getLabel('user_name') . '</strong>';
  echo $cck->renderField('user_name');

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('user_username') . '</strong>';
  echo $cck->renderField('user_username');
  echo '</div></div>';

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('user_password') . '</strong>';
  echo $cck->renderField('user_password');
  echo '</div></div>';

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('user_password2') . '</strong>';
  echo $cck->renderField('user_password2');
  echo '</div></div>';

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('user_email') . '</strong>';
  echo $cck->renderField('user_email');
  echo '</div></div>';

  echo '<div class="row-fluid"><div class="span1">';
  echo '<strong>' . $cck->getLabel('orchard_user_type') . '</strong></div><div class="span11">';
  echo $cck->renderField('orchard_user_type');
  echo '</div></div>';

if($userLoggedIn)
{
  echo $cck->renderField('tab_profile');

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('user_avatar') . '</strong>';
  echo $cck->renderField('user_avatar');
  echo '</div></div>';

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('orchard_user_about_me') . '</strong>';
  echo $cck->renderField('orchard_user_about_me');
  echo '</div></div>';

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('user_gender') . '</strong>';
  echo $cck->renderField('user_gender');
  echo '</div></div>';

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('user_birthdate') . '</strong>';
  echo $cck->renderField('user_birthdate');
  echo '</div></div>';

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('user_city') . '</strong>';
  echo $cck->renderField('user_city');
  echo '</div></div>';

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('user_region') . '</strong>';
  echo $cck->renderField('user_region');
  echo '</div></div>';

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('user_country') . '</strong>';
  echo $cck->renderField('user_country');
  echo '</div></div>';

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('user_website') . '</strong>';
  echo $cck->renderField('user_website');
  echo '</div></div>';

  echo $cck->renderField('tab_media');

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('orchard_user_allow_gallery') . '</strong>';
  echo $cck->renderField('orchard_user_allow_gallery');
  echo '</div></div>';

  echo $cck->renderField('orchard_user_gallery_manage_list');

  echo $cck->renderField('tab_permissions');

  echo '<div class="row-fluid"><div class="span12">';
  echo '<strong>' . $cck->getLabel('orchard_user_allow_comments') . '</strong>';
  echo $cck->renderField('orchard_user_allow_comments');
  echo '</div></div>';

  echo "<h2>Comments About You.</h2>";
   
  echo $cck->renderField('orchard_user_comments_manage_list');
 
  echo "<h2>Your Article Comments</h2>";
  
  echo $cck->renderField('orchard_user_show_article_comment_manager');

  echo "<h2>Your User Comments</h2>";

  echo $cck->renderField('orchard_user_show_user_to_user_comment_manager');

  echo $cck->renderField('tab_metadata');

  echo $cck->renderField('orchard_user_gallery_relationship_list');

  echo $cck->renderField('tab_end');
  
}

  echo $cck->renderField('div_start');

  echo $cck->renderField('button_save_close');

  echo $cck->renderField('button_cancel');

  echo $cck->renderField('div_end');

?>
