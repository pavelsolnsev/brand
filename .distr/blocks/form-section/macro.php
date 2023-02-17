{% import 'form/macro.php' as form %}

{% macro macro(n) %}
<section class="form-section form-section_{{ n }} lazy" id="form-{{ n }}">
    <div class="container">
        <div class="form-section__box">
            <div class="form-section__form">
                {{ form.form( 'registration-' + n, form_class='form_horisontal', button_class='button_1', exclude_fields={number: true}) }}
            </div>
        </div>
    </div>
</section>
{% endmacro %}