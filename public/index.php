<?php
$partner = isset($_GET['partner']) ? trim($_GET['partner']) : '';
$version = isset($_GET['version']) ? trim($_GET['version']) : '';
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
include_once $ROOT . 'config.php';
// include_once $ROOT . 'elastic.php';

include_once $ROOT . 'version.php';
?>
<!DOCTYPE html>
<html>

<head>
    <?php if (!empty($_SERVER['DOCUMENT_URI'])) : ?>
        <base href="//<?= $_SERVER['HTTP_HOST'] . str_replace(substr($_SERVER['DOCUMENT_URI'], 1, -9), '', $_SERVER['REQUEST_URI']) ?>">
    <?php else : ?>
        <base href="//<?= $_SERVER['HTTP_HOST'] ?>">
    <?php endif; ?>

    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Synergy Brand Forum | Бренд как инструмент заработка и развития имиджа">
    <meta property="og:description" content="Бренд как инструмент заработка и развития имиджа">
    <meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    <meta property="og:image" content="https://synergyglobal.ru/brand/img/common/share.jpg">

    <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.synergy.ru/libs/bootstrap/bootstrap-4.5.2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-text-marquee@latest/dist/jquery.text-marquee.min.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->
    <!--[if lte IE 9]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->
    <!--[if lt IE 9]><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<![endif]-->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-<?= $GTM_ID ?>');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body class="<?= $version ? 'version-'.$version : '' ?>">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?= $GTM_ID ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    
    
    
    <div class="wrapper">
        

        <header class="header">
    <div class="header__inner">

        <div class="container">

        <?php if ($version !== 'webinar') { ?>
            <div class="header__info">
                <div class="header__center">
                    <a class="header__mobile-menu" href="#popup-menu" data-fancybox="">
                        <div class="line top"></div>
                        <div class="line middle"></div>
                        <div class="line bottom"></div>
                    </a>
                    <div class="header__logo">
                        <div class="header__logo-box"><img src="img/header/logo-synergy.svg" alt="Synergy" class="header__logo-img"></div>
                        <div class="header__logo-box"><img src="img/header/vtb-logo.svg" alt="" class="header__logo-img"></div>
                        <div class="header__logo-box"><img src="img/header/logo-2.png" alt="" class="header__logo-img"></div>
                        <div class="header__logo-text">Ведущее агентство, специализирующееся на<br>создании и&nbsp;репозиционировании больших брендов</div>
                        <!-- <div class="header__logo-box_1"><img src="img/header/logo-vtb.svg" alt="VTB"></div> -->
                    </div>
                   <div><a href="tel:<?= $phone_link ?>" class="header__phone-number"><?= $phone ?></a></div> 
                </div>
                <div class="header__left">
                    <!-- <img src="img/header/logo-sbf.svg" alt="" class="header__sbf"> -->
                    <a href="#popup-reg" data-fancybox class="header__button">Участвовать</a>
                </div>

                <div class="header__right">
                    <div class="header__phone">

                        <a href="tel:<?= $phone_link ?>" class="header__phone-logo"><img src="img/header/phone.svg" alt="phone"></a>
                    </div>
                </div>
            </div>
            <a class="header__burger">
                <nav class="header__nav">
                    <a href="#about" class="header__nav-link scroll" style="animation-delay: 0.2s;">Для кого</a>
                    <a href="#speakers" class="header__nav-link scroll" style="animation-delay: 0.3s;">Спикеры</a>
                    <a href="#brands" class="header__nav-link scroll" style="animation-delay: 0.4s;">Темы</a>
                    <!-- <a href="#program" class="header__nav-link scroll" style="animation-delay: 0.5s;">Программа</a> -->
                    <a href="#univer" class="header__nav-link scroll" style="animation-delay: 0.6s;">Организатор</a>
                </nav>

                <div class="header__menu">
                    <div class="ham hamRotate hamR" onclick="this.classList.toggle('active')">
                        <div class="line top"></div>
                        <div class="line middle"></div>
                        <div class="line bottom"></div>
                    </div>
                </div>
            </a>
        <?php } ?>

        <?php if ($version == 'webinar') { ?>
            <div class="header__info">
                <div class="header__center">
                    <div class="header__logo">
                        <div class="header__logo-box"><img src="img/header/logo-synergy.svg" alt="Synergy" class="header__logo-img"></div>
                        <div class="header__logo-box"><img src="img/header/vtb-logo.svg" alt="" class="header__logo-img"></div>
                        <div class="header__logo-box"><img src="img/header/logo-2.png" alt="" class="header__logo-img"></div>
                    </div>
                   <div><a href="tel:<?= $phone_link ?>" class="header__phone-number"><?= $phone ?></a></div> 
                </div>

                <div class="header__right">
                    <div class="header__phone">
                        <a href="tel:<?= $phone_link ?>" class="header__phone-logo"><img src="img/header/phone.svg" alt="phone"></a>
                    </div>
                </div>
            </div>
        <?php } ?>

        </div>
    </div>
