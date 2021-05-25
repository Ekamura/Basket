<?php include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php'; ?>
<div class="page">

    <!-- Intro -->
    <div class="intro" id="intro">
        <div class="container">
            <div class="intro__inner">
                <h2 class="intro__suptitle">Все о баскетболе</h2>
                <h1 class="intro__title">Лучший информационный портал</h1>

            </div>
        </div>


    </div><!-- /.intro -->
    <!-- Services -->
    <section class="section" id="services">
        <div class="container">

            <div class="section__header">
                <h2 class="section__title">О нас</h2>
                <h3 class="section__suptitle">Подбробнее о том, что вас ждёт на нашем сайте</h3>
            </div>

            <div class="services">
                <div class="services__item  services__item--border">
                    <img class="services__icon" src="assets/images/services/photography.jpg" alt="">

                    <div class="services__title">Новости</div>
                    <div class="services__text">Актуальная информация из мира большого спортаr.</div>
                </div>
                <div class="services__item  services__item--border">
                    <img class="services__icon" src="assets/images/services/wO8EV_KH_Ss.jpg" alt="">

                    <div class="services__title">Фото и видео материалы</div>
                    <div class="services__text">Специально подобраные фото и видео материалы для ваших продуктивных
                        знаятий
                    </div>
                </div>
                <div class="services__item  services__item--border">
                    <img class="services__icon" src="assets/images/services/2IPp9eQaXyI.jpg" alt="">

                    <div class="services__title">Немного истории</div>
                    <div class="services__text">На нашем сайте вы сможете ознакомится с историей возникновения
                        баскетбола, знаменитостях и многое другое.
                    </div>
                </div>
                <div class="services__item">
                    <img class="services__icon" src="assets/images/services/LDrx9oEImD0.jpg" alt="">

                    <div class="services__title">Как выбрать мяч?</div>
                    <div class="services__text">На этот и многие другие вопросы вы сможете найти ответы посетив наш
                        информационный портал.
                    </div>
                </div>
                <div class="services__item">
                    <img class="services__icon" src="assets/images/services/MmiBwGajRQs.jpg" alt="">

                    <div class="services__title">Правила</div>
                    <div class="services__text">Мы расскажем вам о всех действующих правилах баскетбола.</div>
                </div>
                <div class="services__item">
                    <img class="services__icon" src="assets/images/services/UxHZBOtvtrg.jpg" alt="">

                    <div class="services__title">Звёздные советы</div>
                    <div class="services__text">Наш портал собрал в себе всю доступную информацию от легенд NBA. Заходи,
                        читай и тренеруйся как профи
                    </div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>

    <!-- Wedo -->
    <section class="section">
        <div class="container">

            <div class="section__header">
                <h2 class="section__title">Статьи</h2>
                <h3 class="section__suptitle">Ознакомьтесь</h3>
                <div class="section__text">
                    <p>Предлагаем вашему вниманию пару статей с нашего сайта</p>
                </div>
            </div>

            <div class="wedo">
                <div class="wedo__item">
                    <img class="wedo__img" src="assets/images/streetball.jpg" alt="">
                </div>

                <div class="wedo__item">

                    <div class="accordion">
                        <div class="accordion__item" data-collapse="#wedo_1">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="assets/images/services/photography.png" alt="">
                                <div class="accordion__title"><?=$post->name?></div>
                            </div>
                            <div class="accordion__content" id="wedo_1">
                                <p>
                                    <?=$post->description ?>
                                </p>

                            </div>
                        </div>
                        <div class="accordion__item active" data-collapse="#wedo_2">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="assets/images/services/creativity.png" alt="">
                                <div class="accordion__title"><?=$post2->name?></div>
                            </div>
                            <div class="accordion__content" id="wedo_2">
                                <p><?=$post2->description?></p>

                            </div>
                        </div>
                        <div class="accordion__item" data-collapse="#wedo_3">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="assets/images/services/webdesign.png" alt="">
                                <div class="accordion__title"><?=$post3->name?></div>
                            </div>
                            <div class="accordion__content" id="wedo_3">
                                <p><?=$post3->description?>.</p>
                            </div>
                        </div>
                    </div><!-- /.accordion -->

                </div><!-- /.wedo__item -->
            </div><!-- /.wedo -->

        </div>
    </section>
    <!-- Team -->
    <section class="section">
        <div class="container">

            <div class="section__header">
                <h2 class="section__title">Лидирующие позиции</h2>
                <h3 class="section__suptitle"><?=$post4->name?></h3>
                <div class="section__text">
                    <p><?=$post4->description?>.</p>
                    <p><?=$post5->description?></p>
                    <p><?=$post6->description?></p>
                </div>
            </div>

            <div class="card">
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="assets/images/team/Leborn.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <div class="social">
                                <a class="social__item" href="https://www.facebook.com/LeBron" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="social__item" href="https://twitter.com/kingjames" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="social__item" href="https://www.instagram.com/kingjames/?hl=ru"
                                   target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card__info">
                        <div class="card__name">Леброн Джеймс</div>
                        <div class="card__prof">Форвард, 33 года, «Лос-Анджелес Лейкерс»</div>
                    </div>
                </div><!-- /.card__item -->

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="assets/images/team/durant.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <div class="social">
                                <a class="social__item" href="https://twitter.com/KDTrey5" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="social__item" href="https://www.instagram.com/trey5/?hl=ru" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card__info">
                        <div class="card__name">Кэвин Дюрант</div>
                        <div class="card__prof">Форвард, 29 лет, «Голден Стэйт Уорриорз»</div>
                    </div>
                </div><!-- /.card__item -->

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="assets/images/team/stefan.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <div class="social">
                                <a class="social__item" href="https://twitter.com/stephencurry30" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="social__item" href="https://www.instagram.com/stephencurry30/"
                                   target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card__info">
                        <div class="card__name">Стефан Карри</div>
                        <div class="card__prof">Защитник, 30 лет, «Голден Стэйт Уорриорз»</div>
                    </div>
                </div><!-- /.card__item -->

            </div><!-- /.card -->

        </div><!-- /.container -->
    </section>
    <!-- Reviews 1 -->
    <div class="section  section--gray">
        <div class="container">

            <div class="reviews">
                <div data-slider>
                    <div>
                        <div class="reviews__item">
                            <img class="reviews__photo" src="/assets/images/clients/devis.png" alt="">
                            <div class="reviews__text">Баскетбольная площадка — это то место, где я могу забыть о всех
                                своих
                                проблемах.
                            </div>
                            <div class="reviews__author">Бэрон Девис</div>
                        </div>
                    </div>

                    <div>
                        <div class="reviews__item">
                            <img class="reviews__photo" src="/assets/images/clients/lebron.png" alt="">
                            <div class="reviews__text">“Нет никакого смысла приходить в НБА, если вы не верите, что можете
                                             выиграть здесь всех.”
                            </div>
                            <div class="reviews__author">Леброн Джеймс</div>
                        </div>
                    </div>
                    <div>
                        <div class="reviews__item">
                            <img class="reviews__photo" src="/assets/images/clients/Jordan.png" alt="">
                            <div class="reviews__text">“Игра – моя жена. Она требует лояльности и ответственности. Она дает-->
                                мне ощущение покоя и мира.”
                            </div>
                            <div class="reviews__author">Майкал джордан</div>
                        </div>
                    </div>
                    <div>
                        <div class="reviews__item">
                            <img class="reviews__photo" src="/assets/images/clients/Kobi.png" alt="">
                            <div class="reviews__text">“Я сделаю все, для того, чтобы выиграть, будь то сидеть на скамейке и-->
                                махать полотенцем, раздавать бутылки с водой, или забрасывать решающий мяч в корзину..”
                            </div>
                            <div class="reviews__author">Коби Брайнт</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php' ?>
