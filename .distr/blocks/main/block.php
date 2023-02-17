<section class="main {{ main_class }}">
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