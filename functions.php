<?php
/**
 * montblanc functions and definitions
 *
 * @package montblanc
 */

 //Checking Theme Update
 require 'theme-update-checker.php';
 $example_update_checker = new ThemeUpdateChecker(
 'montblanc_jp',
 'https://wooseum.com/trunk/montblanc/wjaijigreosinv4r/update-info.json'
 );


// Update number of items in cart and total after Ajax
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment( $fragments ) {
  global $woocommerce;
  ob_start();
  ?>
  <span class="cart-count"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
  <?php

  $fragments['span.cart-count'] = ob_get_clean();

  return $fragments;
}

function widget( $args, $instance ) {
    if ( apply_filters( 'woocommerce_widget_cart_is_hidden', is_cart() || is_checkout() ) ) {
      return;
    }

    $hide_if_empty = empty( $instance['hide_if_empty'] ) ? 0 : 1;

    $this->widget_start( $args, $instance );

    if ( $hide_if_empty ) {
      echo '<div class="hide_cart_widget_if_empty">';
    }

    // Insert cart widget placeholder - code in woocommerce.js will update this on page load
    echo '<div class="widget_shopping_cart_content"></div>';

    if ( $hide_if_empty ) {
      echo '</div>';
    }

    $this->widget_end( $args );
  }


// Add new page named "Home" when this theme was activated.
if (isset($_GET['activated']) && is_admin()){

        $new_page_title = 'Home';
        $new_page_content = 'This is the front page content';
        $new_page_template = '';

        $page_check = get_page_by_title($new_page_title);
        $new_page = array(
                'post_type' => 'page',
                'post_title' => $new_page_title,
                'post_content' => $new_page_content,
                'post_status' => 'publish',
                'post_author' => 1,
        );
        if(!isset($page_check->ID)){
                $new_page_id = wp_insert_post($new_page);
                if(!empty($new_page_template)){
                        update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
                }
        }
}



// Woocommerce theme

add_theme_support( 'woocommerce' );

// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );
	unset( $enqueue_styles['woocommerce-layout'] );
	unset( $enqueue_styles['woocommerce-smallscreen'] );
	return $enqueue_styles;
}

// Remove sidebar in woopages.
// remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );


// Reorder Product Page Contents – WooCommerce
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 15 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );



// Remove add to cart button on Category pages.
function remove_loop_button(){
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action('init','remove_loop_button');


// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row. see also /css/woocommerce-layout.less line93 if you want change this number.
	}
}

// Change number of thumbnails per row in product galleries

add_filter ( 'woocommerce_product_thumbnails_columns', 'xx_thumb_cols' );
 function xx_thumb_cols() {
     return 5; // .last class applied to every 5th thumbnail
 }



// Change number of thumbnails per row in related product
add_filter( 'woocommerce_output_related_products_args', 'themename_related_products_count' );
 function themename_related_products_count( $args ) {
     $args['posts_per_page'] = 3;
     $args['columns'] = 3;
     return $args;
}


//Display product category image */
add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
function woocommerce_category_image() {
    if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	    if ( $image ) {
		    echo '<img class="categoryimg" src="' . $image . '" alt="' . $cat->name . '" />';
		}
	}
}




/* Remove WooCommerce styles and scripts. */
function woo_remove_lightboxes() {

        // Styles
        wp_dequeue_style( 'woocommerce_prettyPhoto_css' );

        // Scripts
        wp_dequeue_script( 'prettyPhoto' );
        wp_dequeue_script( 'prettyPhoto-init' );
        wp_dequeue_script( 'fancybox' );
        wp_dequeue_script( 'enable-lightbox' );
}

add_action( 'wp_enqueue_scripts', 'woo_remove_lightboxes', 99 );

function df_woocommerce_single_product_image_html($html) {
    $html = str_replace('data-rel="prettyPhoto', 'rel="lightbox', $html);
    return $html;
}
add_filter('woocommerce_single_product_image_html', 'df_woocommerce_single_product_image_html', 99, 1); // single image
add_filter('woocommerce_single_product_image_thumbnail_html', 'df_woocommerce_single_product_image_html', 99, 1); // thumbnails



/* Enabling product gallery features (zoom, swipe, lightbox) in 3.0.0 / https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0 */
add_theme_support( 'wc-product-gallery-lightbox' );

add_theme_support( 'woocommerce', array(
'thumbnail_image_width' => 670,
'gallery_thumbnail_image_width' => 280,
'single_image_width' => 1200,
) );



// Changing Tag Cloud Font Size
add_filter( 'woocommerce_product_tag_cloud_widget_args', 'custom_font_size' );
function custom_font_size ( $list_args ){
  $list_args = array(
  'taxonomy' => 'product_tag',
  'smallest' => 9,
  'largest' => 9
  );
  return $list_args;
}




/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 960; /* pixels */
}

