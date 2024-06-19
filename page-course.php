<?php get_header() ?>

    <main>
        <div class="course_mv">
            <div class="course_title">
                <h1 class="course_title_pc">プラクティショナー＆プロフェッショナルコース</h1>
                <h1 class="course_title_sp">プラクティショナー＆<br>プロフェッショナルコース</h1>
                <div class="lead">
                    <p>マナーズサウンドセラピーのプロを目指す方、更に深い知識と技術の修得を目指す方々のための講座です。</p>
                </div>
            </div>
        </div>
        
        <section>
            <div class="course">
                <ul class="course_content">
                    <li class="course_content_list">
                        <img src="<?= get_template_directory_uri(); ?>/img/acoustic-vibration_basic.png" alt="">
                        <div class="course_content__text">
                            <h3>音響振動療法士養成講座 基礎</h3>
                            <p>音響振動療法士の資格取得のための講座を、ZOOMによるオンライン授業で受講できます。</p>
                            <div class="course_link">
                                <a href="<?= home_url('/course/zoom_online'); ?>" class="btn-r24">詳しくみる</a>
                                <img src="<?= get_template_directory_uri(); ?>/img/rigth.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="course_content_list">
                        <img src="<?= get_template_directory_uri(); ?>/img/acoustic-vibration_skillup.png" alt="">
                        <div class="course_content__text">
                            <h3>マナーズサウンドセラピースキルアップ講座</h3>
                            <p>マナーズサウンドセラピストの方対象へ、施術のスキルアップのための講座です！</p>
                            <div class="course_link">
                                <a href="<?= home_url('/course/skillup_lecture'); ?>" class="btn-r24">詳しくみる</a>
                                <img src="<?= get_template_directory_uri(); ?>/img/rigth.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="course_content_list">
                        <img src="<?= get_template_directory_uri(); ?>/img/acoustic-vibration_advanced.png" alt="">
                        <div class="course_content__text">
                            <h3>マナーズサウンドセラピー応用講座</h3>
                            <p>音響振動療法士の資格取得のための講座を、ZOOMによるオンライン授業で受講できます。</p>
                            <div class="course_link">
                                <a href="<?= home_url('/course/therapy_application'); ?>" class="btn-r24">詳しくみる</a>
                                <img src="<?= get_template_directory_uri(); ?>/img/rigth.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="course_content_list">
                        <img src="<?= get_template_directory_uri(); ?>/img/dummy.png" alt="">
                        <div class="course_content__text">
                            <h3>マナーズサウンド入門講座</h3>
                            <p>セルフ音響振動療法を学べます。オンラインセミナーでもマナーズサウンド®をご体験いただけます！</p>
                            <div class="course_link">
                                <a href="<?= home_url('/course/guide_lecture'); ?>" class="btn-r24">詳しくみる</a>
                                <img src="<?= get_template_directory_uri(); ?>/img/rigth.png" alt="">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>

<?php get_footer() ?>