<?php
include($_SERVER['DOCUMENT_ROOT'] . '/requests/contacts_request.php');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/logo.css">
    <link rel="stylesheet" href="./styles/mobile.css">
    <title>Главная</title>
</head>

<body id="top">
    <div class="header__menu-mobile">
        <ul>
            <li class="header__menu-item header__menu-item--active">Главная</li>
            <li class="header__menu-item drop-down-container">
                Наши услуги
                <span class="menu-item__arrow">&#9660;</span>
                <ul class="drop-down-block">
                    <li class="drop-down-block__item"><a href="./pages/service.php?service_name=instalation">Монтаж
                            сплит-ситем</a></li>
                    <li class="drop-down-block__item"><a href="./pages/service.php?service_name=laying">Закладка
                            коммуникаций</a></li>
                    <li class="drop-down-block__item"><a href="./pages/service.php?service_name=cleaning">Чистка
                            и
                            обслуживание кондиционеров</a></li>
                    <li class="drop-down-block__item"><a href="./pages/service.php?service_name=repair">Ремонт
                            сплит-систем</a></li>
                </ul>
            </li>
            <li class="header__menu-item local-menu"><a href="#goods">Продукция</a></li>
            <li class="header__menu-item local-menu"><a href="#about">О нас</a></li>
            <li class="header__menu-item"><a href="./pages/price.php">Цены</a></li>
            <li class="header__menu-item local-menu"><a href="#contact">Контакты</a></li>
        </ul>
        <div class="info-footer__contact contact">
            <div class="contact__item">
                <div class="contact__picture img-phone section__img-phone"></div>
                <div class="contact__numbers section__numbers">
                    <a href="tel:<?= $tel1 ?>"><?= $tel1 ?></a>
                    <a href="tel:<?= $tel2 ?>"><?= $tel2 ?></a>
                </div>
            </div>
            <div class="contact__item">
                <div class="contact__picture img-email section__img-email"></div>
                <div class="contact__email section__email">
                    <a href="email:<?= $mail ?>"><?= $mail ?></a>
                </div>
            </div>
        </div>
        <button class="btn btn-orange info__btn btn__popup btn__popup--3">КОНСУЛЬТАЦИЯ</button>
    </div>

    <!-- Header который выплывает при прокрутке  НАЧАЛО -->
    <div class="fixed-header">
        <div class="wrap wrap-flex">
            <div class="header__logo logo">

                <div class="el8"></div>
                <div class="el1"></div>
                <div class="el2"></div>
                <div class="el3"></div>
                <div class="el4"></div>
                <div class="el5"></div>
                <div class="el6"></div>
                <div class="el7"></div>
                <div class="el9"></div>

            </div>
            <div class="header__menu">
                <ul>
                    <li class="header__menu-item header__menu-item--active">Главная</li>
                    <li class="header__menu-item drop-down-container">
                        Наши услуги
                        <span class="menu-item__arrow">&#9660;</span>
                        <ul class="drop-down-block">
                            <li class="drop-down-block__item"><a href="./pages/service.php?service_name=instalation">Монтаж
                                    сплит-ситем</a></li>
                            <li class="drop-down-block__item"><a href="./pages/service.php?service_name=laying">Закладка
                                    коммуникаций</a></li>
                            <li class="drop-down-block__item"><a href="./pages/service.php?service_name=cleaning">Чистка
                                    и
                                    обслуживание кондиционеров</a></li>
                            <li class="drop-down-block__item"><a href="./pages/service.php?service_name=repair">Ремонт
                                    сплит-систем</a></li>
                        </ul>
                    </li>
                    <li class="header__menu-item local-menu"><a href="#goods">Продукция</a></li>
                    <li class="header__menu-item local-menu"><a href="#about">О нас</a></li>
                    <li class="header__menu-item"><a href="./pages/price.php">Цены</a></li>
                    <li class="header__menu-item local-menu"><a href="#contact">Контакты</a></li>
                </ul>
            </div>
            <div class="header__menu-button">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <!-- Header который выплывает при прокрутке  КОНЕЦ -->

    <header>
        <div class="wrap wrap-flex">
            <div class="header__logo logo">

                <div class="el8"></div>
                <div class="el1"></div>
                <div class="el2"></div>
                <div class="el3"></div>
                <div class="el4"></div>
                <div class="el5"></div>
                <div class="el6"></div>
                <div class="el7"></div>
                <div class="el9"></div>

            </div>
            <div class="header__menu">
                <ul>
                    <li class="header__menu-item header__menu-item--active">Главная</li>
                    <li class="header__menu-item drop-down-container">
                        Наши услуги
                        <span class="menu-item__arrow">&#9660;</span>
                        <ul class="drop-down-block">
                            <li class="drop-down-block__item"><a href="./pages/service.php?service_name=instalation">Монтаж
                                    сплит-ситем</a></li>
                            <li class="drop-down-block__item"><a href="./pages/service.php?service_name=laying">Закладка
                                    коммуникаций</a></li>
                            <li class="drop-down-block__item"><a href="./pages/service.php?service_name=cleaning">Чистка
                                    и
                                    обслуживание кондиционеров</a></li>
                            <li class="drop-down-block__item"><a href="./pages/service.php?service_name=repair">Ремонт
                                    сплит-систем</a></li>
                        </ul>
                    </li>
                    <li class="header__menu-item local-menu"><a href="#goods">Продукция</a></li>
                    <li class="header__menu-item local-menu"><a href="#about">О нас</a></li>
                    <li class="header__menu-item"><a href="./pages/price.php">Цены</a></li>
                    <li class="header__menu-item local-menu"><a href="#contact">Контакты</a></li>
                </ul>
            </div>
            <div class="header__menu-button">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </header>

    <div class="info">
        <div class="cover"></div>
        <div class="wrap wrap-flex-column">
            <h1 class="info__head">Монтаж Ремонт Обслуживание Продажа <br /><span>СПЛИТ-СИСТЕМ</span></h1>
            <div class="btns">
                <button class="btn info__btn info__btn--blue btn__popup
                        btn__popup--1">РАСЧИТАТЬ
                    СТОИМОСТЬ</button>
                <button class="btn btn-green info__btn btn__popup
                        btn__popup--2">ВЫЗВАТЬ СПЕЦИАЛИСТА</button>
                <button class="btn btn-orange info__btn btn__popup
                        btn__popup--3">КОНСУЛЬТАЦИЯ</button>
            </div>
            <div class="info__footer">
                <div class="info-footer__social social">
                    <?php foreach ($social_nets as $val) : ?>
                        <?php if ($val['active'] == 1) : ?>
                            <a href="<?= $val['link'] ?>" class="social__icon" style="background:
                            url(./images/icon/<?= $val['name'] ?>.svg) no-repeat center center /
                            contain"></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="info-footer__contact contact">
                    <div class="contact__item">
                        <div class="contact__picture img-phone"></div>
                        <div class="contact__numbers">
                            <a href="tel:<?= $tel1 ?>"><?= $tel1 ?></a>
                            <a href="tel:<?= $tel2 ?>"><?= $tel2 ?></a>
                        </div>
                    </div>
                    <div class="contact__item">
                        <div class="contact__picture img-email"></div>
                        <div class="contact__email">
                            <a href="email:<?= $mail ?>"><?= $mail ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-type1 services" id="services">
        <h2>Наши услуги</h2>
        <div class="flex-container">
            <div class="services__card flex-el">
                <div class="services__picture" style="background:
                        url(./images/services/instalation.jpg) no-repeat center
                        center / cover;"></div>
                <div class="services__title">Монтаж кондиционеров</div>
                <a href="./pages/service.php?service_name=instalation" class="btn btn-blue card__btn">Подробнее ></a>
            </div>
            <div class="services__card flex-el">
                <div class="services__picture" style="background:
                        url(./images/services/repair.jpg) no-repeat center
                        center / cover;"></div>
                <div class="services__title">Ремонт кондиционеров</div>
                <a href="./pages/service.php?service_name=laying" class="btn
                        btn-blue card__btn">Подробнее ></a>
            </div>
            <div class="services__card flex-el">
                <div class="services__picture" style="background:
                        url(./images/services/cleaning.jpg) no-repeat center
                        center / cover;"></div>
                <div class="services__title">Обслуживание и чистка</div>
                <a href="./pages/service.php?service_name=cleaning" class="btn btn-blue card__btn">Подробнее ></a>
            </div>
            <div class="services__card flex-el">
                <div class="services__picture" style="background:
                        url(./images/services/laying.jpg) no-repeat center
                        center / cover;"></div>
                <div class="services__title">Закладка коммуникаций</div>
                <a href="./pages/service.php?service_name=repair" class="btn
                        btn-blue card__btn">Подробнее ></a>
            </div>
        </div>
    </div>

    <div class="section section-type2 goods" id="goods">
        <h2>Продукция</h2>
        <div class="goods__flex-container">
            <div class="goods__card">
                <div class="goods__picture" style="background:
                        url(./images/goods/1.jpg) no-repeat center center /
                        contain;"></div>
                <div class="goods__title">Системы Fujitsu</div>
                <div class="goods__price">от <span>42000</span> ₽</div>
                <a href="./pages/product.php?product_id=14" class="btn
                        btn-orange card__btn">Подробнее</a>
            </div>
            <div class="goods__card">
                <div class="goods__picture" style="background:
                        url(./images/goods/lessar.jpg) no-repeat center center /
                        contain;"></div>
                <div class="goods__title">Системы Lessar</div>
                <div class="goods__price">от <span>36000</span> ₽</div>
                <a href="./pages/product.php?product_id=14" class="btn
                        btn-orange card__btn">Подробнее</a>
            </div>
            <div class="goods__card">
                <div class="goods__picture" style="background:
                        url(./images/goods/jax.jpg) no-repeat center center /
                        contain;"></div>
                <div class="goods__title">Системы Jax</div>
                <div class="goods__price">от <span>28000</span> ₽</div>
                <a href="./pages/product.php?product_id=14" class="btn
                        btn-orange card__btn">Подробнее</a>
            </div>
            <div class="goods__card">
                <div class="goods__picture" style="background:
                        url(./images/goods/tosot.jpg) no-repeat center center /
                        contain;"></div>
                <div class="goods__title">Системы Tosot</div>
                <div class="goods__price">от <span>20000</span> ₽</div>
                <a href="./pages/product.php?product_id=14" class="btn
                        btn-orange card__btn">Подробнее</a>
            </div>
            <div class="goods__card">
                <div class="goods__picture" style="background:
                        url(./images/goods/haier.jpg) no-repeat center center /
                        contain;"></div>
                <div class="goods__title">Системы Haier</div>
                <div class="goods__price">от <span>15000</span> ₽</div>
                <a href="./pages/product.php?product_id=14" class="btn
                        btn-orange card__btn">Подробнее</a>
            </div>
        </div>
    </div>

    <div class="section section-type1 about" id="about">
        <h2>О компании "Горный Ветер"</h2>
        <div class="wrap">
            <p class="section__text">
                Дом - это то место, где каждый должен чувствовать себя
                уютно, в котором все счастливы и довольны.
                Конечно же для достижения такого эффекта все должно быть
                идеально, а в первую очередь-комфортный климат,
                кому-то хочется потеплее, кому-то холоднее, но точно у всех
                есть желание контролировать эту самую «погоду».
                В Краснодаре не бывает проблем с теплом, а вот с прохладным
                и свежим воздухом все гораздо сложнее.
                Именно поэтому для решения этой задачи мы предлагаем вам
                нашу компанию «Горный ветер».
                «Горный ветер» - это организация, предоставляющая целый
                спектр услуг: продажа, монтаж и обслуживание кондиционеров.
                Наше главное преимущество состоит в том, что мы ставим на
                первое место качество и структурированность работы.
                Более того, наша фирма дает вам гарантию на выполненные нами
                услуги сроком в один год.
                Мы предлагаем продукцию проверенную временем, которую
                закупаем исключительно у зарекомендовавших себя
                производителей.
            </p>
            <p class="section__text">С уверенностью можем сказать, что
                выбрав «Горный ветер», вы не пожалеете!</p>
        </div>
        <h3>Схема работы:</h3>
        <div class="about__flex-container scheme">
            <div class="about__card">
                <div class="about__picture" style="background:
                        url(./images/scheme/request.svg) no-repeat center center
                        / contain;"></div>
                <div class="about__title">Онлайн заявка Звонок</div>
            </div>
            <div class="about__card">
                <div class="about__picture" style="background:
                        url(./images/scheme/visit.svg) no-repeat center center /
                        contain;"></div>
                <div class="about__title">Выезд специалиста</div>
            </div>
            <div class="about__card">
                <div class="about__picture" style="background:
                        url(./images/scheme/working.svg) no-repeat center center
                        / contain;"></div>
                <div class="about__title">Проведение работ</div>
            </div>
            <div class="about__card">
                <div class="about__picture" style="background:
                        url(./images/scheme/show.png) no-repeat center center /
                        contain;"></div>
                <div class="about__title">Сдача работ Оплата</div>
            </div>
        </div>
        <div class="about__flex-container">
            <button class="btn btn-blue about__btn btn__popup
                    btn__popup--1">Оставить заявку</button>
            <button class="btn btn-green about__btn btn__popup
                    btn__popup--3">Заказать обратный
                звонок</button>
        </div>
    </div>

    <div class="section section-type2 offer" id="offer">
        <h2>Мы предлагаем</h2>
        <div class="flex-container">
            <div class="offer__card flex-el">
                <div class="offer__picture" style="background-image:
                        url(./images/icon/experience.png);"></div>
                <div class="offer__description">
                    <h4>Опытные специалисты</h4>
                    <p class="offer__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="offer__card flex-el">
                <div class="offer__picture" style="background-image:
                        url(./images/icon/speed.png);"></div>
                <div class="offer__description">
                    <h4>Оперативность</h4>
                    <p class="offer__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="offer__card flex-el">
                <div class="offer__picture" style="background-image:
                        url(./images/icon/guarantee.png);"></div>
                <div class="offer__description">
                    <h4>Гарантия качества</h4>
                    <p class="offer__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="offer__card flex-el">
                <div class="offer__picture" style="background-image:
                        url(./images/icon/repair.png);"></div>
                <div class="offer__description">
                    <h4>Ремонт и обслуживание</h4>
                    <p class="offer__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
        <h3>Работаем с любыми брендами:</h3>
        <div class="offer__brands">
            <div class="offer__brand" style="background-image:
                    url(./images/brands/lg.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/haier.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/fujitsu.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/jax.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/ch.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/toshiba.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/dantex.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/panasonic.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/lessar.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/gree.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/hitachi.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/samsung.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(./images/brands/ровен.png);"></div>
        </div>
        <form class="feetback__flex-container">
            <input class="feetback__input btn" type="tel" maxlength="50" id="online_phone_6" name="phone" required="required" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="+7(___)___-__-__" />
            <button class="btn btn-orange feetback__btn">Проконсультироваться</button>
        </form>
        <!-- <div class="feetback__flex-container">
                <input class="feetback__input btn" type="tel" maxlength="50"
                    id="online_phone" name="phone" required="required"
                    pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                    placeholder="+7(___)___-__-__" />
                <button class="btn btn-orange feetback__btn">Проконсультироваться</button>
            </div> -->
    </div>

    <div class="section section-type1 reviews" id="reviews">
        <h2>Отзывы</h2>
        <div class="reviews__item">
            <div class="reviews__picture"></div>
            <div class="reviews__description">
                <h4 class="reviews__name">Григорий</h4>
                <div class="reviews__date">25.03.2021</div>
                <div class="reviews__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </div>
        <div class="reviews__item">
            <div class="reviews__picture"></div>
            <div class="reviews__description">
                <h4 class="reviews__name">Оксана</h4>
                <div class="reviews__date">25.03.2021</div>
                <div class="reviews__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                </div>
            </div>
        </div>
        <div class="reviews__item">
            <div class="reviews__picture" style="background:
                    url(./images/reviews/XHN2sNBGFxc.jpg) no-repeat center
                    center / cover;"></div>
            <div class="reviews__description">
                <h4 class="reviews__name">Александр</h4>
                <div class="reviews__date">25.03.2021</div>
                <div class="reviews__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
        <div class="wrap">
            <form class="reviews__form form" action="#" method="POST">
                <h4 class="form__head">Оставить отзыв</h4>
                <div class="form__flex-container">
                    <textarea class="form__flex-el" name="review" placeholder="Напишите Ваш отзыв *"></textarea>
                    <div class="form__flex-el form__inputs">
                        <input class="btn form__name" type="text" name="name" placeholder="Ваше имя *" />
                        <input class="btn btn-green form__btn" id="file" type="file" name="file" placeholder="Выбрать фото" />
                        <label for="file">
                            <div class="btn btn-green form__btn"> Выбрать
                                фото </div>
                        </label>
                        <button class="btn btn-blue form__btn">Оставить
                            отзыв</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="section section-type2" id="contact">
        <div class="wrap">
            <div class="contact__item">
                <div class="contact__picture img-phone section__img-phone"></div>
                <div class="contact__numbers section__numbers">
                    <a href="tel:<?= $tel1 ?>"><?= $tel1 ?></a>
                    <a href="tel:<?= $tel2 ?>"><?= $tel2 ?></a>
                </div>
            </div>
            <div class="contact__item">
                <div class="contact__picture img-email section__img-email"></div>
                <div class="contact__email section__email">
                    <a href="email:<?= $mail ?>"><?= $mail ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-type1">
        <form class="feetback__flex-container">
            <input class="feetback__input btn" type="tel" maxlength="50" id="online_phone_7" name="phone" required="required" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="+7(___)___-__-__" />
            <button class="btn btn-orange feetback__btn">Проконсультироваться</button>
        </form>
        <!-- <div class="feetback__flex-container">
                <input class="feetback__input btn" type="tel" maxlength="50"
                    id="online_phone_2" name="phone" required="required"
                    pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                    placeholder="+7(___)___-__-__" />
                <button class="btn btn-orange feetback__btn">Проконсультироваться</button>
            </div> -->
    </div>

    <footer class="footer">
        <div class="footer__top">
            <div class="footer__flex-container">
                <div class="footer__menu">
                    <ul class="footer__menu-block">
                        <li class="footer__menu-item local-menu"><a href="#top">Главная</a></li>
                        <li class="footer__menu-item local-menu"><a href="#goods">Продукция</a></li>
                        <li class="footer__menu-item local-menu"><a href="#about">О нас</a></li>
                        <li class="footer__menu-item"><a href="./pages/price.php">Цены</a></li>
                        <li class="footer__menu-item local-menu"><a href="#contact">Контакты</a></li>
                    </ul>
                    <ul class="footer__menu-block">
                        <li class="footer__menu-item"><a href="./pages/service.php">Монтаж
                                сплит-ситем</a></li>
                        <li class="footer__menu-item"><a href="./pages/service.php">Закладка
                                коммуникаций</a></li>
                        <li class="footer__menu-item"><a href="./pages/service.php">Чистка и
                                обслуживание кондиционеров</a></li>
                        <li class="footer__menu-item"><a href="./pages/repair.php">Ремонт
                                сплит-систем</a></li>
                    </ul>
                </div>
                <div class="footer__logo">
                    <div class="logo">
                        <div class="el8"></div>
                        <div class="el1"></div>
                        <div class="el2"></div>
                        <div class="el3"></div>
                        <div class="el4"></div>
                        <div class="el5"></div>
                        <div class="el6"></div>
                        <div class="el7"></div>
                        <div class="el9"></div>
                    </div>
                    <div class="social">
                        <?php foreach ($social_nets as $val) : ?>
                            <?php if ($val['active'] == 1) : ?>
                                <a href="<?= $val['link'] ?>" class="social__icon" style="background:
                            url(./images/icon/<?= $val['name'] ?>.svg) no-repeat center center /
                            contain"></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="info-footer__contact contact">
                    <div class="contact__item">
                        <div class="contact__picture img-phone"></div>
                        <div class="contact__numbers">
                            <a href="tel:<?= $tel1 ?>"><?= $tel1 ?></a>
                            <a href="tel:<?= $tel2 ?>"><?= $tel2 ?></a>
                        </div>
                    </div>
                    <div class="contact__item">
                        <div class="contact__picture img-email"></div>
                        <div class="contact__email">
                            <a href="email:<?= $mail ?>"><?= $mail ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <p>© 2018 - 2021 "gornveter.ru". Все права защищены</p>
            <p>Сайт разработан веб-студией <a href="https://vk.com/makarchik89">Makar&M</a> </p>
        </div>
    </footer>



    <!-- PopUp -->
    <div class="popup">
        <div class="popup__type1 popup__window">
            <h4>
                Оставьте заявку <br />
                Мы перезвоним Вам и сориентируем по стоимости
                <div class="crose"></div>
            </h4>
            <form action="#" method="POST">
                <div class="form__item">
                    <h5>Выберите вид работ:</h5>
                    <select name="work-type" class="btn form__input">
                        <option>Монтаж сплит-систем</option>
                        <option>Закладка коммуникаций</option>
                        <option>Чистка и обслуживание кондиционеров</option>
                        <option>Ремонт кондиционеров</option>
                    </select>
                </div>
                <div class="form__item">
                    <h5>Адрес проведения работ:</h5>
                    <input type="text" class="btn form__input" name="addres" />
                </div>
                <div class="form__item">
                    <h5>Ваше имя:</h5>
                    <input type="text" class="btn form__input" name="name" />
                </div>
                <div class="form__item">
                    <h5>Ваш телефон: *</h5>
                    <input type="tel" class="btn form__input" maxlength="50" id="online_phone_3" name="phone" required="required" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="+7(___)___-__-__" />
                </div>
                <div class="form__item">
                    <h5>Комментарий:</h5>
                    <textarea name="comment" class="btn form__input"></textarea>
                </div>
                <div class="form__item">
                    <button class="btn btn-green">Отправить заявку</button>
                </div>
                Нажимая на кнопку, вы даете согласие на обработку <a href="./documents/political.pdf" target="blank">персональных
                    данных</a>
                <h5 class="">Или позвоните нам</h5>
                <div class="contact__numbers">
                    <a href="tel:<?= $tel1 ?>"><?= $tel1 ?></a>
                    <a href="tel:<?= $tel2 ?>"><?= $tel2 ?></a>
                </div>
            </form>
        </div>

        <div class="popup__type2 popup__window">
            <h4>
                Оставьте заявку <br />
                на вызов специалиста
                <div class="crose"></div>
            </h4>
            <form action="#" method="POST">
                <div class="form__item">
                    <h5>Выберите вид работ:</h5>
                    <select name="work-type" class="btn form__input">
                        <option>Монтаж сплит-систем</option>
                        <option>Закладка коммуникаций</option>
                        <option>Чистка и обслуживание кондиционеров</option>
                        <option>Ремонт кондиционеров</option>
                    </select>
                </div>
                <div class="form__item">
                    <h5>Адрес проведения работ:</h5>
                    <input type="text" class="btn form__input" name="addres" />
                </div>
                <div class="form__item">
                    <h5>Желаемая дата приезда специалиста</h5>
                    <input type="date" class="btn form__input" name="addres" />
                </div>
                <div class="form__item">
                    <h5>Ваше имя:</h5>
                    <input type="text" class="btn form__input" name="name" />
                </div>
                <div class="form__item">
                    <h5>Ваш телефон: *</h5>
                    <input type="tel" class="btn form__input" maxlength="50" id="online_phone_4" name="phone" required="required" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="+7(___)___-__-__" />
                </div>
                <div class="form__item">
                    <h5>Комментарий:</h5>
                    <textarea name="comment" class="btn form__input"></textarea>
                </div>
                <div class="form__item">
                    <button class="btn btn-green">Отправить заявку</button>
                </div>
                Нажимая на кнопку, вы даете согласие на обработку <a href="./documents/political.pdf" target="blank">персональных
                    данных</a>
                <h5 class="">Или позвоните нам</h5>
                <div class="contact__numbers">
                    <a href="tel:<?= $tel1 ?>"><?= $tel1 ?></a>
                    <a href="tel:<?= $tel2 ?>"><?= $tel2 ?></a>
                </div>
            </form>
        </div>

        <div class="popup__type3 popup__window">
            <h4>
                Оставьте заявку <br />
                на консультацию
                <div class="crose"></div>
            </h4>
            <form action="#" method="POST">
                <div class="form__item">
                    <h5>Ваше имя:</h5>
                    <input type="text" class="btn form__input" name="name" />
                </div>
                <div class="form__item">
                    <h5>Ваш телефон: *</h5>
                    <input type="tel" class="btn form__input" maxlength="50" id="online_phone_5" name="phone" required="required" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="+7(___)___-__-__" />
                </div>
                <div class="form__item">
                    <h5>Комментарий / вопрос:</h5>
                    <textarea name="comment" class="btn form__input"></textarea>
                </div>
                <div class="form__item">
                    <button class="btn btn-green">Отправить заявку</button>
                </div>
                Нажимая на кнопку, вы даете согласие на обработку <a href="./documents/political.pdf" target="blank">персональных
                    данных</a>
                <h5 class="">Или позвоните нам</h5>
                <div class="contact__numbers">
                    <a href="tel:<?= $tel1 ?>"><?= $tel1 ?></a>
                    <a href="tel:<?= $tel2 ?>"><?= $tel2 ?></a>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        function setCursorPosition(pos, e) {
            if (e.setSelectionRange) e.setSelectionRange(pos, pos);
            else if (e.createTextRange) {
                var range = e.createTextRange();
                range.collapse(true);
                range.moveEnd("character", pos);
                range.moveStart("character", pos);
                range.select()
            }
        }

        function mask(e) {
            var matrix = this.placeholder,
                i = 0,
                def = matrix.replace(/\D/g, ""),
                val = this.value.replace(/\D/g, "");
            def.length >= val.length && (val = def);
            matrix = matrix.replace(/[_\d]/g, function(a) {
                return val.charAt(i++) || "_"
            });
            this.value = matrix;
            i = matrix.lastIndexOf(val.substr(-1));
            i < matrix.length && matrix != this.placeholder ? i++ : i = matrix.indexOf("_");
            setCursorPosition(i, this)
        }
        window.addEventListener("DOMContentLoaded", function() {
            var input = document.querySelector("#online_phone");
            input.addEventListener("input", mask, false);
            setCursorPosition(3, input);

            var input2 = document.querySelector("#online_phone_2");
            input2.addEventListener("input", mask, false);
            setCursorPosition(3, input2);

            var input3 = document.querySelector("#online_phone_3");
            input3.addEventListener("input", mask, false);
            setCursorPosition(3, input3);

            var input4 = document.querySelector("#online_phone_4");
            input4.addEventListener("input", mask, false);
            setCursorPosition(3, input4);

            var input5 = document.querySelector("#online_phone_5");
            input5.addEventListener("input", mask, false);
            setCursorPosition(3, input5);

            var input6 = document.querySelector("#online_phone_6");
            input5.addEventListener("input", mask, false);
            setCursorPosition(3, input6);

            var input7 = document.querySelector("#online_phone_7");
            input5.addEventListener("input", mask, false);
            setCursorPosition(3, input7);
        });
    </script>
    <script src="./js/js.js"></script>
    <script src="./js/closePopup.js"></script>
    <script src="./js/validation.js"></script>
</body>

</html>