if ( ! function_exists( 'montblanc_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function montblanc_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on montblanc, use a find and replace
	 * to change 'montblanc' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'montblanc', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'montblanc' ),
    'mobile' => __( 'Mobile Menu', 'montblanc' ),
    'footernav' => __( 'Footer Menu', 'montblanc' ),

	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'montblanc_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // montblanc_setup
add_action( 'after_setup_theme', 'montblanc_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function montblanc_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'montblanc' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'InstaFooter', 'montblanc' ),
		'id'            => 'InstaFooter',
		'description'   => '',
		'before_widget' => '<div id="instafooter">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
}
add_action( 'widgets_init', 'montblanc_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function montblanc_scripts() {
	wp_enqueue_style( 'montblanc-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'montblanc-ionicons', get_template_directory_uri().'/css/ionicons.min.css', array(), '2.0.1' );

	wp_enqueue_style( 'woocommerce', get_template_directory_uri().'/css/woocommerce.css' );

	wp_enqueue_style( 'woocommerce-layout', get_template_directory_uri().'/css/woocommerce-layout.css' );

	wp_enqueue_style( 'woocommerce-smallscreen', get_template_directory_uri().'/css/woocommerce-smallscreen.css',array(),'', 'only screen and (max-width: 768px)' );

	wp_enqueue_style( 'montblanc-megamenu', get_template_directory_uri().'/css/megamenu.css', array(),1.0 );

	wp_enqueue_style( 'montblanc-slidecart', get_template_directory_uri().'/css/slidecart.css', array(),1.0 );

	wp_enqueue_script( 'montblanc-header', get_template_directory_uri() . '/js/header.js', array(), '1.0', true );

	wp_enqueue_script( 'montblanc-slidecart', get_template_directory_uri() . '/js/slidecart.js', array(), '1.0', true );

	wp_enqueue_script( 'montblanc-slickslider', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', true );

	wp_enqueue_script( 'montblanc-navigation', get_template_directory_uri() . '/js/megamenu.js', array(), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'montblanc_scripts' );



// remove the WooCommerce archives pages title
add_filter( 'woocommerce_show_page_title', '__return_false' );
remove_action( 'woocommerce_archive_description', 'action_woocommerce_archive_description', 10, 0 ); 



// print the page title

if(!function_exists('montblanc_page_title')){
	function montblanc_page_title(){

		if(is_single()){
			$titleoutput='<h1 class="page-title nodesc">'.get_the_title().'</h1>';
			echo $titleoutput;

		}elseif(function_exists('is_woocommerce') && is_woocommerce()){
			echo '<h1 class="page-title nodesc">';
				woocommerce_page_title();
			echo '</h1>';

		}elseif(is_archive()){
			echo '<h1 class="page-title nodesc">';
			if ( is_day() ) :
			printf( __( 'Daily Archives <span>%s</span>', 'montblanc' ), get_the_date() );
			elseif ( is_month() ) :
			printf( __( 'Monthly Archives <span>%s</span>', 'montblanc' ), get_the_date('F Y') );
			elseif ( is_year() ) :
			printf( __( 'Yearly Archives <span>%s</span>', 'montblanc' ), get_the_date('Y') );
			elseif ( is_author()) :
			printf( __( 'Author Archives %s', 'montblanc' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" );
			else :
			printf( __( '%s', 'montblanc' ), '<span>' . single_cat_title( '', false ) . '</span>' );
			endif;
			echo '</h1>';


		}elseif(is_search()){
			echo '<h1 class="page-title nodesc">';
			printf( __( 'Search Results for %s', 'montblanc' ), '<span>' . get_search_query() . '</span>' );
			echo '</h1>';

		}elseif(is_404()){
			echo ' <h1 class="page-title nodesc">';
			_e( '404 Page', 'montblanc' );
			echo '</h1>';

		}elseif( is_home() ){
			$homeid = get_option('page_for_posts');
			echo '<h1 class="page-title nodesc">';
			echo ($homeid)? get_the_title( $homeid ) : __('Latest Posts', 'montblanc');
			echo '</h1>';
		}else{

		 if (have_posts()) : while (have_posts()) : the_post();
			//if(!is_front_page()){
				$titleoutput.='<h1 class="page-title">'.get_the_title().'</h1>';
				echo $titleoutput;
			//}
		endwhile; endif; wp_reset_query();

		}
	}
}

//Display product category descriptions */

add_action( 'woocommerce_archive_description', 'wc_category_description' );
    function wc_category_description() {
        if ( is_product_category() ) {
            global $wp_query;
            $cat_id = $wp_query->get_queried_object_id();
            $cat_desc = term_description( $cat_id, 'product_cat' );
            $subtit = '<p class="categorydescription">'.$cat_desc.'</p>';
            echo $subtit;
        }
    }



//Display Instagram Feed */
function shortcode_instagram($arg){
	extract ( shortcode_atts ( array (
		'url' => 'https://www.instagram.com/ymtk/',
		'maxwidth' => '10',
	), $arg ) );

	$ret = '';

	$ret .= '<blockquote class="instagram-media" data-instgrm-version="7" ';
	$ret .= 'style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); ';
	$ret .= 'margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); ';
	$ret .= 'width:calc(100% - 2px);">';
	$ret .= '<div style="padding:8px;"> ';
	$ret .= '<div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> ';
	$ret .= '<div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); ';
	$ret .= 'display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div>';
	$ret .= '<p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; ';
	$ret .= 'overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="';
	$ret .= $url;
	$ret .= '" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; ';
	$ret .= 'line-height:17px; text-decoration:none;" target="_blank"></a></p></div></blockquote>';

	if (isset($maxwidth) && $maxwidth != '') {
		$ret = '<div style="max-width:'.$maxwidth.'px">'.$ret.'</div>';
	}

	return $ret;
}
add_shortcode('instagram', 'shortcode_instagram');

function shortcode_scripts() {
	global $post;
	if (has_shortcode($post->post_content, 'instagram')) {
		wp_enqueue_script('instagramjs', '//platform.instagram.com/en_US/embeds.js');
	}
}
add_action('wp_enqueue_scripts', 'shortcode_scripts');






/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
