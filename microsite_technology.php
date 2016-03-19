<?php  /*
Author:Suyati Designer
Theme Name:Suyati
Template Name: Microsite_Main_Page
*/
get_header();
?>
<div class="Microsite_Main_Page">
<?php locate_template( array( 'includes_microsite/ms_header_menu.php' ), true, true ); ?>

<?php locate_template( array( 'includes_microsite/ms_static_banner.php' ), true, true ); ?>

<?php 
global $post;
$url = $post->post_name;
$parts = explode("/", $url);
$last_arg = end($parts);
if (strpos($last_arg, 'technology') !== false) {
    locate_template( array( 'includes_microsite/ms_section_content.php' ), true, true );
}
elseif (strpos($last_arg, 'service') !== false) {
	locate_template( array( 'includes_microsite/ms_section_content_sevices.php' ), true, true );
}
?>

<?php get_footer();?>


</div>
