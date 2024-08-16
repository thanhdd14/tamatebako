<?php
/*
Template Name: rental-item-page
*/
?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package montblanc
 */
$template_uri = get_template_directory_uri();
get_header(); ?>

<main class="page-rental-item">
    <section class="src-rental">
        <div class="inner">
            <div class="rental-items">
                <div class="rental-items__ct c-txt__basic">
                    <h1 class="c-ttl__01"> Rental<br> items </h1>
                    <p> Tamatebakoの帯バッグや着物ワンピースなどを5泊6日でレンタルいたします。 <br> 貸し出し中の場合がありますので、必ずメールでご利用日時とご利用希望期間をお知らせください。 </p>
                </div>
                <div class="rental-items__img">
                    <div class="rental-items__img--pullright">
                        <img src="<?php echo $template_uri;?>/img/rental/rental-item-img.jpg" alt="Rental items">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-product">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin--left"> Kimono<br class="sp">dress </h2>
        </div>
        <div class="product-list js-product c-txt__basic">
            <div class="swiper-wrapper">
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-01.jpg" alt="RENTAL ITEMS 着物ドレス 流奈 ~LUNA~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 着物ドレス 流奈 ~LUNA~</span>
                            <span class="product-list__ct-price">¥38,000</span>
                            <span class="product-list__ct-note">ONE SIZE（9号）</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-02.jpg" alt="RENTAL ITEMS 着物ドレス 翔~HABATAKI~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 着物ドレス 翔~HABATAKI~</span>
                            <span class="product-list__ct-price">¥38,000</span>
                            <span class="product-list__ct-note">ONE SIZE（9号）</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img product-list__img--rented">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-03.jpg" alt="RENTAL ITEMS 着物ドレス 翔~HABATAKI~">
                            <span>Rented</span>
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 着物ドレス 翔~HABATAKI~</span>
                            <span class="product-list__ct-price">¥38,000</span>
                            <span class="product-list__ct-note">ONE SIZE（9号）</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-04.jpg" alt="RENTAL ITEMS 着物ドレス 翔~HABATAKI~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 着物ドレス 翔~HABATAKI~</span>
                            <span class="product-list__ct-price">¥38,000</span>
                            <span class="product-list__ct-note">ONE SIZE（9号）</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-01.jpg" alt="RENTAL ITEMS 着物ドレス 流奈 ~LUNA~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 着物ドレス 流奈 ~LUNA~</span>
                            <span class="product-list__ct-price">¥38,000</span>
                            <span class="product-list__ct-note">ONE SIZE（9号）</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-02.jpg" alt="RENTAL ITEMS 着物ドレス 翔~HABATAKI~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 着物ドレス 翔~HABATAKI~</span>
                            <span class="product-list__ct-price">¥38,000</span>
                            <span class="product-list__ct-note">ONE SIZE（9号）</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img product-list__img--rented">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-03.jpg" alt="RENTAL ITEMS 着物ドレス 翔~HABATAKI~">
                            <span>Rented</span>
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 着物ドレス 翔~HABATAKI~</span>
                            <span class="product-list__ct-price">¥38,000</span>
                            <span class="product-list__ct-note">ONE SIZE（9号）</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-04.jpg" alt="RENTAL ITEMS 着物ドレス 翔~HABATAKI~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 着物ドレス 翔~HABATAKI~</span>
                            <span class="product-list__ct-price">¥38,000</span>
                            <span class="product-list__ct-note">ONE SIZE（9号）</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="pagination-bar product-bar">
                <div class="swiper-pagination"></div>
                <div class="pagination-bar__arrow">
                    <div class="swiper-button-prev c-arrow c-arrow--left"></div>
                    <div class="swiper-button-next c-arrow c-arrow--right"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-rental">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin--left"> Obi bag </h2>
        </div>
        <div class="product-list js-rental c-txt__basic">
            <div class="swiper-wrapper">
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-05.jpg" alt="RENTAL ITEMS 西陣織クラッチバッグSSサイズ 美桜 ~MIO~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 西陣織クラッチバッグSSサイズ 美桜 ~MIO~</span>
                            <span class="product-list__ct-price">¥10,000</span>
                            <span class="product-list__ct-note">ONE SIZE</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-06.jpg" alt="RENTAL ITEMS 西陣織ニュームバッグ 飛鳥~ASUKA~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 西陣織ニュームバッグ 飛鳥~ASUKA~</span>
                            <span class="product-list__ct-price">¥12,000</span>
                            <span class="product-list__ct-note">ONE SIZE</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-07.jpg" alt="RENTAL ITEMS 西陣織スクエアがま口帯バッグ 吉良律 ~KIRARI~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 西陣織スクエアがま口帯バッグ 吉良律 ~KIRARI~</span>
                            <span class="product-list__ct-price">¥10,000</span>
                            <span class="product-list__ct-note">ONE SIZE</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-08.jpg" alt="RENTAL ITEMS西陣織クラッチバッグSサイズ 舞扇 ~MAIOUGI~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS西陣織クラッチバッグSサイズ 舞扇 ~MAIOUGI~</span>
                            <span class="product-list__ct-price">¥10,000</span>
                            <span class="product-list__ct-note">ONE SIZE</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-05.jpg" alt="RENTAL ITEMS 西陣織クラッチバッグSSサイズ 美桜 ~MIO~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 西陣織クラッチバッグSSサイズ 美桜 ~MIO~</span>
                            <span class="product-list__ct-price">¥10,000</span>
                            <span class="product-list__ct-note">ONE SIZE</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-06.jpg" alt="RENTAL ITEMS 西陣織ニュームバッグ 飛鳥~ASUKA~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 西陣織ニュームバッグ 飛鳥~ASUKA~</span>
                            <span class="product-list__ct-price">¥12,000</span>
                            <span class="product-list__ct-note">ONE SIZE</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-07.jpg" alt="RENTAL ITEMS 西陣織スクエアがま口帯バッグ 吉良律 ~KIRARI~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS 西陣織スクエアがま口帯バッグ 吉良律 ~KIRARI~</span>
                            <span class="product-list__ct-price">¥10,000</span>
                            <span class="product-list__ct-note">ONE SIZE</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/rental/rental-item-img-08.jpg" alt="RENTAL ITEMS西陣織クラッチバッグSサイズ 舞扇 ~MAIOUGI~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">RENTAL ITEMS西陣織クラッチバッグSサイズ 舞扇 ~MAIOUGI~</span>
                            <span class="product-list__ct-price">¥10,000</span>
                            <span class="product-list__ct-note">ONE SIZE</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="pagination-bar rental-bar">
                <div class="swiper-pagination"></div>
                <div class="pagination-bar__arrow">
                    <div class="swiper-button-prev c-arrow c-arrow--left"></div>
                    <div class="swiper-button-next c-arrow c-arrow--right"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="mbpc-100 mbsp-80">
        <div class="inner">
            <div class="c-al--c c-txt__basic basic-note">
                <p> ※レンタル規約については<a href="">こちら</a>をご覧ください。 </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
