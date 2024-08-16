<?php
/*
Template Name: about-page
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

<main class="page-about">
    <section class="sec-mv-page">
        <div class="inner">
            <div class="mv-page">
                <h1 class="mv-page__ttl c-ttl__01">About</h1>
            </div>
        </div>
        <div class="mv-page__banner">
            <img src="<?php echo $template_uri;?>/img/about/about-mv.jpg" alt="About" class="pc">
            <img src="<?php echo $template_uri;?>/img/about/about-mv-sp.jpg" alt="About" class="sp">
            <h2 class="mv-page__banner-ttl">
                <span class="c-ft--en">Mission</span>
                <span class="c-ft--jp">日本の伝統を、もっと身近に。</span>
            </h2>
        </div>
    </section>
    <section class="sec-about-content">
        <div class="inner">
            <div class="about-block">
                <div class="about-block__ct c-txt__basic">
                    <h3 class="about-block__ct-ttl">
                        <span class="c-ft--en">Culture</span>
                        <span class="c-ft--jp">日本の美意識の継承</span>
                    </h3>
                    <p> 熟練職人の技術や親が子を思う気持ちなど、着物や帯に込められた思いや美意識を、大切に継承しています。 </p>
                </div>
                <div class="about-block__img js-scrollin">
                    <img src="<?php echo $template_uri;?>/img/about/about-img-01.jpg" alt="Culture">
                </div>
            </div>
            <div class="about-block">
                <div class="about-block__ct c-txt__basic">
                    <h3 class="about-block__ct-ttl">
                        <span class="c-ft--en">Design</span>
                        <span class="c-ft--jp">モードとエレガンスが共演したデザイン</span>
                    </h3>
                    <p> 日本の伝統織物に対する深いリスペクトを持ちながら、現代のトレンドに合わせたモードでエレガントなデザインを追求しています。 </p>
                </div>
                <div class="about-block__img">
                    <img src="<?php echo $template_uri;?>/img/about/about-img-02.jpg" alt="Design">
                </div>
            </div>
            <div class="about-block">
                <div class="about-block__ct c-txt__basic">
                    <h3 class="about-block__ct-ttl">
                        <span class="c-ft--en">Quality</span>
                        <span class="c-ft--jp">経験と技術による確かな品質</span>
                    </h3>
                    <p> 着物や帯の幅は約30cm程で長さも制約があります。<br class="pc">また、訪問着などは柄合わせも必要になってくるため、洋裁と和裁の経験を積んだ職人たちが高度な技術で、拘りを持ってものづくりをしています。 </p>
                </div>
                <div class="about-block__img">
                    <img src="<?php echo $template_uri;?>/img/about/about-img-03.jpg" alt="Quality">
                </div>
            </div>
            <div class="about-block">
                <div class="about-block__ct c-txt__basic">
                    <h3 class="about-block__ct-ttl">
                        <span class="c-ft--en">Maintenance</span>
                        <span class="c-ft--jp">持続可能な取り組み</span>
                    </h3>
                    <p> 眠っていた着物や帯をアップサイクルさせるだけではなく、使用後の擦れなどで生じた綻びなどをできるかぎり補修し、長く使用できるようケアメンテにも注力しております。 </p>
                </div>
                <div class="about-block__img">
                    <img src="<?php echo $template_uri;?>/img/about/about-img-04.jpg" alt="Maintenance">
                </div>
            </div>
            <div class="about-staff">
                <h2 class="c-ttl__01 mbpc-100 mbsp-90 js-scrollin--left">Staff</h2>
                <div class="about-staff__item">
                    <div class="about-staff__ct about-staff__ct--js c-txt__basic">
                        <h3 class="about-staff__ct-ttl">
                            <span class="c-ft--en">Tamatebako Owner designer</span>
                            <span class="c-ft--en about-staff__ct-ttl--name">Tamami Katsuma</span>
                        </h3>
                        <p> 東京都出身。都内大学で服飾史を中心に、繊維学、構成学、和裁、意匠学を研究し、教員免許を取得。学生時代からイベント衣装などのデザインや製作に携わり、卒業後はウェディングドレス製作会社に勤務。独立後はドレスやステージ衣装の製作事業を経営。ウエディングドレスや芸能人の衣装、ドラマやCMなどの衣装を製作。 </p>
                        <p> 制作活動をしていく中で、大好きだった祖母が遺してくれた着物や帯に出会い、その織物の魅力に気付く。その頃よく目にしたリメイク物に疑問があり、独自のデザインを追求していくうちに、オーダーメイドの依頼をいただくようになり、2016年に『たまてばこhandmade』を​開業。 </p>
                        <div class="c-al--c sp">
                            <span class="more js-more-about-staff">Read more</span>
                        </div>
                    </div>
                    <div class="about-staff__img">
                        <img src="<?php echo $template_uri;?>/img/about/about-img-05.jpg" alt="Tamami Katsuma">
                    </div>
                </div>
                <div class="about-staff__item">
                    <div class="about-staff__ct c-txt__basic">
                        <h3 class="about-staff__ct-ttl">
                            <span class="c-ft--en">Tamatebako Creative director</span>
                            <span class="c-ft--en about-staff__ct-ttl--name">Miho Katsuma</span>
                        </h3>
                        <p> Tamatebakoのデザイン企画やマーケティング全般を担当。<br> 写真撮影や動画制作、撮影全体のディレクション等も行う。SNSマーケティングアドバイザー。時々アーティスト。 </p>
                    </div>
                    <div class="about-staff__img">
                        <img src="<?php echo $template_uri;?>/img/about/about-img-06.jpg" alt="Miho Katsuma">
                    </div>
                </div>
            </div>
            <h2 class="c-ttl__01 mbpc-30 js-scrollin--left">Achievements</h2>
            <ul class="about-achievements">
                <li class="about-achievements__item">
                    <span class="about-achievements__year">2023</span>
                    <div class="about-achievements__box">
                        <dl>
                            <dt>Feb</dt>
                            <dd>
                                <p> WILD HEARTS 英語版声優のキャストインタビュー動画にて、声優を務められたミラクル・ベル・マジック氏に衣装をご着用いただきました </p>
                                <p> NHK総合【民謡魂ふるさとの唄】に出演された 井頭愛美氏に衣装・ピアスをご着用いただきました </p>
                            </dd>
                        </dl>
                    </div>
                </li>
                <li class="about-achievements__item">
                    <span class="about-achievements__year">2022</span>
                    <div class="about-achievements__box">
                        <dl>
                            <dt>Nov</dt>
                            <dd>
                                <p> ELLE ACTIVE! FESTIVAL2022にて、ミラクル・ベル・マジック氏に衣装をご着用いただきました </p>
                                <p> JDS主催パリ展示会出展 </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>May</dt>
                            <dd>
                                <p> ベネチアカフォスカリ短編映画祭にて三島有紀子氏に衣装を提供させていただきました </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Apr</dt>
                            <dd>
                                <p> Cartierのイベント【シジエム・サンス・パル・カルティエ】にて平手友梨奈氏にバッグをお持ちいただきました </p>
                            </dd>
                        </dl>
                    </div>
                </li>
                <li class="about-achievements__item">
                    <span class="about-achievements__year">2021</span>
                    <div class="about-achievements__box">
                        <dl>
                            <dt>Nov</dt>
                            <dd>
                                <p> 渋谷スクランブルスクエア５階中央イベントスペース出店 </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Jul</dt>
                            <dd>
                                <p> 渋谷スクランブルスクエア５階中央イベントスペース出店 </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>May</dt>
                            <dd>
                                <p> 渋谷スクランブルスクエア４階428−224スペース出店 </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Feb</dt>
                            <dd>
                                <p> 渋谷スクランブルスクエア５階中央イベントスペース出店 </p>
                            </dd>
                        </dl>
                    </div>
                </li>
                <li class="about-achievements__item">
                    <span class="about-achievements__year">2020</span>
                    <div class="about-achievements__box">
                        <dl>
                            <dt>Nov</dt>
                            <dd>
                                <p> 渋谷スクランブルスクエア４階428−224スペース出店 </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Sep</dt>
                            <dd>
                                <p> WEB雑誌【MERRY】に掲載 </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Jun</dt>
                            <dd>
                                <p> 高島屋横浜店１階正面エスカレーター脇イベントスペース出店 </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Feb</dt>
                            <dd>
                                <p> 東急プラザ銀座HINKARINKA1st出店 </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Jan</dt>
                            <dd>
                                <p> 東急プラザ銀座HINKARINKA3rd出店 </p>
                            </dd>
                        </dl>
                    </div>
                </li>
                <li class="about-achievements__item">
                    <span class="about-achievements__year">2019</span>
                    <div class="about-achievements__box">
                        <dl>
                            <dt>Dec</dt>
                            <dd>
                                <p> 雑誌【an.an】1月号No.2182に掲載 </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Nov</dt>
                            <dd>
                                <p> JDS主催パリ展示会出展 </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Oct</dt>
                            <dd>
                                <p> 全国信用金庫主催【よい仕事おこしフェア】東京国際フォーラム出展 </p>
                            </dd>
                        </dl>
                    </div>
                </li>
                <li class="about-achievements__item">
                    <span class="about-achievements__year">2018</span>
                    <div class="about-achievements__box">
                        <dl>
                            <dt>Sep</dt>
                            <dd>
                                <p> 代官山和パーティー出店 </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Feb</dt>
                            <dd>
                                <p> 渋谷ヒカリエ5階イベントスペース出店 </p>
                            </dd>
                        </dl>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>
