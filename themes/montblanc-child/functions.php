<?php add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    //アイキャッチ画像の定義と切り抜き
    add_image_size('medium', 300, 300, true);

    //Update get_price_html function to change output depending on stock
    //Added By Outcome Developper
    add_filter('woocommerce_get_price_html', 'oc_price_html', 100, 2);
    function oc_price_html($price, $product)
    {
        if ($product->is_in_stock()) {
            return $price . '</br><span class="in-stock" style="color: #000;">在庫あり</span>';
        } else {
            return $price . '</br><span class="sold-out">Sold-out</span>';
        }
    }
} ?>
