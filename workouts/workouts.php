<?php include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';?>
<!-- Intro -->
<div class="intro" id="intro">
    <div class="container">
        <div class="intro__inner">
            <h2 class="intro__suptitle">Тренировки</h2>
<!--            <h1 class="intro__title"></h1>-->

        </div>
    </div>
</div><!-- /.intro -->

    <!-- Wedo -->
    <section class="section">
        <div class="container">

            <div class="section__header">
                <h2 class="section__title"></h2>
                <h3 class="section__suptitle"></h3>
                <div class="section__text">
                    <p>В данном разделе мы подробно расскажем вам о эффективных тренировках</p>
                </div>
            </div>

            <div class="wedo">
                <div class="wedo__item">
                    <img class="wedo__img" src="/assets/images/grils.jpg" alt="">
                </div>

                <div class="wedo__item">
                    <div class="accordion">
                        <div class="accordion__item" data-collapse="#wedo_1">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="/assets/images/services/photography.png" alt="">
                                <!--                                --><?php //foreach ($posts as $post)?>
                                <div class="accordion__title"><?= $post->name ?></div>
                            </div>
                            <div class="accordion__content" id="wedo_1">
                                <p>
                                    <?= $post->description ?>
                                </p>


                            </div>
                        </div>

                        <div class="accordion__item " data-collapse="#wedo_2">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="/assets/images/services/creativity.png" alt="">
                                <div class="accordion__title"><?= $post2->name ?></div>
                            </div>
                            <div class="accordion__content" id="wedo_2">
                                <p><?= $post2->description ?></p>

                            </div>
                        </div>

                        <div class="accordion__item" data-collapse="#wedo_3">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="/assets/images/services/webdesign.png" alt="">
                                <div class="accordion__title"><?= $post3->name ?></div>
                            </div>
                            <div class="accordion__content" id="wedo_3"><p><?= $post3->description ?></p>
                            </div>
                        </div>
                        <div class="accordion__item" data-collapse="#wedo_4">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="/assets/images/services/webdesign.png" alt="">
                                <div class="accordion__title"><?= $post4->name ?></div>
                            </div>
                            <div class="accordion__content" id="wedo_3"><p><?= $post4->description ?></p></div>
                        </div>
                        <div class="accordion__item" data-collapse="#wedo_4">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="/assets/images/services/webdesign.png" alt="">
                                <div class="accordion__title"><?= $post5->name ?></div>
                            </div>
                            <div class="accordion__content" id="wedo_3"><p><?= $post5->description ?></p></div>
                        </div>
                        <div class="accordion__item" data-collapse="#wedo_4">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="/assets/images/services/webdesign.png" alt="">
                                <div class="accordion__title"><?= $post6->name ?></div>
                            </div>
                            <div class="accordion__content" id="wedo_3"><p><?= $post6->description ?></p></div>
                        </div>
                        <div class="accordion__item" data-collapse="#wedo_4">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="/assets/images/services/webdesign.png" alt="">
                                <div class="accordion__title"><?= $post7->name ?></div>
                            </div>
                            <div class="accordion__content" id="wedo_3"><p><?= $post7->description ?></p></div>
                        </div>
                    </div><!-- /.accordion -->
                </div><!-- /.accordion -->
            </div><!-- /.wedo__item -->
        </div>
    </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php';

