{% from './data.nj' import card as card %}
<section class="faq lazy" id="faq">
    <div class="container">
        <div class="faq__flex">

            <h2 class="faq-title">Часто задаваемые вопросы</h2>

            <div class="faq__flex-card" id="accordion" role="tablist">
                {% for item in card %}
                <div class="faq__group">
                    <a href="#card-{{ item.id }}" class="faq__item collapsed" data-toggle="collapse">
                        <div class="faq__item-txt">{{ item.quest | safe}}</div>
                        <div class="faq__item-icon">
                            <svg width="35" height="35" viewBox="0 0 42 42" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42 20H22V0H20V20H0V22H20V42H22V22H42V20Z" fill="url(#paint0_linear)" />
                                <defs>
                                    <linearGradient id="paint0_linear" x1="-7.12521" y1="59.2651" x2="-8.61101" y2="-4.7561" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff" />
                                        <stop offset="2" stop-color="#000" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </a>
                    <div id="card-{{ item.id }}" class="collapse" role="tabpanel" data-parent="#accordion">
                        <div class="faq__item-body">{{ item.answer | safe}}</div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>

    </div>

</section>