{% from './data.php' import speakers_data as speakers_data %}

<section class="speakers" id="speakers">
    <div class="container">
        <div class="speakers__inner">
            <h2 class="speakers__title">Спикеры</h2>
            <div class="speakers__block" data-more-options='{"target":".speakers__box", "init_desktop":6, "init_mobile":4, "show_desktop":3, "show_mobile":2}'>
                {% for item in speakers_data %}
                <div class="speakers__box" data-more-hidden>
                    <div class="speakers__item {{ item.id | safe }}">

                        <div class="speakers__item-name">{{ item.name | safe }}</div>
                        <div class="speakers__item-text speakers__item-text-desctop">{{ item.company | safe }}</div>
                        <div class="speakers__item-text speakers__item-text-hover">{{ item.text | safe }}</div>
                        <!-- <a class="speakers__item-btn" href="">{{ item.btn | safe }}</a> -->
                    </div>
                    <div class="speakers__text">{{ item.text | safe }}</div>
                </div>
                {% endfor %}
            </div>
            <a class="speakers__btn" data-more-button>Показать еще спикеров</a>
        </div>
    </div>
</section>