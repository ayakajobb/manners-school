<?php get_header() ?>

<main>
    <div class="mv">
        <img src="https://picsum.photos/1200/800" alt="" class="mv_img">
    </div>

    <section class="news">
        <div class="news_container">
            <div class="news_container_content">
                <h2>News<br>新着情報</h2>
                <ul class="news-list">
                    <li>
                        <a href="#">
                            <time datetime="2022-12-22">2022.12.12</time>
                            <span>【2023年度】体験会のお知らせはこちら！</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <time datetime="2022-12-22">2022.12.12</time>
                            <span>【2023年度】体験会のお知らせはこちら！</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <time datetime="2022-12-22">2022.12.12</time>
                            <span>【2023年度】体験会のお知らせはこちら！</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="charm">
            <div class="fp_title">
                <div class="fp_title_icon">
                    <img src="<?= get_template_directory_uri(); ?>/img/icon-star.png" alt="">
                </div>
                <div class="fp_title_text">
                    <h3>マナーズアカデミーの魅力</h3>
                </div>
            </div>
            <div class="charm_container">
                <ul class="charm__content">
                    <li class="charm__content_list counter">
                        <div class="list_img">
                            <img src="https://picsum.photos/id/867/1200/800" alt="">
                        </div>
                        <div class="list_text">
                            <h4>ここにタイトルが入りますここにタイトルが入ります</h4>
                            <p>ここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいります</p>
                        </div>
                    </li>
                    <li class="charm__content_list">
                        <div class="list_img">
                            <img src="https://picsum.photos/id/867/1200/800" alt="">
                        </div>
                        <div class="list_text">
                            <h4>ここにタイトルが入りますここにタイトルが入ります</h4>
                            <p>ここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいります</p>
                        </div>
                    </li>
                    <li class="charm__content_list">
                        <div class="list_img">
                            <img src="https://picsum.photos/id/867/1200/800" alt="">
                        </div>
                        <div class="list_text">
                            <h4>ここにタイトルが入りますここにタイトルが入ります</h4>
                            <p>ここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいります</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="course-guid">
            <div class="fp_title">
                <div class="fp_title_icon">
                    <img src="<?= get_template_directory_uri(); ?>/img/icon-pen.png" alt="">
                </div>
                <div class="fp_title_text">
                    <h3>コース講座のご案内</h3>
                </div>
            </div>
            <div class="course-guid_container">
                <ul class="course-guid__content">
                    <li class="course-guid__content_list">
                        <div class="list_img">
                            <img src="https://picsum.photos/id/537/800/450" alt="">
                        </div>
                        <div class="list_text">
                            <h4>プラクティショナー＆<br>プロフェッショナルコース</h4>
                            <p>ここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいります</p>
                            <div class="list_btn">
                                <a href="<?= home_url('/course/'); ?>">詳しくみる</a>
                            </div>
                        </div>
                    </li>
                    <li class="course-guid__content_list">
                        <div class="list_img">
                            <img src="https://picsum.photos/id/537/800/450" alt="">
                        </div>
                        <div class="list_text">
                            <h4>ビギナーズコース</h4>
                            <p>ここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいります</p>
                            <div class="list_btn">
                                <a href="">詳しくみる</a>
                            </div>
                        </div>
                    </li>
                    <li class="course-guid__content_list">
                        <div class="list_img">
                            <img src="https://picsum.photos/id/537/800/450" alt="">
                        </div>
                        <div class="list_text">
                            <h4>体験セミナー</h4>
                            <p>ここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいります</p>
                            <div class="list_btn">
                                <a href="">詳しくみる</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="teacher">
            <div class="fp_title">
                <div class="fp_title_icon">
                    <img src="<?= get_template_directory_uri(); ?>/img/icon-glasses.png" alt="">
                </div>
                <div class="fp_title_text">
                    <h3>講師紹介</h3>
                </div>
            </div>
            <div class="teacher_container">
                <ul class="teacher__content">
                    <li class="teacher__content_list">
                        <div class="list_img">
                            <img src="https://picsum.photos/id/537/800/450" alt="">
                            <p>苗字 名前</p>
                        </div>
                        <div class="list_text">
                            <p>ここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいります</p>
                        </div>
                    </li>
                    <li class="teacher__content_list">
                        <div class="list_img">
                            <img src="https://picsum.photos/id/537/800/450" alt="">
                            <p>苗字 名前</p>
                        </div>
                        <div class="list_text">
                            <p>ここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいります</p>
                        </div>
                    </li>
                    <li class="teacher__content_list">
                        <div class="list_img">
                            <img src="https://picsum.photos/id/537/800/450" alt="">
                            <p>苗字 名前</p>
                        </div>
                        <div class="list_text">
                            <p>ここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいりますここにテキストがはいります</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="schoolpic">
            <div class="fp_title">
                <div class="fp_title_icon">
                    <img src="<?= get_template_directory_uri(); ?>/img/icon-maru.png" alt="">
                </div>
                <div class="fp_title_text">
                    <h3>スクール風景</h3>
                </div>
            </div>
            <ul class="schoolpic_list">
                <li><a href="#"><img src="https://picsum.photos/id/353/900/450" alt=""></a></li>
                <li><a href="#"><img src="https://picsum.photos/id/53/900/450" alt=""></a></li>
                <li><a href="#"><img src="https://picsum.photos/id/174/900/450" alt=""></a></li>
                <li><a href="#"><img src="https://picsum.photos/id/863/900/450" alt=""></a></li>
                <li><a href="#"><img src="https://picsum.photos/id/47/900/450" alt=""></a></li>
                <li><a href="#"><img src="https://picsum.photos/id/861/900/450" alt=""></a></li>
                <li><a href="#"><img src="https://picsum.photos/id/826/900/450" alt=""></a></li>
                <li><a href="#"><img src="https://picsum.photos/id/341/900/450" alt=""></a></li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>