</header>

        <section class="main ">
    <div class="main__video_box">
        <video loop muted autoplay poster="" class="main__video">
            <source src="files/video.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container">
        <div class="main__inner">
        <?php if ($version !== 'webinar') { ?>
            <div class="main__date"><?= $date ?></div>
        <?php } ?>
            <div class="main__box"><img src="img/main/logo-tittle.png" alt="" class="main__title"></div>
        
            <div class="main__subtitle"><?=$title?></div>
            <div class="main__text">
                <?=$speaker?>
                <?=$text?>
            </div> 
            <?php if ($version !== 'webinar') { ?>
            <a href="#popup-reg" data-fancybox class="main__button">Участвовать</a>
            <a href="#form-1" class="main__skroll">Листайте</a>
        <?php } ?>
        </div>
    </div>
</section>


        <?php if ($version !== 'webinar') { ?>

        <section class="about" id="about">
    <div class="container">
        <div class="about__inner">
            <div class="about__title">Форум<br> для<br> владельцев<br> брендов</div>
            <div class="about__text">Как построить,<br> развить<br> и&nbsp;капитализировать<br> бренд</div>
        </div>
        <a href="<?= $programFile ?>" target='_blank' class="about__button">Смотреть программу форума</a>
    </div>
</section>

       
        
<section class="form-section form-section_1 lazy" id="form-1">
    <div class="container">
        <div class="form-section__box">
            <div class="form-section__form">
                
<form action="<?= $action ?>&form=registration-1" class="form form_horisontal">
    <div class="form__wrapper">

        

        <div class="form__items">
            
            <h3 class="form__title "><?=$title_form?></h3>
            

            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Как вас зовут?" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Номер телефона" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш E-mail" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить</button></div>

            <div class="form__more">
                <label class="form__footer ">
                    <!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div> -->
                    <div class="form__footer-text">Отправляя данную форму, вы соглашаетесь <a href="#privacy" class="fancybox form__more-link">с политикой обработки персональных данных</a></div>
                </label>
            </div>

            <div class="form__more form__more-price">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных, согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo; и&nbsp;соглашаюсь c <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
                </label>
            </div>
        </div><!-- form__items -->

    </div>
</form>

            </div>
        </div>
    </div>
</section>

        

        

<section class="speakers" id="speakers">
    <div class="container">
        <div class="speakers__inner">
            <h2 class="speakers__title">Спикеры</h2>
            <div class="speakers__block" data-more-options='{"target":".speakers__box", "init_desktop":6, "init_mobile":4, "show_desktop":3, "show_mobile":2}'>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item pryanishnicov">

                        <div class="speakers__item-name">Николай<br>Прянишников</div>
                        <div class="speakers__item-text speakers__item-text-desctop">World Class, UFC Gyms</div>
                        <div class="speakers__item-text speakers__item-text-hover">Генеральный директор Русской Фитнес группы (World Class, UFC Gyms)</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Генеральный директор Русской Фитнес группы (World Class, UFC Gyms)</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item shepin">

                        <div class="speakers__item-name">Евгений<br>Щепин</div>
                        <div class="speakers__item-text speakers__item-text-desctop">ВкусВилл</div>
                        <div class="speakers__item-text speakers__item-text-hover">Руководитель проекта &laquo;ВкусВилл. Практика‎&raquo;, автор книги про ВкусВилл</div>
                        <!-- <a class="speakers__item-btn" href="">О спикере</a> -->
                    </div>
                    <div class="speakers__text">Руководитель проекта &laquo;ВкусВилл. Практика‎&raquo;, автор книги про ВкусВилл</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item poyarkov">

                        <div class="speakers__item-name">Дмитрий<br>Поярков</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Северсталь</div>
                        <div class="speakers__item-text speakers__item-text-hover">Начальник по&nbsp;корпоративной и&nbsp;социальной ответственности и&nbsp;бренду Северстали</div>
                        <!-- <a class="speakers__item-btn" href="">О спикере</a> -->
                    </div>
                    <div class="speakers__text">Начальник по&nbsp;корпоративной и&nbsp;социальной ответственности и&nbsp;бренду Северстали</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item elchina">

                        <div class="speakers__item-name">Венера<br>Ельчина</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Леруа Мерлен</div>
                        <div class="speakers__item-text speakers__item-text-hover">Директор по&nbsp;развитию HRBP &laquo;Леруа Мерлен&raquo;</div>
                        <!-- <a class="speakers__item-btn" href="">О спикере</a> -->
                    </div>
                    <div class="speakers__text">Директор по&nbsp;развитию HRBP &laquo;Леруа Мерлен&raquo;</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item hvan">

                        <div class="speakers__item-name">Наталья<br>Хван</div>
                        <div class="speakers__item-text speakers__item-text-desctop">PepsiCo</div>
                        <div class="speakers__item-text speakers__item-text-hover">Вице-президент по&nbsp;HR&nbsp;PepsiCo Россия</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Вице-президент по&nbsp;HR&nbsp;PepsiCo Россия</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item lazuchenkov">

                        <div class="speakers__item-name">Илья Лазученков</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Plenum</div>
                        <div class="speakers__item-text speakers__item-text-hover">Генеральный директор брендингового агентства Plenum</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Генеральный директор брендингового агентства Plenum</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item kolesnikov">

                        <div class="speakers__item-name">Кирилл Колесников</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Блогер</div>
                        <div class="speakers__item-text speakers__item-text-hover">Экстремальный блогер, паркурщик, самый экстремальный ТикТокер России с&nbsp;30-миллионной аудиторией</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Экстремальный блогер, паркурщик, самый экстремальный ТикТокер России с&nbsp;30-миллионной аудиторией</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item efimova">

                        <div class="speakers__item-name">Ирина Ефимова</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Спортмастер</div>
                        <div class="speakers__item-text speakers__item-text-hover">Директор Учебного центра &laquo;Спортмастер&raquo;</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Директор Учебного центра &laquo;Спортмастер&raquo;</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item sereda">

                        <div class="speakers__item-name">Ирина<br> Середа</div>
                        <div class="speakers__item-text speakers__item-text-desctop">DIM</div>
                        <div class="speakers__item-text speakers__item-text-hover">Генеральный директор DIM в&nbsp;России</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Генеральный директор DIM в&nbsp;России</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item babenko">

                        <div class="speakers__item-name">Михаил <br>Бабенко</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Эксперт по устойчивому развитию</div>
                        <div class="speakers__item-text speakers__item-text-hover">Член экспертных советов по устойчивому развитию ТПП РФ, ППК РЭО, Деловая Россия</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Член экспертных советов по устойчивому развитию ТПП РФ, ППК РЭО, Деловая Россия</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item krishvalova">

                        <div class="speakers__item-name">Катерина <br>Кришвалова</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Кантата</div>
                        <div class="speakers__item-text speakers__item-text-hover">Директор по&nbsp;маркетингу сети &laquo;Кантата&raquo;</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Директор по&nbsp;маркетингу сети &laquo;Кантата&raquo;</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item kunov">

                        <div class="speakers__item-name">Андрей <br>Кунов</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Сказка</div>
                        <div class="speakers__item-text speakers__item-text-hover">Генеральный директор Парка развлечений &laquo;Сказка&raquo;</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Генеральный директор Парка развлечений &laquo;Сказка&raquo;</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item kopanev">

                        <div class="speakers__item-name">Андрей <br>Копанев</div>
                        <div class="speakers__item-text speakers__item-text-desctop">ЦДМ</div>
                        <div class="speakers__item-text speakers__item-text-hover">Генеральный директор ЦДМ на Лубянке, член совета предпринимателей МСК при департаменте предпринимательства</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Генеральный директор ЦДМ на Лубянке, член совета предпринимателей МСК при департаменте предпринимательства</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item sologov">

                        <div class="speakers__item-name">Нико <br>Сологов</div>
                        <div class="speakers__item-text speakers__item-text-desctop">CEO wow media</div>
                        <div class="speakers__item-text speakers__item-text-hover">Продюсер и Директор блогеров CEO wow media</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Продюсер и Директор блогеров CEO wow media</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item bearwulf">

                        <div class="speakers__item-name">Валерия <br>Беарвульф</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Блогер</div>
                        <div class="speakers__item-text speakers__item-text-hover">Instagram и Tik-Tok блогер</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Instagram и Tik-Tok блогер</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item lukasheva">

                        <div class="speakers__item-name">Елизавета <br>Лукашева</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Блогер</div>
                        <div class="speakers__item-text speakers__item-text-hover">Instagram и Tik-Tok блогер</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Instagram и Tik-Tok блогер</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item alonchikova">

                        <div class="speakers__item-name">Елена <br>Алончикова</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Synergy Speakers Agency</div>
                        <div class="speakers__item-text speakers__item-text-hover">Исполнительный директор, Synergy Speakers Agency</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Исполнительный директор, Synergy Speakers Agency</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item myakotnikova">

                        <div class="speakers__item-name">Елена <br>Мякотникова</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Сибур</div>
                        <div class="speakers__item-text speakers__item-text-hover">Советник генерального директора ООО «Сибур»</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Советник генерального директора ООО «Сибур»</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item myagkikh">

                        <div class="speakers__item-name">Ольга <br>Мягких</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Синергия</div>
                        <div class="speakers__item-text speakers__item-text-hover">Генеральный продюсер, Корпорация Синергия</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Генеральный продюсер, Корпорация Синергия</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item bazaleyev">

                        <div class="speakers__item-name">Олег <br>Базалеев</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Crescent Petroleum</div>
                        <div class="speakers__item-text speakers__item-text-hover">Директор департамента социальных вопросов компании Crescent Petroleum</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Директор департамента социальных вопросов компании Crescent Petroleum</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item ryabov">

                        <div class="speakers__item-name">Сергей <br>Рябов</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Экология. Раздельный сбор отходов</div>
                        <div class="speakers__item-text speakers__item-text-hover">Исполнительный директор ООО «Экология. Раздельный сбор отходов»</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Исполнительный директор ООО «Экология. Раздельный сбор отходов»</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item belkina">

                        <div class="speakers__item-name">Марина <br>Белкина</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Сахар</div>
                        <div class="speakers__item-text speakers__item-text-hover">Владелица сети салонов «Сахар», собственник 30 салонов красотыпо России, лидер по количеству собственных салонов без франшизы</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Владелица сети салонов «Сахар», собственник 30 салонов красотыпо России, лидер по количеству собственных салонов без франшизы</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item biktimirov">

                        <div class="speakers__item-name">Руслан <br>Биктимиров</div>
                        <div class="speakers__item-text speakers__item-text-desctop">X-Fit</div>
                        <div class="speakers__item-text speakers__item-text-hover">Директор по франчайзингу X-Fit в России</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Директор по франчайзингу X-Fit в России</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item idrisov">

                        <div class="speakers__item-name">Александр <br>Идрисов</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Strategy Partners Russia</div>
                        <div class="speakers__item-text speakers__item-text-hover">Президент и основатель Strategy Partners Russia</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Президент и основатель Strategy Partners Russia</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item emoroz">

                        <div class="speakers__item-name">Екатерина <br>Мороз</div>
                        <div class="speakers__item-text speakers__item-text-desctop">Предприниматель</div>
                        <div class="speakers__item-text speakers__item-text-hover">Предприниматель, собственник сети медицинских клиник, автор социальных проектов, выпускник программы MBA Сколково</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">Предприниматель, собственник сети медицинских клиник, автор социальных проектов, выпускник программы MBA Сколково</div>
                </div>
                
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item serebryakova">

                        <div class="speakers__item-name">Светлана <br>Серебрякова</div>
                        <div class="speakers__item-text speakers__item-text-desctop">NEW WORLD</div>
                        <div class="speakers__item-text speakers__item-text-hover">PR-директор маркетингового агентства NEW WORLD, эксперт по внешним коммуникациям</div>
                        <!-- <a class="speakers__item-btn" href=""></a> -->
                    </div>
                    <div class="speakers__text">PR-директор маркетингового агентства NEW WORLD, эксперт по внешним коммуникациям</div>
                </div>
                
            </div>
            <a class="speakers__btn" data-more-button>Показать еще спикеров</a>
        </div>
    </div>
</section>

        <section class="concept" id="concept">
    <div class="container">
        <div class="concept__box">
            <div class="concept__title">Концепция<br> проекта</div>
            <div class="concept__subtitle">Для кого<br> форум?</div>
        </div>
        <div class="concept__block">
            <div class="concept__item">Форум посвящен построению, развитию и&nbsp;капитализации личных и&nbsp;корпоративных брендов. За&nbsp;один день вы&nbsp;поймете как работают бренды во&nbsp;времена tik-tok, instagram, инфлюенсеров и&nbsp;растущих трендов на&nbsp;этику и&nbsp;экологичность.</div>
            <div class="concept__item">Мероприятие подойдет для собственников брендов и топ-менеджеров малого и среднего бизнеса. Участники узнают, как избежать ошибок при создании бренда, как повысить добавленную стоимость компании и себя лично, разберут решения проблем, которые возникают при продвижении услуг и продуктов.</div>
        </div>
    </div>
</section>

        <section class="brands" id="brands">
    <div class="container">
        <div class="brands__inner">
            <h2 class="brands__title">Бренды в&nbsp;изменчивом и&nbsp;невнима-<br>тельном мире</h2>
            <div class="brands__subtitle">Эксперты раскроют актуальные вопросы,<br> которые возникают при работе с брендом.</div>
            <div class="brands__block">
                <div class="brands__item ellipse">
                    <div class="brands__item-text">Чем стали бренды в социально прозрачном пространстве</div>
                </div>
                <div class="brands__item cube">
                    <div class="brands__item-text">Как сделать бренд популярным в информационно- перегруженном мире, где ценен каждый день</div>
                </div>
                <div class="brands__item star">
                    <div class="brands__item-text">Как выбрать между <br> хайпом и стратегией</div>
                </div>
                <div class="brands__item cube">
                    <div class="brands__item-text">Что такое «новые нормы» и как они будут влиять на потребительские предпочтения</div>
                </div>
            </div>
        </div>
    </div>
</section>

        
<section class="form-section form-section_2 lazy" id="form-2">
    <div class="container">
        <div class="form-section__box">
            <div class="form-section__form">
                
<form action="<?= $action ?>&form=registration-2" class="form form_horisontal">
    <div class="form__wrapper">

        

        <div class="form__items">
            
            <h3 class="form__title "><?=$title_form?></h3>
            

            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Как вас зовут?" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Номер телефона" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш E-mail" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить</button></div>

            <div class="form__more">
                <label class="form__footer ">
                    <!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div> -->
                    <div class="form__footer-text">Отправляя данную форму, вы соглашаетесь <a href="#privacy" class="fancybox form__more-link">с политикой обработки персональных данных</a></div>
                </label>
            </div>

            <div class="form__more form__more-price">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных, согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo; и&nbsp;соглашаюсь c <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
                </label>
            </div>
        </div><!-- form__items -->

    </div>
</form>

            </div>
        </div>
    </div>
</section>


        

        <section class="place" id="place">
    <div class="container">
        <div class="place__box">
            <h2 class="place__title">Место<br> проведения</h2>
            <p class="place__text">Holiday Inn находится рядом с&nbsp;Белой Площадью и&nbsp;всего в&nbsp;3&nbsp;км от&nbsp;Красной Площади. Ближайшая станция метро &laquo;Белорусская&raquo; расположена в&nbsp;300&nbsp;метрах.</p>
            <ul class="place__list">
                <li class="place__item">
                    <span>1</span>
                    <div>Конференц-зал</div>
                </li>
                <li class="place__item">
                    <span>250</span>
                    <div>Мест</div>
                </li>
                <li class="place__item">
                    <span>475</span>
                    <div>КВ.М.</div>
                </li>
            </ul>
            <img class="place__img" src="img/place/picture.png" alt="">
        </div>
    </div>
</section>

        <?php } ?>

        <?php if ($version !== 'noprice' && $version !=='webinar' ) { ?>
            


    <section class="price" id="price">
        
        <div class="container">
            <h2 class="price__title">Стоимость<br> участия</h2>
            <div class="price__row row">
                
                <div class="price__col  col-lg-6">
                    <div class="price__item">
                        <div class="price__item-title">Пакет<br> &laquo;Онлайн&raquo;</div>
                        <ul class="price__item-list">
                            <li>Ссылка на&nbsp;онлайн-трансляцию</li>
               <li>Презентации спикеров</li>
               <li>1 месяц доступа к образовательной платформе Synergy.Online</li>
                        </ul>
                        <div class="price__wrap">
                            <div class="price__wrap-numb "><span>7 000 руб</span></div>
                            <a href="#popup-price-online" data-fancybox class="price__wrap-button price-button">Купить</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="price__col  col-lg-6">
                    <div class="price__item">
                        <div class="price__item-title">Пакет<br> &laquo;Стандарт&raquo;</div>
                        <ul class="price__item-list">
                            <li>Аккредитация в&nbsp;зоне Стандарт</li>
               <li>Книга участника</li>
               <li>1&nbsp;месяц доступа к&nbsp;образовательной платформе Synergy.Online</li>
			   <li>2&nbsp;Кофе-брейка</li>
                        </ul>
                        <div class="price__wrap">
                            <div class="price__wrap-numb "><span>10 000 руб</span></div>
                            <a href="#popup-price-standart" data-fancybox class="price__wrap-button price-button">Купить</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="price__col  col-lg-6">
                    <div class="price__item">
                        <div class="price__item-title">Пакет<br> &laquo;Бизнес&raquo;</div>
                        <ul class="price__item-list">
                            <li>Аккредитация в&nbsp;зоне Бизнес</li>
               <li>Место в 2-6 ряду</li>
               <li>Презентации спикеров</li>
			   <li>Сертификат участника</li>
               <li>Книга участника</li>
			   <li>2&nbsp;Кофе-брейка</li>
			   <li>1 месяц доступа к образовательной платформе Synergy.Online</li>
                        </ul>
                        <div class="price__wrap">
                            <div class="price__wrap-numb "><span>20 000 руб</span></div>
                            <a href="#popup-price-business" data-fancybox class="price__wrap-button price-button">Купить</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="price__col  col-lg-6">
                    <div class="price__item">
                        <div class="price__item-title">Пакет<br> &laquo;Премиум&raquo;</div>
                        <ul class="price__item-list">
                            <li>Аккредитация в зоне Премиум</li>
               <li>Место в 1 ряду</li>
               <li>Презентации спикеров</li>
               <li>Книга участника</li>
               <li>Годовой доступ к образовательной платформе Synergy.Online</li>
               <li>Персональный ассистент</li>
			   <li>Обед</li>
			   <li>Фото со спикерами </li>
               <li>Online MBA</li>
                        </ul>
                        <div class="price__wrap">
                            <div class="price__wrap-numb "><span>95 000 руб</span></div>
                            <a href="#popup-price-pro" data-fancybox class="price__wrap-button price-button">Купить</a>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
        <?php } ?>

        <?php if ($version !== 'webinar') { ?>
        <section class="marquee" id="univer">
    <div class="marquee__left">
        <div class="marquee__box">
            <p class="marquee__text"> Synergy Business School Организатор</p>
            <p class="marquee__text"> Synergy Business School Организатор</p>
        </div>
    </div>
    <div class="marquee__right">
        <div class="marquee__box">
            <p class="marquee__text"> School Организатор</p>
            <p class="marquee__text"> Synergy Business School Организатор</p>
            <p class="marquee__text"> Synergy Business School Организатор</p>
        </div>
    </div>
</section>

        <section class="organizator">
    <div class="container">
        <div class="organizator__inner">
            <div class="organizator__logo">
                <img src="img/organizator/synergy.svg" alt="" class="organizator__img">
                <div>
                    <img src="img/organizator/logo.png" alt="" class="organizator__img organizator__img0-">
                    <div class="organizator__logo-text">Соорганизатор форума</div>
                </div>
            </div>

            <div class="organizator__box">
                <div class="organizator__title">Организатор<br>форума</div>
                <div class="organizator__title">Школа Бизнеса.<br>Обучение</div>
                <div class="organizator__title">Соорганизатор<br> форума</div>
            </div>
            <div class="organizator__block">
                <div class="organizator__item">Школа Бизнеса «Синергия» основана в 1988 году. Она является первой бизнес-школой в России и СНГ. На базе школы проводится обучение по программам МВА и профессиональной переподготовки, семинары и тренинги ведущих российских и мировых экспертов.</div>
                <div class="organizator__item">Качество образования в Школе Бизнеса отмечено 6 престижными аккредитациями международной ассоциации AMBA. Школа Бизнеса «Синергия» имеет филиалы за рубежом: в Нью-Йорке, Лондоне и Дубае, где ведется обучение по Executive Education на английском языке.</div>
                <div class="organizator__item">Plenum — ведущее агентство, специализирующееся на создании и&nbsp;репозиционировании больших брендов.</div>
            </div>
        </div>
    </div>
</section>

        <section class="partners" id="partners">
    <div class="container">
        <div class="partners__inner">
            <h2 class="partners__title">
                Партнеры форума
            </h2>
            <div class="partners__list">
                
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner1.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner2.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner4.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner3.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner5.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner6.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner7.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner8.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner9.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner10.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner11.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner12.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner13.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner14.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner15.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner16.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/partner17.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

        <section class="partners" id="partners-info">
    <div class="container">
        <div class="partners__inner">
            <h2 class="partners__title">
                Информационные партнеры форума
            </h2>
            <div class="partners__list">
                
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners-info/item-01.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners-info/item-02.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners-info/item-03.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners-info/item-04.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

        

        <section class="main outro">
    <div class="main__video_box">
        <video loop muted autoplay poster="" class="main__video">
            <source src="files/video.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container">
        <div class="main__inner">
        <?php if ($version !== 'webinar') { ?>
            <div class="main__date"><?= $date ?></div>
        <?php } ?>
            <div class="main__box"><img src="img/main/logo-tittle.png" alt="" class="main__title"></div>
        
            <div class="main__subtitle"><?=$title?></div>
            <div class="main__text">
                <?=$speaker?>
                <?=$text?>
            </div> 
            <?php if ($version !== 'webinar') { ?>
            <a href="#popup-reg" data-fancybox class="main__button">Участвовать</a>
            <a href="#form-1" class="main__skroll">Листайте</a>
        <?php } ?>
        </div>
    </div>
</section>

        
<section class="faq lazy" id="faq">
    <div class="container">
        <div class="faq__flex">

            <h2 class="faq-title">Часто задаваемые вопросы</h2>

            <div class="faq__flex-card" id="accordion" role="tablist">
                
                <div class="faq__group">
                    <a href="#card-1" class="faq__item collapsed" data-toggle="collapse">
                        <div class="faq__item-txt">В&nbsp;чем ценность форума?</div>
                        <div class="faq__item-icon">
                            <svg width="35" height="35" viewBox="0 0 42 42" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42 20H22V0H20V20H0V22H20V42H22V22H42V20Z" fill="url(#paint0_linear)" />
                                <defs>
                                    <linearGradient id="paint0_linear" x1="-7.12521" y1="59.2651" x2="-8.61101" y2="-4.7561" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff" />
                                        <stop offset="2" stop-color="#000" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </a>
                    <div id="card-1" class="collapse" role="tabpanel" data-parent="#accordion">
                        <div class="faq__item-body"><p>Форум посвящен построению, развитию и&nbsp;капитализации личных и&nbsp;корпоративных брендов. За&nbsp;один день вы&nbsp;поймете как работают бренды во&nbsp;времена tik-tok, instagram, инфлюенсеров и&nbsp;растущих трендов на&nbsp;этику и&nbsp;экологичность.</p></div>
                    </div>
                </div>
                
                <div class="faq__group">
                    <a href="#card-2" class="faq__item collapsed" data-toggle="collapse">
                        <div class="faq__item-txt">Для кого этот форум?</div>
                        <div class="faq__item-icon">
                            <svg width="35" height="35" viewBox="0 0 42 42" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42 20H22V0H20V20H0V22H20V42H22V22H42V20Z" fill="url(#paint0_linear)" />
                                <defs>
                                    <linearGradient id="paint0_linear" x1="-7.12521" y1="59.2651" x2="-8.61101" y2="-4.7561" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff" />
                                        <stop offset="2" stop-color="#000" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </a>
                    <div id="card-2" class="collapse" role="tabpanel" data-parent="#accordion">
                        <div class="faq__item-body"><p>Форум для собственников и&nbsp;топ-менеджеров малого и&nbsp;среднего бизнеса, работающего на&nbsp;конкурентных рынках, думающих о&nbsp;росте и&nbsp;развитии, на&nbsp;практике столкнувшихся со&nbsp;сложностями продвижения своих услуг и&nbsp;продуктов в&nbsp;современном мире.</p></div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>

</section>
        


        
<section class="form-section form-section_3 lazy" id="form-3">
    <div class="container">
        <div class="form-section__box">
            <div class="form-section__form">
                
<form action="<?= $action ?>&form=registration-3" class="form form_horisontal">
    <div class="form__wrapper">

        

        <div class="form__items">
            
            <h3 class="form__title "><?=$title_form?></h3>
            

            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Как вас зовут?" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Номер телефона" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш E-mail" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить</button></div>

            <div class="form__more">
                <label class="form__footer ">
                    <!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div> -->
                    <div class="form__footer-text">Отправляя данную форму, вы соглашаетесь <a href="#privacy" class="fancybox form__more-link">с политикой обработки персональных данных</a></div>
                </label>
            </div>

            <div class="form__more form__more-price">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных, согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo; и&nbsp;соглашаюсь c <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
                </label>
            </div>
        </div><!-- form__items -->

    </div>
</form>

            </div>
        </div>
    </div>
</section>


        <?php } ?>

        <?php if ($version == 'webinar') { ?>
            
<section class="form-section form-section_4 lazy" id="form-4">
    <div class="container">
        <div class="form-section__box">
            <div class="form-section__form">
                
<form action="<?= $action ?>&form=registration-4" class="form form_horisontal">
    <div class="form__wrapper">

        

        <div class="form__items">
            
            <h3 class="form__title "><?=$title_form?></h3>
            

            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Как вас зовут?" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Номер телефона" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш E-mail" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить</button></div>

            <div class="form__more">
                <label class="form__footer ">
                    <!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div> -->
                    <div class="form__footer-text">Отправляя данную форму, вы соглашаетесь <a href="#privacy" class="fancybox form__more-link">с политикой обработки персональных данных</a></div>
                </label>
            </div>

            <div class="form__more form__more-price">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных, согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo; и&nbsp;соглашаюсь c <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
                </label>
            </div>
        </div><!-- form__items -->

    </div>
</form>

            </div>
        </div>
    </div>
</section>


            
<section class="speaker" id="speaker">
    <div class="container">
        <div class="speaker__inner">
            <h2 class="speaker__title">Спикер</h2>

                <div class="speaker__box">
                    <div class="speaker__item speaker__item-info">
                        <div class="speaker__item-name">Илья Лазученков</div>
                        <div class="speaker__item-about">генеральный директор брендингового агентства Plenum</div>
                        <img class="speaker__item-image" src="img/speaker/speaker.png" alt="">
                    </div>
                    <div class="speaker__item speaker__item-text">
                        <div class="speaker__item-title">
                        Что вы узнаете на вебинаре?
                        </div>
                        <ul class="speaker__item-list">
                            <li>Как сильно пандемия меняет людей и их потребности?</li>
                            <li>Как научиться понимать поколение Z?</li>
                            <li>Почему для брендов важна новая этика?</li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</section>
        <?php } ?>

        

        <footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__link"><a class="fancybox-privacy-link" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru"><span>Политика конфиденциальности</span></a></div>
            <a href="https://sydi.ru/" class="footer__link" target="_blank">Разработка и&nbsp;продвижение&nbsp;&mdash; <span>Synergy Digital</span></a>
            <a href="https://plenum.ru/" class="footer__link-disign" target="_blank">Дизайн <span>пленум.cx</span></a>
        </div>
        <div class="footer__box">
            <a href="#popup-reg" data-fancybox class="footer__button">Участвовать</a>
            <div class="header__logo-box"><img src="img/header/logo-2.png" alt="" class="header__logo-img"></div>
            <div class="header__logo-text">Ведущее агентство, специализирующееся на<br>создании и&nbsp;репозиционировании больших брендов</div>
            <a href="files/offer.pdf"  class="footer__link _offer" target="_blank">Договор оферты</a>
        </div>

        <div class="footer__button-fixed ">
            <a href="#popup-reg" data-fancybox class="button-link" >Участвовать</a>
        </div> 
    </div>
</footer>



        
    </div>

    <div hidden>
        

        <div class="popup popup-reg" id="popup-reg">
    
<form action="<?= $action ?>&form=reg" class="form vertical">
    <div class="form__wrapper">

        

        <div class="form__items">
            
            <h3 class="form__title "><?=$title_form?></h3>
            

            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Как вас зовут?" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Номер телефона" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш E-mail" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить</button></div>

            <div class="form__more">
                <label class="form__footer ">
                    <!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div> -->
                    <div class="form__footer-text">Отправляя данную форму, вы соглашаетесь <a href="#privacy" class="fancybox form__more-link">с политикой обработки персональных данных</a></div>
                </label>
            </div>

            <div class="form__more form__more-price">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных, согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo; и&nbsp;соглашаюсь c <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
                </label>
            </div>
        </div><!-- form__items -->

    </div>
</form>

</div>

<div class="popup popup-menu" id="popup-menu">
    <nav class="popup-menu__links">
        <a href="#speakers" class="popup-menu__link scroll">Спикеры</a>
        <a href="#concept" class="popup-menu__link scroll">Концепция</a>
        <a href="#faq" class="popup-menu__link scroll">Актуальные вопросы</a>
        <a href="#program" class="popup-menu__link scroll">Программа</a>
        <a href="#univer" class="popup-menu__link scroll">Организатор</a>
        <a href="#popup-reg" data-fancybox class="popup-menu__button">Участвовать</a>
        <!-- <a href="#form-1"class="popup-menu__link scroll">Участвовать</a> -->
    </nav>
</div>

<div class="popup popup-price" id="popup-price-standart">

<form action="<?= $action ?>&form=price&amp;unit=payments&amp;type=ticket&amp;new_tab=1&amp;callbackSuccess=https://synergyglobal.ru/brand/price/thanks-da" class="form form_vertical">
    <div class="form__wrapper">

        

        <div class="form__items">
            
            <h3 class="form__title ">Пакет<br> &laquo;Стандарт&raquo;</h3>
            

            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Как вас зовут?" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Номер телефона" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш E-mail" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_number ">
    
    <input name="tickets_count" type="number" placeholder="1" class="form__input" min=1 pattern=^[0-9]+$ required value=1 value="">
    
</div><!-- form__item -->

            

            
            
            
<div class="form__item form__item_hidden d-none">
    
    <input name="product_id" type="hidden" placeholder="" class="form__input"     value="91763868">
    
</div><!-- form__item -->

            
            
<div class="form__item form__item_hidden d-none">
    
    <input name="event_id" type="hidden" placeholder="" class="form__input"     value="176">
    
</div><!-- form__item -->

            
            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Купить</button></div>

            <div class="form__more">
                <label class="form__footer ">
                    <!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div> -->
                    <div class="form__footer-text">Отправляя данную форму, вы соглашаетесь <a href="#privacy" class="fancybox form__more-link">с политикой обработки персональных данных</a></div>
                </label>
            </div>

            <div class="form__more form__more-price">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных, согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo; и&nbsp;соглашаюсь c <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
                </label>
            </div>
        </div><!-- form__items -->

    </div>
</form>
      
</div>

<div class="popup popup-price" id="popup-price-business">
    
<form action="<?= $action ?>&form=price&amp;unit=payments&amp;type=ticket&amp;new_tab=1&amp;callbackSuccess=https://synergyglobal.ru/brand/price/thanks-da" class="form form_vertical">
    <div class="form__wrapper">

        

        <div class="form__items">
            
            <h3 class="form__title ">Пакет<br> &laquo;Бизнес&raquo;</h3>
            

            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Как вас зовут?" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Номер телефона" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш E-mail" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_number ">
    
    <input name="tickets_count" type="number" placeholder="1" class="form__input" min=1 pattern=^[0-9]+$ required value=1 value="">
    
</div><!-- form__item -->

            

            
            
            
<div class="form__item form__item_hidden d-none">
    
    <input name="product_id" type="hidden" placeholder="" class="form__input"     value="91763954">
    
</div><!-- form__item -->

            
            
<div class="form__item form__item_hidden d-none">
    
    <input name="event_id" type="hidden" placeholder="" class="form__input"     value="176">
    
</div><!-- form__item -->

            
            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Купить</button></div>

            <div class="form__more">
                <label class="form__footer ">
                    <!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div> -->
                    <div class="form__footer-text">Отправляя данную форму, вы соглашаетесь <a href="#privacy" class="fancybox form__more-link">с политикой обработки персональных данных</a></div>
                </label>
            </div>

            <div class="form__more form__more-price">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных, согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo; и&nbsp;соглашаюсь c <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
                </label>
            </div>
        </div><!-- form__items -->

    </div>
</form>

</div>

<div class="popup popup-price" id="popup-price-online">
    
<form action="<?= $action ?>&form=price&amp;unit=payments&amp;type=ticketless&amp;new_tab=1&amp;callbackSuccess=https://synergyglobal.ru/brand/price/thanks-da" class="form form_vertical">
    <div class="form__wrapper">

        

        <div class="form__items">
            
            <h3 class="form__title ">Пакет<br> &laquo;Онлайн&raquo;</h3>
            

            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Как вас зовут?" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Номер телефона" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш E-mail" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            

            
            
            
<div class="form__item form__item_hidden d-none">
    
    <input name="product_id" type="hidden" placeholder="" class="form__input"     value="91763816">
    
</div><!-- form__item -->

            
            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Купить</button></div>

            <div class="form__more">
                <label class="form__footer ">
                    <!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div> -->
                    <div class="form__footer-text">Отправляя данную форму, вы соглашаетесь <a href="#privacy" class="fancybox form__more-link">с политикой обработки персональных данных</a></div>
                </label>
            </div>

            <div class="form__more form__more-price">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных, согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo; и&nbsp;соглашаюсь c <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
                </label>
            </div>
        </div><!-- form__items -->

    </div>
</form>

</div>

<div class="popup popup-price" id="popup-price-pro">
    
<form action="<?= $action ?>&form=price&amp;unit=payments&amp;type=ticket&amp;new_tab=1&amp;callbackSuccess=https://synergyglobal.ru/brand/price/thanks-da" class="form form_vertical">
    <div class="form__wrapper">

        

        <div class="form__items">
            
            <h3 class="form__title ">Пакет<br> &laquo;Премиум&raquo;</h3>
            

            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Как вас зовут?" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Номер телефона" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш E-mail" class="form__input"   required  value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_number ">
    
    <input name="tickets_count" type="number" placeholder="1" class="form__input" min=1 pattern=^[0-9]+$ required value=1 value="">
    
</div><!-- form__item -->

            

            
            
            
<div class="form__item form__item_hidden d-none">
    
    <input name="product_id" type="hidden" placeholder="" class="form__input"     value="91764007">
    
</div><!-- form__item -->

            
            
<div class="form__item form__item_hidden d-none">
    
    <input name="event_id" type="hidden" placeholder="" class="form__input"     value="176">
    
</div><!-- form__item -->

            
            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Купить</button></div>

            <div class="form__more">
                <label class="form__footer ">
                    <!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div> -->
                    <div class="form__footer-text">Отправляя данную форму, вы соглашаетесь <a href="#privacy" class="fancybox form__more-link">с политикой обработки персональных данных</a></div>
                </label>
            </div>

            <div class="form__more form__more-price">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных, согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo; и&nbsp;соглашаюсь c <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
                </label>
            </div>
        </div><!-- form__items -->

    </div>
</form>

</div>




        

        <a href="//sydi.ru/"></a>
    </div>

    <!-- Плагины и хелперы -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js" defer="defer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js" type="text/javascript"></script>

    <!-- Скрипт ALM Lander -->
    <script src="https://syn.su/js/lander.js" defer></script>
    <script src="js/script.js"></script>

</body>

</html>