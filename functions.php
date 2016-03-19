<?php
/*
Author:Webcastle
URL:http://webcastltech.com
Theme Name:suyati
Description: suyati functions and defenitions
*/
/*===================================================================================*/
/*   suyati functions
/*==================================================================================*/
function suyati_setup()
{
add_image_size('blog', 630, 447, true );
add_image_size('bloghome', 150, 135, true );
  add_image_size('whitehome', 150, 135, true );
add_image_size('bloglist', 235, 226, true );
add_image_size('blogrecent', 190, 151, true );
add_image_size('blogpost', 84, 83, true );
  add_image_size('whattheysay', 149, 108, true );
  add_image_size('whitepaper', 265, 223, true );
  add_image_size('webinar-reg', 254, 169, true );
  add_image_size('webinar', 254, 188, true );
  add_image_size('webinar-detail', 804, 447, true );
  add_image_size('case', 230, 230, true );
  add_image_size('case-detail', 550, 550, true );
add_editor_style();
add_theme_support( 'custom-header', array('default-image' => get_template_directory_uri() . '/img/img-logo.png') );

/*---Menus starts here----*/
register_nav_menu( 'header', __( 'Header Menu', 'suyati' ) );
  register_nav_menu( 'about', __( 'About Menu', 'suyati' ) );
  register_nav_menu( 'resource', __( 'Resource Menu', 'suyati' ) );
  register_nav_menu( 'top', __( 'Top Menu', 'suyati' ) );

  /*Menus ends here*/

/*----Widgets---------*/
      register_sidebar( array('name' => __( 'Footer Text', 'suyati' ),'id' => 'suyati-footer-text','description' => __( 'The Text For Footer' ),'before_widget' => '',    'after_widget' => '','before_title' => '<h3 class="widget-title">','after_title' => '</h3>',
  ) );
  
/*--Right Sidebar widget About us Page starts here--*/
register_sidebar( array('name' => __( 'About Sidebar', 'suyati' ),'id' => 'about-sidebar','description' => __( 'Sidebar Menu For About Us Page' ),'before_widget' => '','after_widget' => '','before_title' => '','after_title' => '',
  ) );
/*--Rght Sidebar widget About us ends here--*/

/*--Right Sidebar widget About us Page starts here--*/
register_sidebar( array('name' => __( 'Resource Sidebar', 'suyati' ),'id' => 'resource-sidebar','description' => __( 'Sidebar Menu For Resource Page' ),'before_widget' => '','after_widget' => '','before_title' => '','after_title' => '',
  ) );
/*--Rght Sidebar widget About us ends here--*/


/*--Right Sidebar widget for twitter starts here--*/
register_sidebar( array('name' => __( 'Twitter Sidebar', 'suyati' ),'id' => 'twitter-sidebar','description' => __( 'Sidebar Menu For Twitter Stream' ),'before_widget' => '','after_widget' => '','before_title' => '','after_title' => '',
  ) );
  
  /*------Right Sidebar widget for subscribe------------*/
  register_sidebar( array('name' => __( 'subscribe Sidebar', 'suyati' ),'id' => 'subscribe-sidebar','description' => __( 'Sidebar Menu For subscribe' ),'before_widget' => '','after_widget' => '','before_title' => '','after_title' => '',
  ) );


register_sidebar( array('name' => __( 'Footer', 'suyati' ),'id' => 'footer','description' => __( 'Footer ' ),'before_widget' => '','after_widget' => '','before_title' => '','after_title' => '',
  ) );

register_sidebar( array('name' => __( 'Blog', 'suyati' ),'id' => 'blog','description' => __( 'Blog ' ),'before_widget' => '','blog_widget' => '','before_title' => '','after_title' => '',
  ) );
register_sidebar( array('name' => __( 'Blog Life at Suyati', 'suyati' ),'id' => 'life','description' => __( 'Blog Life at Suyati ' ),'before_widget' => '','blog_widget' => '','before_title' => '','after_title' => '',
  ) );


/*--Right Sidebar widget for twitter ends here--*/
}
add_action( 'after_setup_theme', 'suyati_setup' );
add_theme_support( 'post-thumbnails' );
/*--- Enque Script and styles starts here---*/

