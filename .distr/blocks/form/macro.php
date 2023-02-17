{% macro form(form, form_class='form_vertical', title_class='', button_class='button-link', title='<?=$title_form?>', button='Отправить', form_text='', add_fields, exclude_fields) %}
<form action="<?= $action ?>&form={{ form }}" class="form {{form_class}}">
    <div class="form__wrapper">

        {% if form_text.length %}
        <div class="form__text">{{ form_text | safe }}</div>
        {% endif %}

        <div class="form__items">
            {% if title.length %}
            <h3 class="form__title {{ title_class }}">{{ title | safe }}</h3>
            {% endif %}

            {% if not exclude_fields.name %}
            {{ form_item( 'name', 'text', 'Как вас зовут?', true ) }}
            {% endif %}

            {% if not exclude_fields.phone %}
            {{ form_item( 'phone', 'text', 'Номер телефона', true ) }}
            {% endif %}

            {% if not exclude_fields.email %}
            {{ form_item( 'email', 'email', 'Ваш E-mail', true ) }}
            {% endif %}

            {% if not exclude_fields.number %}
            {{ form_item( 'tickets_count', 'number', '1', true ) }}
            {% endif %}

            {% if add_fields.length %}
            {% for item in add_fields %}
            {{ form_item( item.name, item.type, item.placeholder, item.required, item.value ) }}
            {% endfor %}
            {% endif %}

            <div class="form__item form__item_button"><button class="form__button button" type="submit">{{ button }}</button></div>

            <div class="form__more">
                <label class="form__footer {{ form__footer_class }}">
                    <!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div> -->
                    <div class="form__footer-text">Отправляя данную форму, вы соглашаетесь <a href="#privacy" class="fancybox form__more-link">с политикой обработки персональных данных</a></div>
                </label>
            </div>

            <div class="form__more form__more-price">
                <label class="form__footer {{ form__footer_class }}">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных, согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo; и&nbsp;соглашаюсь c <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
                </label>
            </div>
        </div><!-- form__items -->

    </div>
</form>
{% endmacro %}

{% macro form_item(name, type, placeholder, required, value) %}
<div class="form__item form__item_{{ type }} {{ 'd-none' if type == 'hidden' }}">
    {% if type == 'textarea' %}
    <textarea name="{{ name }}" placeholder="{{ placeholder }}" class="form__input form__input_textarea" {{ 'required' if required }}></textarea>
    {% else %}
    <input name="{{ name }}" type="{{ type }}" placeholder="{{ placeholder }}" class="form__input" {{ 'min=1' if type == 'number' }} {{ 'pattern=^[0-9]+$' if type == 'number' }} {{ 'required' if required }} {{ 'value=1' if type == 'number' }} value="{{ value }}">
    {% endif %}
</div><!-- form__item -->
{% endmacro %}