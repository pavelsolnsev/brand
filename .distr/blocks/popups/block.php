<div class="popup popup-reg" id="popup-reg">
    {{ form.form( 'reg', form_class = 'vertical', exclude_fields={number: true}) }}
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
{{ form.form( 'price&unit=payments&type=ticket&new_tab=1&callbackSuccess=https://synergyglobal.ru/brand/price/thanks-da', title='Пакет<br> &laquo;Стандарт&raquo;', button='Купить', add_fields=add_fields,
        add_fields=[{name: 'product_id', type: 'hidden', value: '91763868'},
                    {name: 'event_id', type: 'hidden', value: '176'}]) }}      
</div>

<div class="popup popup-price" id="popup-price-business">
    {{ form.form( 'price&unit=payments&type=ticket&new_tab=1&callbackSuccess=https://synergyglobal.ru/brand/price/thanks-da', title='Пакет<br> &laquo;Бизнес&raquo;', button='Купить',
        add_fields=[{name: 'product_id', type: 'hidden', value: '91763954'},
                    {name: 'event_id', type: 'hidden', value: '176'}]) }}
</div>

<div class="popup popup-price" id="popup-price-online">
    {{ form.form( 'price&unit=payments&type=ticketless&new_tab=1&callbackSuccess=https://synergyglobal.ru/brand/price/thanks-da', title='Пакет<br> &laquo;Онлайн&raquo;', button='Купить', exclude_fields={number: true},
        add_fields=[{name: 'product_id', type: 'hidden', value: '91763816'}]) }}
</div>

<div class="popup popup-price" id="popup-price-pro">
    {{ form.form( 'price&unit=payments&type=ticket&new_tab=1&callbackSuccess=https://synergyglobal.ru/brand/price/thanks-da', title='Пакет<br> &laquo;Премиум&raquo;', button='Купить',
        add_fields=[{name: 'product_id', type: 'hidden', value: '91764007'},
                    {name: 'event_id', type: 'hidden', value: '176'}]) }}
</div>


