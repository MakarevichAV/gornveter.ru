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
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/logo.css">
    <link rel="stylesheet" href="../styles/mobile.css">
    <link rel="stylesheet" href="../styles/product.css">
    <title>Продукт</title>
</head>

<body id="top">

    <div class="header__menu-mobile">
        <ul>
            <li class="header__menu-item"><a href="../">Главная</a></li>
            <li class="header__menu-item drop-down-container header__menu-item--active">
                Наши услуги
                <span class="menu-item__arrow">&#9660;</span>
                <ul class="drop-down-block">
                    <li class="drop-down-block__item"><a href="../pages/service.php?service_name=instalation">Монтаж
                            сплит-ситем</a></li>
                    <li class="drop-down-block__item"><a href="../pages/service.php?service_name=laying">Закладка
                            коммуникаций</a></li>
                    <li class="drop-down-block__item"><a href="../pages/service.php?service_name=cleaning">Чистка
                            и
                            обслуживание кондиционеров</a></li>
                    <li class="drop-down-block__item"><a href="../pages/service.php?service_name=repair">Ремонт
                            сплит-систем</a></li>
                </ul>
            </li>
            <li class="header__menu-item"><a href="../index.php#goods">Продукция</a></li>
            <li class="header__menu-item"><a href="../index.php#about">О нас</a></li>
            <li class="header__menu-item"><a href="../pages/price.php">Цены</a></li>
            <li class="header__menu-item"><a href="../index.php#contact">Контакты</a></li>
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
                    <li class="header__menu-item"><a href="../">Главная</a></li>
                    <li class="header__menu-item drop-down-container header__menu-item--active">
                        Наши услуги
                        <span class="menu-item__arrow">&#9660;</span>
                        <ul class="drop-down-block">
                            <li class="drop-down-block__item"><a href="../pages/service.php?service_name=instalation">Монтаж
                                    сплит-ситем</a></li>
                            <li class="drop-down-block__item"><a href="../pages/service.php?service_name=laying">Закладка
                                    коммуникаций</a></li>
                            <li class="drop-down-block__item"><a href="../pages/service.php?service_name=cleaning">Чистка
                                    и
                                    обслуживание кондиционеров</a></li>
                            <li class="drop-down-block__item"><a href="../pages/service.php?service_name=repair">Ремонт
                                    сплит-систем</a></li>
                        </ul>
                    </li>
                    <li class="header__menu-item"><a href="../index.php#goods">Продукция</a></li>
                    <li class="header__menu-item"><a href="../index.php#about">О нас</a></li>
                    <li class="header__menu-item"><a href="../pages/price.php">Цены</a></li>
                    <li class="header__menu-item"><a href="../index.php#contact">Контакты</a></li>
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
                    <li class="header__menu-item"><a href="../">Главная</a></li>
                    <li class="header__menu-item drop-down-container header__menu-item--active">
                        Наши услуги
                        <span class="menu-item__arrow">&#9660;</span>
                        <ul class="drop-down-block">
                            <li class="drop-down-block__item"><a href="../pages/service.php?service_name=instalation">Монтаж
                                    сплит-ситем</a></li>
                            <li class="drop-down-block__item"><a href="../pages/service.php?service_name=laying">Закладка
                                    коммуникаций</a></li>
                            <li class="drop-down-block__item"><a href="../pages/service.php?service_name=cleaning">Чистка
                                    и
                                    обслуживание кондиционеров</a></li>
                            <li class="drop-down-block__item"><a href="../pages/service.php?service_name=repair">Ремонт
                                    сплит-систем</a></li>
                        </ul>
                    </li>
                    <li class="header__menu-item"><a href="../index.php#goods">Продукция</a></li>
                    <li class="header__menu-item"><a href="../index.php#about">О нас</a></li>
                    <li class="header__menu-item"><a href="../pages/price.php">Цены</a></li>
                    <li class="header__menu-item"><a href="../index.php#contact">Контакты</a></li>
                </ul>
            </div>
            <div class="header__menu-button">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </header>
    <!-- Повторяющаяся шапка для PHP ---- КОНЕЦ -->


    <div class="title">
        <div class="cover"></div>
        <h1 class="info__head">Системы {system_name} </h1>
    </div>

    <div class="section section-type1">
        <div class="product-card">
            <div class="product-card__picture"></div>
            <div class="product-card__info">
                <h4>Система {system_name}</h4>
                <select name="model" id="product_id" class="btn select">
                    <option value="7">Модель {model_number}</option>
                    <option value="8">Модель {model_number}</option>
                    <option value="9">Модель {model_number}</option>
                    <option value="10">Модель {model_number}</option>
                    <option value="11">Модель {model_number}</option>
                    <option value="12">Модель {model_number}</option>
                </select>
                <p class="price">25 000 ₽</p>
                <button class="btn btn-orange btn__popup btn__popup--3">Проконсультироваться</button>
                <button class="btn btn-blue btn__popup btn__popup--1">Расчитать стоимость</button>
            </div>
        </div>
    </div>
    <div class="section section-type2">
        <div class="product-info">
            <ul class="product-info__nav">
                <li class="product-info__nav-item product-info__nav-item--active" data-info="description">
                    Описание
                </li>
                <li class="product-info__nav-item" data-info="params">
                    Характеристики
                </li>
            </ul>
            <div class="product-info__content">
                <div class="product-info__content-item" id="description">
                    С новой сплит-системой Perfecto Вы сможете не только охлаждать помещение летом,
                    но и поддерживать необходимую температуру в загородном доме без центрального отопления зимой.
                    Благодаря функции «Защита дома от замерзания» кондиционер будет поддерживать температуру воздуха +8°С,
                    не позволяя заморозить помещение и потребляя минимум электроэнергии.
                    Безупречное качество и надежность работы кондиционера подтверждаются расширенной гарантией 5 лет. <br />
                    <br />• Класс энергоэффективности "A"<br />
                    • 4 режима работы: охлаждение / обогрев / вентиляция / осушение<br />
                    • Режимы "Auto", "Sleep" и "Turbo"<br />
                    • Гарантия 5 лет<br />
                    • Защита дома от замерзания: функция обогрева +8°C.<br />
                    • Защита от перепадов напряжения 175~264 В.<br />
                    • Автоматическое качание горизонтальных жалюзи<br />
                    • Самодиагностика<br />
                    • Режим оттаивания "Defrost"<br />
                    • Режим предварительного нагрева "Hot start"<br />
                    • Авторестарт<br />
                    • Самодиагностика<br />
                    • Таймер 24 часа<br />
                    • Вывод дренажа в 2 стороны
                </div>
                <div id="params" class="product-info__content-item unvisible">
                    <div class="params__item">
                        <h4>Основные</h4>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Длинное название параметра и еще текст</span>
                            <span class="parametr__value">Значение не менее длинное</span>
                        </p>
                    </div>
                    <div class="params__item">
                        <h4>Потребительские</h4>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                    </div>
                    <div class="params__item">
                        <h4>Режимы</h4>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                    </div>
                    <div class="params__item">
                        <h4>Функции</h4>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                    </div>
                    <div class="params__item">
                        <h4>Защита и безопасность</h4>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                    </div>
                    <div class="params__item">
                        <h4>Технологии</h4>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                    </div>
                    <div class="params__item">
                        <h4>Монтажные</h4>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                    </div>
                    <div class="params__item">
                        <h4>Комплектность</h4>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                    </div>
                    <div class="params__item">
                        <h4>Управление</h4>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                    </div>
                    <div class="params__item">
                        <h4>Индикация</h4>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                    </div>
                    <div class="params__item">
                        <h4>Дополнительные</h4>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                        <p class="parametr">
                            <span class="parametr__name">Название параметра</span>
                            <span class="parametr__value">Значение</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <form class="feetback__flex-container">
            <input class="feetback__input btn" type="tel" maxlength="50" id="online_phone" name="phone" required="required" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="+7(___)___-__-__" />
            <button class="btn btn-orange feetback__btn">Проконсультироваться</button>
        </form>
    </div>

    <footer class="footer">
        <div class="footer__top">
            <div class="footer__flex-container">
                <div class="footer__menu">
                    <ul class="footer__menu-block">
                        <li class="footer__menu-item"><a href="../">Главная</a></li>
                        <li class="footer__menu-item"><a href="../index.php#goods">Продукция</a></li>
                        <li class="footer__menu-item"><a href="../index.php#about">О нас</a></li>
                        <li class="footer__menu-item"><a href="#top">Цены</a></li>
                        <li class="footer__menu-item"><a href="../index.php#contact">Контакты</a></li>
                    </ul>
                    <ul class="footer__menu-block">
                        <li class="footer__menu-item"><a href="../pages/instalation.php">Монтаж
                                сплит-ситем</a></li>
                        <li class="footer__menu-item"><a href="../pages/laying.php">Закладка
                                коммуникаций</a></li>
                        <li class="footer__menu-item"><a href="../pages/service.php">Чистка и
                                обслуживание кондиционеров</a></li>
                        <li class="footer__menu-item"><a href="../pages/repair.php">Ремонт
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
                                url(../images/icon/<?= $val['name'] ?>.svg) no-repeat center center /
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

    <script src="../js/product.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/closePopup.js"></script>

</body>

</html>