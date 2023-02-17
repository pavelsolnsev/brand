<section class="thanks">
  <div class="container">
    {% if thanks_da %}
    <h2 class="thanks__title ">Спасибо, оплата прошла успешно!</h2>
    <div class="thanks__text">Билет на&nbsp;форум отправлен на&nbsp;ваш email.</div>
    {% elif price_thanks %}
    <h2 class="thanks__title">Спасибо! <br>Ваша заявка отправлена.</h2>
    <div class="thanks__text">В&nbsp;ближайшее время специалист свяжется с&nbsp;вами и&nbsp;ответит на&nbsp;ваши вопросы.</div>
    <a href="#price-thanks" class="thanks__button scroll">Оплатить участие</a>
    {% else %}
    <!-- <h2 class="thanks__title"></h2>
    <div class="thanks__text">В&nbsp;ближайшее время специалист свяжется с&nbsp;вами и&nbsp;ответит на&nbsp;ваши вопросы.</div> -->
    <!-- <a href="#" onclick="history.back();" class="thanks__button">На&nbsp;главную</a> -->
    <h2 class="thanks__title"><?=$thanks_title?></h2>
    <div class="thanks__text"><?=$thanks_text?></div>
    <a href="#" onclick="history.back();" class="thanks__button">На&nbsp;главную</a>
    {% endif %}
  </div>
</section>