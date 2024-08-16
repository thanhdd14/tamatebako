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
$template_uri = get_template_directory_uri();
get_header(); ?>
<main class="page-index">
    <section class="sec-mv">
        <ul class="mv-slider js-mv-slider">
            <li class="mv-slider__item">
                <img src="<?php echo $template_uri;?>/img/index/mv-img-01.jpg" alt="OUKA" class="pc">
                <img src="<?php echo $template_uri;?>/img/index/mv-img-01-sp.jpg" alt="OUKA" class="sp">
            </li>
            <li class="mv-slider__item">
               <img src="<?php echo $template_uri;?>img/index/mission-img.jpg" alt="OUKA" >
            </li>
            <li class="mv-slider__item">
                <img src="<?php echo $template_uri;?>/img/index/mv-img-01.jpg" alt="OUKA" class="pc">
                <img src="<?php echo $template_uri;?>/img/index/mv-img-01-sp.jpg" alt="OUKA" class="sp">
            </li>
            <li class="mv-slider__item">
                <img src="<?php echo $template_uri;?>img/index/mission-img.jpg" alt="OUKA" >
            </li>
            <li class="mv-slider__item">
                <img src="<?php echo $template_uri;?>/img/index/mv-img-01.jpg" alt="OUKA" class="pc">
                <img src="<?php echo $template_uri;?>/img/index/mv-img-01-sp.jpg" alt="OUKA" class="sp">
            </li>
        </ul>
        <h1 class="mv-ttl">
            <span class="c-ft--en">OUKA</span>
            <span class="c-ft--jp">西陣織 大和絵バッグ 凰華</span>
        </h1>
    </section>
    <section class="sec-mission">
        <div class="mission-block">
            <div class="mission-block__img">
                <img src="<?php echo $template_uri;?>/img/index/mission-img.jpg" alt="日本の伝統を、もっと身近に。">
            </div>
            <div class="mission-block__ct c-txt__basic">
                <h2 class="mission-block__ct-ttl">
                    <span class="c-ft--en">Mission</span>
                    <span class="c-ft--jp"> 日本の伝統を、<br>もっと身近に。 </span>
                </h2>
                <p> 日本の美意識や技術、伝統的な価値を持つ着物や帯を多くの方に身につけていただき、日本の伝統織物の素晴らしさを実感していただきたい。 </p>
                <div class="flex-end">
                    <a href="/about" class="c-btn__01"> About us </a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-product">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin--left"> Product </h2>
        </div>
        <div class="product-list js-product c-txt__basic">
            <div class="swiper-wrapper">
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/product-img-01.png" alt="輝来々 ~KIRARA~ 帯ベルト Sサイズ">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">輝来々 ~KIRARA~ 帯ベルト Sサイズ</span>
                            <span class="product-list__ct-price">¥25,000</span>
                            <span class="product-list__ct-note">在庫あり</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/product-img-02.png" alt="帯ピアス+チャーム Sサイズ 綾錦 ~AYANISHIKI~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">帯ピアス+チャーム Sサイズ 綾錦 ~AYANISHIKI~</span>
                            <span class="product-list__ct-price">¥5,300</span>
                            <span class="product-list__ct-note">在庫あり</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/product-img-03.png" alt="波瑠乃 ~HARUNO~ 帯ベルト Sサイズ">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">波瑠乃 ~HARUNO~ 帯ベルト Sサイズ</span>
                            <span class="product-list__ct-price">¥25,000</span>
                            <span class="product-list__ct-note">在庫切れ</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/product-img-04.png" alt="帯ピアス+タッセルチャーム Mサイズ２行を超える場合のイメージはこちらになります">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">帯ピアス+タッセルチャーム Mサイズ２行を超える場合のイメージはこちらになります</span>
                            <span class="product-list__ct-price">¥6,500</span>
                            <span class="product-list__ct-note">在庫あり</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/product-img-01.png" alt="輝来々 ~KIRARA~ 帯ベルト Sサイズ">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">輝来々 ~KIRARA~ 帯ベルト Sサイズ</span>
                            <span class="product-list__ct-price">¥25,000</span>
                            <span class="product-list__ct-note">在庫あり</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/product-img-02.png" alt="帯ピアス+チャーム Sサイズ 綾錦 ~AYANISHIKI~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">帯ピアス+チャーム Sサイズ 綾錦 ~AYANISHIKI~</span>
                            <span class="product-list__ct-price">¥5,300</span>
                            <span class="product-list__ct-note">在庫あり</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/product-img-03.png" alt="波瑠乃 ~HARUNO~ 帯ベルト Sサイズ">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">波瑠乃 ~HARUNO~ 帯ベルト Sサイズ</span>
                            <span class="product-list__ct-price">¥25,000</span>
                            <span class="product-list__ct-note">在庫切れ</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/product-img-04.png" alt="帯ピアス+タッセルチャーム Mサイズ２行を超える場合のイメージはこちらになります">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">帯ピアス+タッセルチャーム Mサイズ２行を超える場合のイメージはこちらになります</span>
                            <span class="product-list__ct-price">¥6,500</span>
                            <span class="product-list__ct-note">在庫あり</span>
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
            <h2 class="c-ttl__01 js-scrollin--left"> Rental items </h2>
        </div>
        <div class="product-list js-rental c-txt__basic">
            <div class="swiper-wrapper">
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/rental-img-01.png" alt="西陣織ポニーフック 白悠 ~SHIYU~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">西陣織ポニーフック 白悠 ~SHIYU~</span>
                            <span class="product-list__ct-price">¥3,500</span>
                            <span class="product-list__ct-note">在庫切れ</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/rental-img-02.png" alt="流琥 ~RYUKO~ 帯ベルト Sサイズ">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">流琥 ~RYUKO~ 帯ベルト Sサイズ</span>
                            <span class="product-list__ct-price">¥25,000</span>
                            <span class="product-list__ct-note">在庫あり</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/rental-img-03.png" alt="西陣織ニュームバッグ 露菊 ~TSUYUGIKU~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">西陣織ニュームバッグ 露菊<br>~TSUYUGIKU~</span>
                            <span class="product-list__ct-price">¥38,000</span>
                            <span class="product-list__ct-note">在庫あり</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/rental-img-04.png" alt="西陣織オビスチェ®︎悠 ~SHIYU~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">西陣織オビスチェ®︎悠 ~SHIYU~</span>
                            <span class="product-list__ct-price">¥39,000</span>
                            <span class="product-list__ct-note">在庫あり</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/rental-img-01.png" alt="西陣織ポニーフック 白悠 ~SHIYU~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">西陣織ポニーフック 白悠 ~SHIYU~</span>
                            <span class="product-list__ct-price">¥3,500</span>
                            <span class="product-list__ct-note">在庫切れ</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/rental-img-02.png" alt="流琥 ~RYUKO~ 帯ベルト Sサイズ">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">流琥 ~RYUKO~ 帯ベルト Sサイズ</span>
                            <span class="product-list__ct-price">¥25,000</span>
                            <span class="product-list__ct-note">在庫あり</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/rental-img-03.png" alt="西陣織ニュームバッグ 露菊 ~TSUYUGIKU~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">西陣織ニュームバッグ 露菊<br>~TSUYUGIKU~</span>
                            <span class="product-list__ct-price">¥38,000</span>
                            <span class="product-list__ct-note">在庫あり</span>
                        </div>
                    </a>
                </div>
                <div class="product-list__item swiper-slide">
                    <a href="" class="product-list__box">
                        <div class="product-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/rental-img-04.png" alt="西陣織オビスチェ®︎悠 ~SHIYU~">
                        </div>
                        <div class="product-list__ct">
                            <span class="product-list__ct-ttl">西陣織オビスチェ®︎悠 ~SHIYU~</span>
                            <span class="product-list__ct-price">¥39,000</span>
                            <span class="product-list__ct-note">在庫あり</span>
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
    <section class="sec-made">
        <div class="inner">
            <a href="/made-to-order" class="made-block">
                <div class="made-block__img">
                    <img src="<?php echo $template_uri;?>/img/index/made-img.jpg" alt="Made to order" class="pc">
                    <img src="<?php echo $template_uri;?>/img/index/made-img-sp.jpg" alt="Made to order" class="sp">
                </div>
                <h2 class="made-block__ttl c-ft--en js-scrollin"> Made<br> to<br> order </h2>
                <div class="made-block__ct c-txt__basic">
                    <h3 class="made-block__ct-ttl"> 着ていない着物や帯が<br> ときめきアイテムに </h3>
                    <p> お手持ちの着物や帯を使用して、バッグなどをお作りしています。 </p>
                </div>
            </a>
        </div>
    </section>
    <section class="sec-news">
        <div class="news-items">
            <h2 class="c-ttl__02 js-scrollin--left">News</h2>
            <a href="/news" class="view-more">Read more</a>
            <ul class="news-list">
                <li class="news-list__item">
                    <a href="" class="news-list__box">
                        <div class="news-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/news-img-01.jpg" alt="店舗外壁工事のお知らせ">
                        </div>
                        <div class="news-list__ct">
                            <span class="news-list__ct-date">2024.06.15</span>
                            <p>店舗外壁工事のお知らせ</p>
                        </div>
                    </a>
                </li>
                <li class="news-list__item">
                    <a href="" class="news-list__box">
                        <div class="news-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/news-img-02.jpg" alt="商品価格改定のお知らせ">
                        </div>
                        <div class="news-list__ct">
                            <span class="news-list__ct-date">2024.04.09</span>
                            <p>商品価格改定のお知らせ</p>
                        </div>
                    </a>
                </li>
                <li class="news-list__item">
                    <a href="" class="news-list__box">
                        <div class="news-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/news-img-03.jpg" alt="舞台「千と千尋の神隠し」製作発表会見にて上白石萌音様にTamatebakoの衣装をご着用いただきました">
                        </div>
                        <div class="news-list__ct">
                            <span class="news-list__ct-date">2024.03.19</span>
                            <p>舞台「千と千尋の神隠し」製作発表会見にて上白石萌音様にTamatebakoの衣装をご着用いただきました</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="news-items">
            <h2 class="c-ttl__02 js-scrollin--left">Blog</h2>
            <a href="" class="view-more">Read more</a>
            <ul class="news-list">
                <li class="news-list__item">
                    <a href="" class="news-list__box">
                        <div class="news-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/blog-img-01.jpg" alt="オーダーメイド商品ご紹介 Vol.08">
                        </div>
                        <div class="news-list__ct">
                            <span class="news-list__ct-date">2024.02.28</span>
                            <p>オーダーメイド商品ご紹介 Vol.08</p>
                        </div>
                    </a>
                </li>
                <li class="news-list__item">
                    <a href="" class="news-list__box">
                        <div class="news-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/blog-img-02.jpg" alt="オーダーメイド商品ご紹介 Vol.07">
                        </div>
                        <div class="news-list__ct">
                            <span class="news-list__ct-date">2024.02.25</span>
                            <p>オーダーメイド商品ご紹介 Vol.07</p>
                        </div>
                    </a>
                </li>
                <li class="news-list__item">
                    <a href="" class="news-list__box">
                        <div class="news-list__img">
                            <img src="<?php echo $template_uri;?>/img/index/blog-img-03.jpg" alt="オーダーメイド商品ご紹介 Vol.06">
                        </div>
                        <div class="news-list__ct">
                            <span class="news-list__ct-date">2024.03.19</span>
                            <p>オーダーメイド商品ご紹介 Vol.06</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="sec-reviews">
        <div class="inner">
            <h2 class="c-ttl__01 js-scrollin--left"> Reviews </h2>
        </div>
        <div class="reviews-list js-reviews c-txt__basic">
            <div class="swiper-wrapper">
                <div class="reviews-list__item swiper-slide">
                    <a href="" class="reviews-list__box">
                        <div class="reviews-list__heading">
                            <div class="reviews-list__heading-img">
                                <img src="<?php echo $template_uri;?>/img/index/reviews-img-01.jpg" alt="「たまてばこ」さんの作品は、ずば抜けておしゃれで機能的です。">
                            </div>
                            <div class="reviews-list__heading-ct">
                                <h3 class="reviews-list__heading-ct-ttl">「たまてばこ」さんの作品は、ずば抜けておしゃれで機能的です。</h3>
                                <span class="reviews-list__heading-ct-note">​A.A. 様 ／ 埼玉県</span>
                            </div>
                        </div>
                        <p>お似合いの帯地が入りました！との連絡からバッグ作りが始まりました。オーダーは大好きなクラッチバッグ。何もないところから一つ一つ丁寧に提案していただきました。大胆</p>
                    </a>
                </div>
                <div class="reviews-list__item swiper-slide">
                    <a href="" class="reviews-list__box">
                        <div class="reviews-list__heading">
                            <div class="reviews-list__heading-img">
                                <img src="<?php echo $template_uri;?>/img/index/reviews-img-02.jpg" alt="出来上がりを見てとても感激しました。">
                            </div>
                            <div class="reviews-list__heading-ct">
                                <h3 class="reviews-list__heading-ct-ttl">出来上がりを見てとても感激しました。</h3>
                                <span class="reviews-list__heading-ct-note">​​T.M. 様 ／ 長野県</span>
                            </div>
                        </div>
                        <p>実母が急に他界し遺品を整理していたら素敵な帯が出てきたのです。作り帯で短かった為、帯としての利用はできないけれど母の形見として何か形にして残して置きたいと思ったと</p>
                    </a>
                </div>
                <div class="reviews-list__item swiper-slide">
                    <a href="" class="reviews-list__box">
                        <div class="reviews-list__heading">
                            <div class="reviews-list__heading-img">
                                <img src="<?php echo $template_uri;?>/img/index/reviews-img-03.jpg" alt="とても満足しています！">
                            </div>
                            <div class="reviews-list__heading-ct">
                                <h3 class="reviews-list__heading-ct-ttl">とても満足しています！</h3>
                                <span class="reviews-list__heading-ct-note">​S.A. 様 ／ 東京都</span>
                            </div>
                        </div>
                        <p>たまてばこさんへお願いすることになったのは、主人の母からいただいた袋帯でした。当時としてはとても珍しく斬新な柄。バックにしても素敵かなぁ、とたまてばこさんに持ち込</p>
                    </a>
                </div>
                <div class="reviews-list__item swiper-slide">
                    <a href="" class="reviews-list__box">
                        <div class="reviews-list__heading">
                            <div class="reviews-list__heading-img">
                                <img src="<?php echo $template_uri;?>/img/index/reviews-img-01.jpg" alt="「たまてばこ」さんの作品は、ずば抜けておしゃれで機能的です。">
                            </div>
                            <div class="reviews-list__heading-ct">
                                <h3 class="reviews-list__heading-ct-ttl">「たまてばこ」さんの作品は、ずば抜けておしゃれで機能的です。</h3>
                                <span class="reviews-list__heading-ct-note">​A.A. 様 ／ 埼玉県</span>
                            </div>
                        </div>
                        <p>お似合いの帯地が入りました！との連絡からバッグ作りが始まりました。オーダーは大好きなクラッチバッグ。何もないところから一つ一つ丁寧に提案していただきました。大胆</p>
                    </a>
                </div>
                <div class="reviews-list__item swiper-slide">
                    <a href="" class="reviews-list__box">
                        <div class="reviews-list__heading">
                            <div class="reviews-list__heading-img">
                                <img src="<?php echo $template_uri;?>/img/index/reviews-img-02.jpg" alt="出来上がりを見てとても感激しました。">
                            </div>
                            <div class="reviews-list__heading-ct">
                                <h3 class="reviews-list__heading-ct-ttl">出来上がりを見てとても感激しました。</h3>
                                <span class="reviews-list__heading-ct-note">​​T.M. 様 ／ 長野県</span>
                            </div>
                        </div>
                        <p>実母が急に他界し遺品を整理していたら素敵な帯が出てきたのです。作り帯で短かった為、帯としての利用はできないけれど母の形見として何か形にして残して置きたいと思ったと</p>
                    </a>
                </div>
                <div class="reviews-list__item swiper-slide">
                    <a href="" class="reviews-list__box">
                        <div class="reviews-list__heading">
                            <div class="reviews-list__heading-img">
                                <img src="<?php echo $template_uri;?>/img/index/reviews-img-03.jpg" alt="とても満足しています！">
                            </div>
                            <div class="reviews-list__heading-ct">
                                <h3 class="reviews-list__heading-ct-ttl">とても満足しています！</h3>
                                <span class="reviews-list__heading-ct-note">​S.A. 様 ／ 東京都</span>
                            </div>
                        </div>
                        <p>たまてばこさんへお願いすることになったのは、主人の母からいただいた袋帯でした。当時としてはとても珍しく斬新な柄。バックにしても素敵かなぁ、とたまてばこさんに持ち込</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="pagination-bar reviews-bar">
                <div class="swiper-pagination"></div>
                <div class="pagination-bar__arrow">
                    <div class="swiper-button-prev c-arrow c-arrow--left"></div>
                    <div class="swiper-button-next c-arrow c-arrow--right"></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
