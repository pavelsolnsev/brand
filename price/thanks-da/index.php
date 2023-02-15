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
	
	<section class="thanks">
  <div class="container">
    
    <h2 class="thanks__title ">Спасибо, оплата прошла успешно!</h2>
    <div class="thanks__text">Билет на&nbsp;форум отправлен на&nbsp;ваш email.</div>
    
  </div>
</section>

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