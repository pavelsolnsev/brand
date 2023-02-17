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