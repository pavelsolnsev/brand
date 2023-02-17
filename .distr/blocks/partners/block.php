<section class="partners" id="partners">
    <div class="container">
        <div class="partners__inner">
            <h2 class="partners__title">
                Партнеры форума
            </h2>
            <div class="partners__list">
                {% from './data.php' import data %}
                {% for item in data %}
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners/{{ item.img|safe}}.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>