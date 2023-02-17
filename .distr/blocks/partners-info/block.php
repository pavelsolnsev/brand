<section class="partners" id="partners-info">
    <div class="container">
        <div class="partners__inner">
            <h2 class="partners__title">
                Информационные партнеры форума
            </h2>
            <div class="partners__list">
                {% from './data.php' import data %}
                {% for item in data %}
                <div class="partners__col">
                    <div class="partners__item">
                        <img src="img/partners-info/{{ item.img|safe}}.png" class="partners__image" alt="partners-logo"></img>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>