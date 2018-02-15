
jQuery(function() {
  
  jQuery(".helpWantedApplyBtn button").each(function(){
    
    jQuery(this).click(function(){
      
      var group = jQuery(this).parent().parent().parent();
      
      var ad_author = jQuery(group).find(".cck_art_author").find(".cck_value_text").html();
      
      var ad_id = jQuery(group).find(".cck_art_id").find(".cck_value_text").html();
      
      var toSend = "?";
 
      toSend += "ad_author=" + ad_author;

      toSend += "&ad_id=" + ad_id;
            
      window.location.href = "http://www.figurative.academy/index.php/employment/help-wanted-application" + toSend;


    });
    
  });
  
});