function suyati_scripts_styles(){

wp_deregister_script( 'jquery' );
wp_deregister_style( 'open-sans' );

wp_enqueue_style( 'admin-bar');
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css','3.9.2');
wp_enqueue_style( 'proxima', get_template_directory_uri() . '/fonts/proxima-nova/stylesheet.css');
wp_enqueue_style( 'open-sans', get_template_directory_uri() . '/fonts/open-sans/stylesheet.css');
wp_enqueue_style( 'popup', get_template_directory_uri() . '/css/jquery.popup.css');

/*wp_enqueue_style( 'horizon-swiper', get_template_directory_uri() . '/microsite_assests/css/horizon-swiper.min.css');
wp_enqueue_style( 'horizon-swiper_style', 'http://horizon-swiper.sebsauer.de/assets/css/style.min.css');*/


if(!is_singular("casestudies")&&!is_singular("whitepaper")&&!is_singular("webinar")){
  wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/css/jquery.bxslider.min.css','3.9.2');
  wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carous.min.css','3.9.2');
  wp_enqueue_style( 'fselector', get_template_directory_uri() . '/css/jquery.fs.selecter.min.css','3.9.2');
  wp_enqueue_style( 'pretty', get_template_directory_uri() . '/css/prettyCheckable.min.css','3.9.2');
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css','3.9.2');
  wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/b-carousel.min.css','3.9.2');
  wp_enqueue_style( 'mCustom', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.min.css','3.9.2');
  wp_enqueue_style( 'grid-css', get_template_directory_uri() . '/grid/css/component.css','3.9.2');
  wp_enqueue_style( 'mCustom', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css','3.9.2');
  wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css','3.9.2');
}
wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css','3.9.8');
wp_enqueue_style( 'suyati-style', get_stylesheet_uri(),'3.9.2');

wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.1.0',false);
wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(),'3.9.2',false);

wp_enqueue_script( 'popup', get_template_directory_uri() . '/js/jquery.popup.js', array(),'false',true);
wp_enqueue_script( 'popup1', get_template_directory_uri() . '/js/jquery.popup1.js', array(),'false',true);




if(!is_singular("casestudies")&&!is_singular("whitepaper")&&!is_singular("webinar")){
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(),'3.9.9',true);
    wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array(),'3.9.3',true);
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(),'3.9.3',true);
    wp_enqueue_script( 'fselector', get_template_directory_uri() . '/js/jquery.fs.selecter.min.js', array(),'3.9.3',false);
    wp_enqueue_script( 'pretty', get_template_directory_uri() . '/js/prettyCheckable.min.js', array(),'3.9.3',true);
    wp_enqueue_script( 'banner', get_template_directory_uri() . '/js/b24.index.banner.min.js', array(),'3.9.3',true);
    wp_enqueue_script( 'mCustom', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.min.js', array(),'3.9.3',true);
    
    wp_enqueue_script( 'modern', get_template_directory_uri() . '/js/modernizr.custom.min.js', array(),'3.9.3',true);
    wp_enqueue_script( 'grid', get_template_directory_uri() . '/js/grid.min.js', array(),'3.9.3',true);
    
    
    wp_enqueue_script( 'appear', get_template_directory_uri() . '/js/jquery.appear.min.js', array(),'3.9.3',true);
    wp_enqueue_script( 'tabs', get_template_directory_uri() . '/js/responsive-tabs.min.js', array(),'3.9.3',true);
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(),'3.9.3',true);
    wp_enqueue_script( 'suyati', get_template_directory_uri() . '/js/suyati.js', array(), false, true);
    
    
  }

  
}

//wp_enqueue_script( 'horizon-swiper', get_template_directory_uri() . '/microsite_assests/js/horizon-swiper.js', array(),'',true);
// wp_enqueue_script( 'horizon-swiper-main', 'http://horizon-swiper.sebsauer.de/assets/js/main.js', array(),'',true);



add_action( 'wp_enqueue_scripts', 'suyati_scripts_styles' );
  
  function new_excerpt_length($length) {
    return 30;
  }
  add_filter('excerpt_length', 'new_excerpt_length');
  function custom_excerpt_more( $more ) {
    return '...';
  }
  add_filter( 'excerpt_more', 'custom_excerpt_more' );

