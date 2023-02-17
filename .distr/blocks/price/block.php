{% from './data.njk' import data as price %}

{% if price_thanks %}
<section class="price" id="price-thanks">
    {% else %}
    <section class="price" id="price">
        {% endif %}
        <div class="container">
            <h2 class="price__title">Стоимость<br> участия</h2>
            <div class="price__row row">
                {% for item in price %}
                <div class="price__col  col-lg-6">
                    <div class="price__item">
                        <div class="price__item-title">{{item.title | safe}}</div>
                        <ul class="price__item-list">
                            {{item.list | safe}}
                        </ul>
                        <div class="price__wrap">
                            <div class="price__wrap-numb {% if item.blackf %}price__wrap-numb_old{% endif %}"><span>{{item.old | safe}} руб</span></div>
                            <a href="#popup-price-{{item.id | safe}}" data-fancybox class="price__wrap-button price-button">Купить</a>
                        </div>
                        
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>