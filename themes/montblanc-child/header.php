<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="contentwrapper">
 *
 * @package montblanc
 */
$template_uri = get_template_directory_uri();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>

    <script src="https://use.fontawesome.com/666b976d0a.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="<?php echo $template_uri; ?>/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $template_uri; ?>/css/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $template_uri; ?>/css/swiper.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $template_uri; ?>/css/oc-theme.css"/>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <meta name="facebook-domain-verification" content="0o5wqrrbr6d1q965t9ioivju723kfu"/>

</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

    <header id="header">
        <a href="/" class="header-logo">
            <img src="<?php echo $template_uri; ?>/img/common/logo.png" alt="Tamatebako" class="logo-01">
            <img src="<?php echo $template_uri; ?>/img/common/logo-white.png" alt="Tamatebako" class="logo-02">
        </a>
        <nav class="header-nav">
            <div class="header-nav__heading">
                <div class="header-btn">
                    <ul class="header-nav__login">
                        <li><a href="/my-account">ログイン</a></li>
                        <li><a href="/my-account">会員登録</a></li>
                    </ul>
                    <a href="" class="header-btn-sp sp-tb">カートを見る</a>
                </div>
                <ul class="header-nav__language">
                    <li><a href="" class="active">JP</a></li>
                    <li><a href="">EN</a></li>
                </ul>
                <ul class="header-nav__items">
                    <li>
                        <div class="header-nav__items-box header-nav__items-box--seach">
                            <div class="seach-box">
                                <input type="text" class="header-nav__items-box-input" placeholder="商品検索">
                                <button class="header-nav__items-box--btn header-nav__items-box--img js-sub">
                                    <img src="<?php echo $template_uri; ?>/img/common/search.png" alt="search"
                                         class="img-01">
                                    <img src="<?php echo $template_uri; ?>/img/common/search-hv.png" alt="search"
                                         class="img-02">
                                </button>
                                <span class="sp-open--search"></span>
                            </div>
                            <span class="header-nav__items-box--btn header-nav__items-box--img js-open-search">
									<img src="<?php echo $template_uri; ?>/img/common/search.png" alt="search"
                                         class="img-01">
									<img src="<?php echo $template_uri; ?>/img/common/search-hv.png" alt="search"
                                         class="img-02">
								</span>
                        </div>
                    </li>
                    <li class="pc-tb">
                        <a href="/my-account" class="header-nav__items-box header-nav__items-box--cart header-nav__items-box--img">
                            <img src="<?php echo $template_uri; ?>/img/common/cart.png" alt="cart" class="img-01">
                            <img src="<?php echo $template_uri; ?>/img/common/cart-hv.png" alt="cart" class="img-02">
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'primary','container' => false, 'menu_class' => 'header-nav__menu') ); ?>
            <ul class="header-nav__other sp-tb">
                <li><a href="">プライバシーポリシー</a></li>
                <li><a href="">利用規約</a></li>
                <li><a href="">送料について</a></li>
            </ul>
            <ul class="header-nav__sns sp-tb">
                <li><a href="" target="_blank"><img src="<?php echo $template_uri; ?>/img/common/instagram.png"
                                                    alt="instagram" width="20"></a>
                </li>
            </ul>
        </nav>
        <div class="header-itemsp">
				<span class="item header-itemsp--search">
					<img src="<?php echo $template_uri; ?>/img/common/search.png" alt="search" width="20">
				</span>
            <a href="/my-account" class="item header-itemsp--cart">
                <img src="<?php echo $template_uri; ?>/img/common/cart.png" alt="cart" width="18">
                <span></span>
            </a>
        </div>
        <div class="search-tb">
            <div class="search-tb__heading">
                <input type="text" class="header-nav__items-box-input" placeholder="商品検索">
                <button class="header-nav__items-box--btn header-nav__items-box--img">
                    <img src="<?php echo $template_uri; ?>/img/common/search.png" alt="search">
                </button>
            </div>
            <span class="search-tb__btn"> カテゴリから探す </span>
            <div class="search-tb__tag">
                <span class="search-tb__tag-ttl">トレンドタグ</span>
                <ul>
                    <li><span>帯ピアス</span></li>
                    <li><span>西陣織</span></li>
                    <li><span>マジェステ</span></li>
                    <li><span>サコッシュ</span></li>
                    <li><span>2つ玉がま口バッグ</span></li>
                    <li><span>ショルダーバッグとの2way</span></li>
                </ul>
            </div>
            <span class="search-tb__close">
					<img src="<?php echo $template_uri; ?>/img/common/close.png" alt="close">
				</span>
        </div>
        <div class="search-list">
            <span class="search-list__ttl">カテゴリから探す</span>
            <ul class="search-list__all">
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-01.png" alt="帯ベルト">
                        <p>帯ベルト</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-02.png" alt="帯ピアス">
                        <p>帯ピアス</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-03.png" alt="ポニーフック">
                        <p>ポニーフック</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-04.png" alt="マジェステ">
                        <p>マジェステ</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-05.png" alt="オビスチェ">
                        <p>オビスチェ</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-06.png" alt="セパレート着物">
                        <p>セパレート着物</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-07.png" alt="西陣織ジレ">
                        <p>西陣織ジレ</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-08.png" alt="ギフト（ラッピング）">
                        <p>ギフト（ラッピング）</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-09.png" alt="サコッシュ">
                        <p>サコッシュ</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-10.png" alt="スマホ用サコッシュ">
                        <p>スマホ用サコッシュ</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-11.png" alt="ニュームバック">
                        <p>ニュームバック</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-12.png" alt="クラッチ　2つ玉がま口バック　SSサイズ（S）">
                        <p>クラッチ　2つ玉がま口バック　SSサイズ（S）</p>
                    </a>
                </li>
                <li>
                    <a href="" class="search-list__all-box">
                        <img src="<?php echo $template_uri; ?>/img/common/img-13.png"
                             alt="クラッチ　2つ玉がま口バック　SSサイズ（S）クラッチ　2つ玉がま口バック　SSサイズ（S）">
                        <p>クラッチ　2つ玉がま口バック　SSサイズ（S）クラッチ　2つ玉がま口バック　SSサイズ（S）</p>
                    </a>
                </li>
            </ul>
        </div>
        <span class="js-mobile">
				<span></span>
			</span>
    </header>