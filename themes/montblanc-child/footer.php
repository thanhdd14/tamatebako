<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package montblanc
 */

$template_uri = get_template_directory_uri();
?>
<footer id="footer">
    <div class="inner">
        <div class="footer-left">
            <a href="" class="footer-logo">
                <img src="<?php echo $template_uri;?>/img/common/footer-logo.png" alt="Tamatebako">
            </a>
            <a href="https://www.google.com/maps/search/%E6%9D%B1%E4%BA%AC%E9%83%BD%E5%93%81%E5%B7%9D%E5%8C%BA%E5%B0%8F%E5%B1%B12-14-3+1F%E5%BA%97%E8%88%97+Tamatebako/@35.6202433,139.707762,17z/data=!3m1!4b1?hl=ja&entry=ttu" class="footer-note" target="_blank"> 東京都品川区小山2-14-3 1F店舗 Tamatebako </a>
            <ul class="footer-sns sp">
                <li><a href="" target="_blank"><img src="<?php echo $template_uri;?>/img/common/instagram-02.png" alt="instagram" width="24"></a></li>
            </ul>
        </div>
        <div class="footer-right">
            <?php wp_nav_menu( array( 'theme_location' => 'primary','container' => false, 'menu_class' => 'footer-menu footer-menu--en c-ft--en') ); ?>
            <?php wp_nav_menu( array( 'theme_location' => 'footernav','container' => false, 'menu_class' => 'footer-menu footer-menu--jp') ); ?>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="inner">
            <div class="copyright"> ©Tamatebako </div>
            <ul class="footer-sns pc">
                <li><a href="" target="_blank"><img src="<?php echo $template_uri;?>/img/common/instagram.png" alt="instagram" width="16"></a></li>
            </ul>
        </div>
    </div>
</footer>
<script src="<?php echo $template_uri;?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo $template_uri;?>/js/slick.min.js"></script>
<script src="<?php echo $template_uri;?>/js/swiper.js"></script>
<script src="<?php echo $template_uri;?>/js/jquery.matchHeight-min.js"></script>
<script src="<?php echo $template_uri;?>/js/oc-theme.js"></script>

<?php wp_footer(); ?>

</body>
</html>
