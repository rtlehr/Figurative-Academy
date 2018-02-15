
//var ArtAdminerToolbar = '<div class="uk-panel">';
		//ArtAdminerToolbar += '<div class="uk-clearfix">';
			//ArtAdminerToolbar += '<div class="uk-float-left" style="height:30px;">';
			//ArtAdminerToolbar += '</div>';
			//ArtAdminerToolbar += '<div class="uk-float-right">';
				var ArtAdminerToolbar = '<a href="javascript:void(0);" class="uk-button uk-button-primary" style="margin-bottom:3px;" data-uk-modal="{target:\'#art-adminer-settings\'}"><i class="uk-icon-cog"></i> Settings</a>';
			//ArtAdminerToolbar += '</div>';
		//ArtAdminerToolbar += '</div>';
	//ArtAdminerToolbar += '</div>';

jQuery( document ).ready(function($) {

	//load the admin menu bar and replace default joomla one
	$( "#toolbar" ).html(ArtAdminerToolbar);

	$( ".header" ).hide();

	var joomlaVersion = $( "div.btn-toolbar > div.btn-group.pull-right > p" ).html(); //.btn-group
	$( "div.btn-toolbar > div.btn-group.pull-right > p" ).html('Art Adminer by <a href="https://artetics.com/" style="color:#00A8E6 !important;">Artetics.com</a> — '+joomlaVersion);

});