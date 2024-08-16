<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package montblanc
 */

get_header(); ?>

	<div id="oneclm" class="content-area front-page woocommerce-page ">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

			<?php if($post->post_content=="") : ?>
			<?php else : ?>
			<div class="welcome">
			<?php the_content() ;?>
			</div>
			<?php endif; ?>
			<?php endwhile; ?>
			<?php montblanc_paging_nav(); ?>

		<?php endif; ?>


		<section class="featured clear">
		<h2><span>Featured Products</span></h2>
		<?php echo do_shortcode('[featured_products columns="3"]'); ?>
		</section><!--/.featured-->




		<?php
		$options = get_option('home_cat_activate'); // キーの前半部分（[]の前）を変数に格納
		if ( $options['checkbox'] ) : ?>

		<script type="text/javascript">
		// Parallax
		$(function(){
			var target1 = $(".categoryphoto");
			var targetPosOT1 = target1.offset().top;
			var targetFactor = 0.1;
			var windowH = $(window).height();
			var scrollYStart1 = targetPosOT1 - windowH;
			$(window).on('scroll',function(){
			var scrollY = $(this).scrollTop();
			if(scrollY > scrollYStart1){
			  target1.css('background-position-y', (scrollY - targetPosOT1) * targetFactor + 'px');

			}else{
			  target1.css('background-position','center top');
			}
			});
		});
			</script>

		</main><!-- #main -->
	</div><!-- #oneclm -->
</div>
</div>
	<div class="categoryphoto" style="background-image:url(<?php echo get_theme_mod( 'home_cat_img'); ?>); ">
		<hgroup class="tagline <?php echo get_option('home_cat_color'); ?>">
		<h1><?php if(get_option('home_cat_text')): ?><?php echo get_option('home_cat_text'); ?><?php endif; ?></h1>
		<p><?php if(get_option('home_cat_desc')): ?><?php echo get_option('home_cat_desc'); ?><?php endif; ?></p>
		<?php if(get_option('home_cat_btn')): ?><a href="<?php echo get_option('home_cat_url'); ?>"><?php echo get_option('home_cat_btn'); ?></a><?php endif; ?>
	</div>

		<div id="contentwrapper" class="site-content">
		<div id="main">
	<div id="oneclm" class="content-area front-page woocommerce-page ">
		<main id="main" class="site-main" role="main">
<div>test</div>
		<section class="clearfix featuredcat-content">
		<?php $cat_slug = get_option('home_cat_slug'); $reco_ob = new wp_query(array('category_name'=>$cat_slug, 'posts_per_page'=>9, 'post_status'=>'publish')); ?>

			<ul class="featuredcat products columns-3">
			    <?php
				    $cat_slug = get_option('home_cat_slug');
			        $args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => $cat_slug );
			        $loop = new WP_Query( $args );
			        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
			                <li class="product type-product">
			                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
			                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
			                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');; ?>
			                        <h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
			                        <span class="price"><?php echo $product->get_price_html(); ?></span>
			                    </a>
			                </li>
			    <?php endwhile; ?>
			    <?php wp_reset_query(); ?>
			</ul><!--/.products-->
			<?php if(get_option('home_cat_btn')): ?><div class="viewall button"><a href="<?php echo get_option('home_cat_url'); ?>"><?php echo get_option('home_cat_btn'); ?></a></div><?php endif; ?>
		</section>

		<?php endif; ?>





		</main><!-- #main -->

		<?php get_sidebar(); ?>

	</div><!-- #oneclm -->

<?php get_footer(); ?>
