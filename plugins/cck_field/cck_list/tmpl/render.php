<?php
/**
* @version 			SEBLOD 3.x More
* @package			SEBLOD (App Builder & CCK) // SEBLOD nano (Form Builder)
* @url				https://www.seblod.com
* @editor			Octopoos - www.octopoos.com
* @copyright		Copyright (C) 2009 - 2017 SEBLOD. All Rights Reserved.
* @license 			GNU General Public License version 2 or later; see _LICENSE.php
**/

defined( '_JEXEC' ) or die;

if ( $show_list_desc == 1 && $description != '' ) {
	echo '<div class="cck_module_desc'.$class_sfx.'">' . $description . '</div><div class="clr"></div>';
}
?>
<?php if ( !$raw_rendering ) { ?>
<div class="cck_module_list<?php echo $class_sfx; ?>">
<?php }
if ( isset( $search->content ) && $search->content > 0 ) {
	echo ( $raw_rendering ) ? $data : '<div>'.$data.'</div>';
	
	if ( ( $show_pagination == 2 || $show_pagination == 8 ) && $total_items > $total ) {
		$context	=	'&context={\'Itemid\':'.$preconfig['itemId'].',\'view\':\''.JFactory::getApplication()->input->get( 'view' ).'\'}';
		echo '<div class="'.$class_pagination.'"'.( $show_pagination == 8 ? ' style="display:none;"' : '' ).'><ul class="pagination-list"><li><img id="seblod_form_loading_more" src="media/cck/images/spinner.gif" alt="" style="display:none;" width="28" height="28" /><a id="seblod_form_load_more" href="javascript:void(0);" data-start="'.$offset.'" data-step="'.$config['limitend'].'" data-end="'.( $total_items + $offset ).'">'.JText::_( 'COM_CCK_LOAD_MORE' ).'</a></li></ul></div>';
		?>
		<script type="text/javascript">
		(function ($){
			JCck.Core.loadmore = function(more,stop) {
				var elem = ".cck-loading-more";
				$.ajax({
					cache: false,
					data: "format=raw&infinite=1<?php echo ( $preconfig['limitend'] ? '&end='.$preconfig['limitend'] : '' );?>&return=<?php echo base64_encode( JUri::getInstance()->toString() ); ?>"+more,
					type: "GET",
					url: "<?php echo JCckDevHelper::getAbsoluteUrl( 'auto', 'view=list&search='.$search->name.$context ); ?>",
					beforeSend:function(){ $("#seblod_form_load_more").hide(); $("#seblod_form_loading_more").show(); },
					success: function(response){
						if (stop != 1) {
							$("#seblod_form_load_more").show()<?php echo ( $show_pagination == 8 ) ? '.click()' : ''; ?>;
						} else {
							$(".cck_module_list .pagination").hide();
						}
						$("#seblod_form_loading_more").hide(); $(elem).append(response);
						<?php
						if ( $callback_pagination != '' ) {
							$pos	=	strpos( $callback_pagination, '$(' );

							if ( $pos !== false && $pos == 0 ) {
								echo $callback_pagination;
							} else {
								echo $callback_pagination.'(response);';
							}
						}
						?>
					},
					error:function(){}
				});
			}
			$(document).ready(function() {
				$("#seblod_form_load_more").on("click", function() {
					var start = parseInt($(this).attr("data-start"));
					var step = parseInt($(this).attr("data-step"));
					start = start+step;
					var stop = (start+step>=parseInt($(this).attr("data-end"))) ? 1 : 0;
					$(this).attr("data-start",start);
					JCck.Core.loadmore("&start="+start,stop);
				})<?php echo ( $show_pagination == 8 ) ? '.click()' : ''; ?>;
			});
		})(jQuery);
		</script>
		<?php
	}
} else {
	include __DIR__.'/render_items.php';
}
?>
<?php if ( $show_more_link ) { ?>
	<div class="more"><a<?php echo $show_more_class; ?> href="<?php echo $show_more_link; ?>"><?php echo $show_more_text; ?></a></div>
<?php } if ( !$raw_rendering ) { ?>
</div>
<?php } ?>