add_filter('post_type_link', 'services_permalink_structure', 10, 4);
function services_permalink_structure($post_link, $post, $leavename, $sample)
{
if ( false !== strpos( $post_link, '%service-type%' ) ) {
$event_type_term = get_the_terms( $post->ID, 'service-type' );
  //if($event_type_term[0]->slug!="qa-cat"){
    $post_link = str_replace( '%service-type%', array_pop( $event_type_term )->slug, $post_link );
  //}
  //else{
    //  $post_link = str_replace( '%service-type%', '.', $post_link );
  //}
}
return $post_link;
}
add_filter('post_type_link', 'technology_permalink_structure', 10, 4);
function technology_permalink_structure($post_link, $post, $leavename, $sample)
{
if ( false !== strpos( $post_link, '%technology-type%' ) ) {
$event_type_term = get_the_terms( $post->ID, 'technology-type' );
$post_link = str_replace( '%technology-type%', array_pop( $event_type_term )->slug, $post_link );
}
return $post_link;
}
add_filter('post_type_link', 'career_permalink_structure', 10, 4);
function career_permalink_structure($post_link, $post, $leavename, $sample)
{
if ( false !== strpos( $post_link, '%job_category%' ) ) {
$event_type_term = get_the_terms( $post->ID, 'job_category' );
$post_link = str_replace( '%job_category%', array_pop( $event_type_term )->slug, $post_link );
}
return $post_link;
}
/* Plugin Name: Category specific single page */
add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php"; } return $t;' ));
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt);
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}
function pregp_archive_ppp_wpse_108225($qry) {
if ($qry->is_main_query() && $qry->is_archive()) {
$qry->set('posts_per_page',6);
}
}
add_action('pre_get_posts','pregp_archive_ppp_wpse_108225');
function your_comment_form_fields($the_form_fields){
// code to remove the author field from $the_form_fields
return $the_form_fields;
}
add_filter('comment_form_default_fields', 'your_comment_form_fields');
add_filter('dfi_post_types', 'filter_post_types');
function filter_post_types() {
  return array('post', 'page'); //will display DFI in post and page
}
class themeslug_walker_nav_menu extends Walker_Nav_Menu {
// add classes to ul sub-menus
function start_lvl( &$output, $depth = 0, $args = array() ) {
// depth dependent classes
$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
$display_depth = ( $depth + 1); // because it counts the first submenu as 0
$classes = array(
'sub-menu',
( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
( $display_depth >=2 ? 'sub-sub-menu' : '' ),
'menu-depth-' . $display_depth
);
$class_names = implode( ' ', $classes );

// build html
$output .= "\n" . $indent . '<ul class="hidden ' . $class_names . '">' . "\n";
  }
  
  // add main/sub classes to li's and links
  function start_el(  &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  global $wp_query;
  $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
  
  // depth dependent classes
  $depth_classes = array(
  ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
  ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
  ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
  'menu-item-depth-' . $depth
  );
  $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
  
  // passed classes
  $classes = empty( $item->classes ) ? array() : (array) $item->classes;
  $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
  
  // build html
  $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
    
    // link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
    
    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
    $args->before,
    $attributes,
    $args->link_before,
    apply_filters( 'the_title', $item->title, $item->ID ),
    $args->link_after,
    $args->after
    );
    
    // build html
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    }
    function custom_cf7_required_radio_filter($result, $tag) {
    $name = $tag['name'];
    if (
    $tag['type'] == 'radio'
    //&& substr($name, -9) == '-required'
    && empty($_POST[$name])
    ) {
    $result['valid'] = false;
    $result['reason'][$name] = 'Please fill in this required field';
    }
    return $result;
    }
    add_filter('wpcf7_validate_radio', 'custom_cf7_required_radio_filter', 10, 2);
    function easy_add_thumbnailll() {
      //echo get_the_ID();
    if(get_post_type() == "post"){
    $already_has_thumb = has_post_thumbnail();
    if (!$already_has_thumb)  {
    //$attached_image = get_children( "order=DESc&post_parent=".get_the_ID()."&post_type=attachment&post_mime_type=image&numberposts=1" );
        $attached_image =  get_attached_media( 'image',get_the_ID() );
      //print_r($attached_image);
    if ($attached_image) {
    $attachment_values = array_values($attached_image);
    $first_child_image = $attachment_values[0];
    add_post_meta($post->ID, '_thumbnail_id', $first_child_image->ID, true);
    }
    }
      }
    }
    add_action('the_post', 'easy_add_thumbnailll');
    
