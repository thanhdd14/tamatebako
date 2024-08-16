<?php
/*
Template Name: made-to-order-page
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

<main class="page-made-to-order">
    <section class="src-rental">
        <div class="inner">
            <div class="rental-items">
                <div class="rental-items__ct c-txt__basic">
                    <h1 class="c-ttl__01"> Made<br> <span>to</span><br> order </h1>
                    <span class="rental-items__ct-ttl">着ていない着物や帯を<br class="sp">ときめきアイテムに！</span>
                    <p> お母様やお婆様から受け継がれた思い出の詰まった着物や帯を、素敵にアップサイクルしております。<br> お問い合わせ、オーダーメイドのご依頼はLINEから承ります。 </p>
                    <div class="flex-end">
                        <a href="" target="_blank" class="ion-link c-ft--en">LINE</a>
                    </div>
                </div>
                <div class="rental-items__img">
                    <div class="rental-items__img--pullright">
                        <img src="<?php echo $template_uri; ?>/img/made/made-to-order-img.jpg" alt="Made to order">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-flow">
        <div class="inner">
            <h2 class="c-ttl__01">Flow</h2>
            <ul class="flow-tab">
                <li class="active">
                    <span class="c-ft--en">Store</span>
                    <span class="c-ft--jp">ご来店の場合</span>
                </li>
                <li>
                    <span class="c-ft--en">Online</span>
                    <span class="c-ft--jp">オンラインの場合</span>
                </li>
            </ul>
            <div class="flow-block c-txt__basic">
                <div class="flow-block__item active">
                    <ul class="flow-steps">
                       <li class="flow-steps__item js-scrollin--item">
                            <span class="flow-steps__number">Step.01</span>
                            <div class="flow-steps__block">
                                <div class="flow-steps__block-ct">
                                    <h3 class="flow-steps__block-ct-ttl">
                                        <span class="c-ft--jp">お問い合わせ</span>
                                        <span class="c-ft--en">Contact</span>
                                    </h3>
                                    <p> LINEよりご予約の上、<br class="sp">お越しください。 </p>
                                </div>
                                <div class="flow-steps__block-img">
                                    <img src="<?php echo $template_uri; ?>/img/made/icon-01.png" alt="お問い合わせ">
                                </div>
                            </div>
                        </li>
                       <li class="flow-steps__item js-scrollin--item">
                            <span class="flow-steps__number">Step.02</span>
                            <div class="flow-steps__block">
                                <div class="flow-steps__block-ct">
                                    <h3 class="flow-steps__block-ct-ttl">
                                        <span class="c-ft--jp">デザインの決定</span>
                                        <span class="c-ft--en">Deciding on the design</span>
                                    </h3>
                                    <p> お持ち込みの着物や帯を拝見し、制作するデザインを決めます。 </p>
                                </div>
                                <div class="flow-steps__block-img">
                                    <img src="<?php echo $template_uri; ?>/img/made/icon-02.png" alt="デザインの決定">
                                </div>
                            </div>
                        </li>
                      <li class="flow-steps__item js-scrollin--item">
                            <span class="flow-steps__number">Step.03</span>
                            <div class="flow-steps__block">
                                <div class="flow-steps__block-ct">
                                    <h3 class="flow-steps__block-ct-ttl">
                                        <span class="c-ft--jp">制作</span>
                                        <span class="c-ft--en">Production</span>
                                    </h3>
                                    <p> 制作期間、お見積り金額を提示いたします。代金のご決済が確認されてから制作にかかります。<br> 制作期間：１〜３ヶ月
                                    </p>
                                </div>
                                <div class="flow-steps__block-img">
                                    <img src="<?php echo $template_uri; ?>/img/made/icon-03.png" alt="制作">
                                </div>
                            </div>
                        </li>
                       <li class="flow-steps__item js-scrollin--item">
                            <span class="flow-steps__number">Step.04</span>
                            <div class="flow-steps__block">
                                <div class="flow-steps__block-ct">
                                    <h3 class="flow-steps__block-ct-ttl">
                                        <span class="c-ft--jp">完成のご連絡</span>
                                        <span class="c-ft--en">Product completion notice</span>
                                    </h3>
                                    <p> 商品が完成した旨をお知らせいたします。<br> LINEより完成した商品の画像をお送りいたします。 </p>
                                </div>
                                <div class="flow-steps__block-img">
                                    <img src="<?php echo $template_uri; ?>/img/made/icon-04.png" alt="完成のご連絡">
                                </div>
                            </div>
                        </li>
                        <li class="flow-steps__item js-scrollin--item">
                            <span class="flow-steps__number">Step.05</span>
                            <div class="flow-steps__block">
                                <div class="flow-steps__block-ct">
                                    <h3 class="flow-steps__block-ct-ttl">
                                        <span class="c-ft--jp">商品のお届け</span>
                                        <span class="c-ft--en">Delivery of the product</span>
                                    </h3>
                                    <p> 店頭にてお渡しいたします。<br class="sp">ご郵送も承ります。 </p>
                                </div>
                                <div class="flow-steps__block-img">
                                    <img src="<?php echo $template_uri; ?>/img/made/icon-05.png" alt="商品のお届け">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="flow-block__item">
                    <ul class="flow-steps">
                       <li class="flow-steps__item js-scrollin--item">
                            <span class="flow-steps__number">Step.01</span>
                            <div class="flow-steps__block">
                                <div class="flow-steps__block-ct">
                                    <h3 class="flow-steps__block-ct-ttl">
                                        <span class="c-ft--jp">お問い合わせ</span>
                                        <span class="c-ft--en">Contact</span>
                                    </h3>
                                    <p> LINEより、オーダーメイドご希望のアイテムをお知らせください。 </p>
                                </div>
                                <div class="flow-steps__block-img">
                                    <img src="<?php echo $template_uri; ?>/img/made/icon-01.png" alt="お問い合わせ">
                                </div>
                            </div>
                        </li>
                       <li class="flow-steps__item js-scrollin--item">
                            <span class="flow-steps__number">Step.02</span>
                            <div class="flow-steps__block">
                                <div class="flow-steps__block-ct">
                                    <h3 class="flow-steps__block-ct-ttl">
                                        <span class="c-ft--jp">デザインの決定</span>
                                        <span class="c-ft--en">Deciding on the design</span>
                                    </h3>
                                    <p> お手持ちの着物や帯をお送りください。<br> お受け取り後、<br class="sp">制作するデザインを決めます。 </p>
                                </div>
                                <div class="flow-steps__block-img">
                                    <img src="<?php echo $template_uri; ?>/img/made/icon-02.png" alt="デザインの決定">
                                </div>
                            </div>
                        </li>
                       <li class="flow-steps__item js-scrollin--item">
                            <span class="flow-steps__number">Step.03</span>
                            <div class="flow-steps__block">
                                <div class="flow-steps__block-ct">
                                    <h3 class="flow-steps__block-ct-ttl">
                                        <span class="c-ft--jp">制作</span>
                                        <span class="c-ft--en">Production</span>
                                    </h3>
                                    <p> 制作期間、お見積り金額を提示いたします。代金のご決済が確認されてから制作にかかります。<br> 制作期間：１〜３ヶ月
                                    </p>
                                </div>
                                <div class="flow-steps__block-img">
                                    <img src="<?php echo $template_uri; ?>/img/made/icon-03.png" alt="制作">
                                </div>
                            </div>
                        </li>
                       <li class="flow-steps__item js-scrollin--item">
                            <span class="flow-steps__number">Step.04</span>
                            <div class="flow-steps__block">
                                <div class="flow-steps__block-ct">
                                    <h3 class="flow-steps__block-ct-ttl">
                                        <span class="c-ft--jp">完成のご連絡</span>
                                        <span class="c-ft--en">Product completion notice</span>
                                    </h3>
                                    <p> 商品が完成した旨をお知らせいたします。<br> LINEより完成した商品の画像をお送りいたします。 </p>
                                </div>
                                <div class="flow-steps__block-img">
                                    <img src="<?php echo $template_uri; ?>/img/made/icon-04.png" alt="完成のご連絡">
                                </div>
                            </div>
                        </li>
                        <li class="flow-steps__item js-scrollin--item">
                            <span class="flow-steps__number">Step.05</span>
                            <div class="flow-steps__block">
                                <div class="flow-steps__block-ct">
                                    <h3 class="flow-steps__block-ct-ttl">
                                        <span class="c-ft--jp">商品のお届け</span>
                                        <span class="c-ft--en">Delivery of the product</span>
                                    </h3>
                                    <p> 商品をご郵送いたします。 </p>
                                </div>
                                <div class="flow-steps__block-img">
                                    <img src="<?php echo $template_uri; ?>/img/made/icon-06.png" alt="商品のお届け">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-items">
        <div class="inner">
            <h2 class="c-ttl__01">Items</h2>
        </div>
        <ul class="items-block">
            <li class="items-block__item">
                <a href="" class="items-block__box">
                    <div class="items-block__img">
                        <img src="<?php echo $template_uri; ?>/img/made/item-01.jpg" alt="がま口バッグ">
                    </div>
                    <h3 class="items-block__ttl"> がま口バッグ </h3>
                </a>
            </li>
            <li class="items-block__item">
                <a href="" class="items-block__box">
                    <div class="items-block__img">
                        <img src="<?php echo $template_uri; ?>/img/made/item-02.jpg" alt="その他バッグ">
                    </div>
                    <h3 class="items-block__ttl"> その他バッグ </h3>
                </a>
            </li>
            <li class="items-block__item">
                <a href="" class="items-block__box">
                    <div class="items-block__img">
                        <img src="<?php echo $template_uri; ?>/img/made/item-03.jpg" alt="その他小物">
                    </div>
                    <h3 class="items-block__ttl"> その他小物 </h3>
                </a>
            </li>
            <li class="items-block__item">
                <a href="" class="items-block__box">
                    <div class="items-block__img">
                        <img src="<?php echo $template_uri; ?>/img/made/item-04.jpg" alt="帯ベルト・オビスチェ・ジレ">
                    </div>
                    <h3 class="items-block__ttl"> 帯ベルト・オビスチェ・ジレ </h3>
                </a>
            </li>
            <li class="items-block__item">
                <a href="" class="items-block__box">
                    <div class="items-block__img">
                        <img src="<?php echo $template_uri; ?>/img/made/item-05.jpg" alt="着物アップサイクル">
                    </div>
                    <h3 class="items-block__ttl"> 着物アップサイクル </h3>
                </a>
            </li>
        </ul>
    </section>
</main>

<?php get_footer(); ?>
