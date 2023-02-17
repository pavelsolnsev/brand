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

    {% import 'form/macro.php' as form %}
    {% import 'form-section/macro.php' as form_section %}
    {% set main_class='' %}
    <div class="wrapper">
        {% block blocks %}

        {% include 'header/block.php' %}

        {% include 'main/block.php' %}


        <?php if ($version !== 'webinar') { ?>

        {% include 'about/block.php' %}

       
        {{ form_section.macro(1) }}
        

        {% include 'speakers/block.php' %}

        {% include 'concept/block.php' %}

        {% include 'brands/block.php' %}

        {{ form_section.macro(2) }}

        {#% include 'program/block.php' %#}

        {% include 'place/block.php' %}

        <?php } ?>

        <?php if ($version !== 'noprice' && $version !=='webinar' ) { ?>
            {% include 'price/block.php' %}
        <?php } ?>

        <?php if ($version !== 'webinar') { ?>
        {% include 'marquee/block.php' %}

        {% include 'organizator/block.php' %}

        {% include 'partners/block.php' %}

        {% include 'partners-info/block.php' %}

        {% set main_class='outro' %}

        {% include 'main/block.php' %}

        {% include 'faq/block.php' %}
        


        {{ form_section.macro(3) }}

        <?php } ?>

        <?php if ($version == 'webinar') { ?>
            {{ form_section.macro(4) }}

            {% include 'speaker/block.php' %}
        <?php } ?>

        

        {% include 'footer/block.php' %}

        {% endblock %}
    </div>

    <div hidden>
        {% block popups %}

        {% include 'popups/block.php' %}

        {% endblock %}

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