    // hooks added to set the thumbnail when publishing too
    add_action('new_to_publish', 'easy_add_thumbnailll');
    add_action('draft_to_publish', 'easy_add_thumbnailll');
    add_action('pending_to_publish', 'easy_add_thumbnailll');
    add_action('future_to_publish', 'easy_add_thumbnailll');
    
    
    add_filter( 'script_loader_src', 'remove_src_version' );
    //add_filter( 'style_loader_src', 'remove_src_version' );
    function remove_src_version ( $src ) {
    global $wp_version;
    $version_str = '?ver='.$wp_version;
    $version_str_offset = strlen( $src ) - strlen( $version_str );
    if( substr( $src, $version_str_offset ) == $version_str )
    return substr( $src, 0, $version_str_offset );
    else
    return $src;
    }
    //function my_gallery_shortcode( $output = '', $atts, $content = false, $tag = false ) {
      //  $return = $output; // fallback
    //
      //  // retrieve content of your own gallery function
      //  //$my_result = get_my_gallery_content( $atts );
    ////$my_result = get_post_gallery();
      //  // boolean false = empty, see http://php.net/empty
      //  if( !empty( $my_result ) ) {
        //    $return = $my_result;
      //  }
    //
      //  return $return;
    //}
    //
    //add_filter( 'post_gallery', 'my_gallery_shortcode', 10, 4 );
    function fix_my_gallery_wpse43558($output, $attr) {
    global $post;
    static $instance = 0;
    $instance++;
    /**
    *  will remove this since we don't want an endless loop going on here
    */
    // Allow plugins/themes to override the default gallery template.
    //$output = apply_filters('post_gallery', '', $attr);
    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if ( isset( $attr['orderby'] ) ) {
    $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
    if ( !$attr['orderby'] )
    unset( $attr['orderby'] );
    }
    extract(shortcode_atts(array(
    'order'      => 'ASC',
    'orderby'    => 'menu_order ID',
    'id'         => $post->ID,
    'itemtag'    => 'dl',
    'icontag'    => 'dt', 
    'captiontag' => 'dd',
    'columns'    => 3,
    'size'       => 'thumbnail',
    'include'    => '',
    'exclude'    => ''
    ), $attr));
    $id = intval($id);
    if ( 'RAND' == $order )
    $orderby = 'none';
    if ( !empty($include) ) {
    $include = preg_replace( '/[^0-9,]+/', '', $include );
    $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    $attachments = array();
    foreach ( $_attachments as $key => $val ) {
    $attachments[$val->ID] = $_attachments[$key];
    }
    } elseif ( !empty($exclude) ) {
    $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
    $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
    $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }
    if ( empty($attachments) )
    return '';
    if ( is_feed() ) {
    $output = "\n";
    foreach ( $attachments as $att_id => $attachment )
    $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
    return $output;
    }
    $itemtag = tag_escape($itemtag);
    $captiontag = tag_escape($captiontag);
    $columns = intval($columns);
    $itemwidth = $columns > 0 ? floor(100/$columns) : 100;
    $float = is_rtl() ? 'right' : 'left';
    $selector = "gallery-{$instance}";
    $gallery_style = $gallery_div = '';
    if ( apply_filters( 'use_default_gallery_style', true ) )
    
    $size_class = sanitize_html_class( $size );
    // $gallery_div = "<div id='$selector' class='gallery galleryid-{$id} gallery-columns-{$columns} gallery-size-{$size_class}'>";
      $gallery_div = ' <ul class="og-grid" id="'.$selector.'">';
        $output = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );
        $i = 0;
        foreach ( $attachments as $id => $attachment ) {
        $link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
        //$output .= "<{$itemtag} class='gallery-item'>";
        //$output .= "
        //    <{$icontag} class='gallery-icon'>
        //        $link
        //    </{$icontag}>";
        /*
        * This is the caption part so i'll comment that out
        * #2 in question
        */
        /*
        if ( $captiontag && trim($attachment->post_excerpt) ) {
        $output .= "
        <{$captiontag} class='wp-caption-text gallery-caption'>
        " . wptexturize($attachment->post_excerpt) . "
        </{$captiontag}>";
        }*/
          $img = get_post($id);
          $thumb =  wp_get_attachment_image($id, array(150,150));
          $output .= '<li><a href="#" data-largesrc="'.$img->guid.'" data-title="'.$img->post_excerpt.'">'.$thumb.'</a>';
        }
        /**
        * this is the extra br you want to remove so we change it to jus closing div tag
        * #3 in question
        */
        /*$output .= "
        <br style='clear: both;' />
      </div>\n";
      */
    $output .= "</ul>\n";
    return $output;
    }
    add_filter("post_gallery", "fix_my_gallery_wpse43558",10,2);


	add_filter('post_link', 'rating_permalink', 10, 3);
add_filter('post_type_link', 'rating_permalink', 10, 3);
 
function rating_permalink($permalink, $post_id, $leavename) {
	
    if (strpos($permalink, '%service-type%') === FALSE) return $permalink;
     echo "test";exit;
        // Get post
        $post = get_post($post_id);
        if (!$post) return $permalink;
 
        // Get taxonomy terms
        $terms = wp_get_object_terms($post->ID, 'service-type');   
        if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0])) $taxonomy_slug = $terms[0]->slug;
        else $taxonomy_slug = 'not-rated';
 
    return str_replace('%rating%', $taxonomy_slug, $permalink);
}  
