<?php  /*
Author:Suyati Designer
Theme Name:Suyati
Template Name: Domain
*/
get_header();
?>
<div class="Microsite_Main_Page">
<?php locate_template( array( 'includes_microsite/ms_header_menu.php' ), true, true ); ?>

<?php locate_template( array( 'includes_microsite/ms_static_banner.php' ), true, true ); ?>

<?php locate_template( array( 'includes_microsite/ms_section_domain_content.php' ), true, true ); ?>

<?php get_footer();?>

</div>
