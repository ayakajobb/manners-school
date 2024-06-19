<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="header-tagline">
          <div class="header-tagline_container">
            <p>マナーズサウンドが学べる | マナーズユニバーサルアカデミー</p>
          </div>
        </div>
        <div class="header-logonav">
            <div class="header-logonav_container">
                <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="" class="logo">
                <img src="<?= get_template_directory_uri(); ?>/img/logotext.png" alt="" class="logotext">
            </div>
            <div class="header-logonav_contact">
                <a href="#" class="contact_orange">お申し込みはこちら </a>
                <a href="#" class="contact_green">お問い合わせはこちら</a>
            </div>
            <button type="button" class="btn-menu">MENU<span></span></button>
        </div>
        <nav class="header-nav">
            <div class="header-nav_container">
                <div class="header-nav_tagline">
                    <p>マナーズサウンドが学べる | マナーズユニバーサルアカデミー</p>
                </div>
                <button type="button" class="btn-close">CLOSE<span></span></button>
                <ul class="header-nav__list">
                    <li><a href="#">アカデミーの魅力</a></li>
                    <li><a href="#">コース講座のご案内</a></li>
                    <li><a href="#">イベント情報</a></li>
                    <li><a href="#">アカデミーのスケジュール</a></li>
                    <li><a href="#">卒業生の声</a></li>
                    <li><a href="#">講師紹介</a></li>
                    <li><a href="#">スクール風景</a></li>
                </ul>
                <div class="header-nav__sns">
                    <a href="https://lin.ee/pjwYOv2" target="_blank" class="btn-line">マナーズインターナショナル<br>公式LINE</a>
                    <a href="https://www.manners-inc.jp/" target="_blank" class="link-text">マナーズインターナショナル公式サイト</a>
                </div>
            </div>
            <div class="footer-copyright nav-copyright">
                <small class="cr-sp">Copyright &copy; 2023 マナーズユニバーサルアカデミー<br>All Rights Reserved.</small>
            </div>
        </nav>
    </header>