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
    <title>Цены</title>
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
        <h1 class="info__head">Монтаж сплит систем</h1>
    </div>

    <div class="section section-type2 price-item">
        <div class="flex-container">
            <div class="price-item__card flex-el
                    price-item__flex-container">
                <div class="price-item__flex-el">
                    <div class="price-item__image" style="background-image:
                            url(../images/services/instalation.jpg);"></div>
                </div>
                <div class="price-item__description price-item__flex-el">
                    <p class="price-item__description-text">
                        At vero eos et accusamus et iusto odio dignissimos
                        ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti quos dolores et quas
                        molestias excepturi sint occaecati cupiditate non
                        provident, similique sunt in culpa qui officia
                        deserunt mollitia animi, id est laborum et dolorum
                        fuga. Et harum quidem rerum facilis est et expedita
                        distinctio. Nam libero tempore, cum soluta nobis est
                        eligendi optio cumque nihil impedit quo minus id
                        quod maxime placeat facere possimus, omnis voluptas
                        assumenda est, omnis dolor repellendus. Temporibus
                        autem quibusdam et aut officiis debitis aut rerum
                        necessitatibus saepe eveniet ut et voluptates
                        repudiandae sint et molestiae non recusandae. Itaque
                        earum rerum hic tenetur a sapiente delectus, ut aut
                        reiciendis voluptatibus maiores alias consequatur
                        aut perferendis doloribus asperiores repellat.
                    </p>
                    <button class="btn btn-green btn__popup btn__popup--2">Вызвать специалиста</button>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-type1 price-item">
        <h2>Цены на монтаж:</h2>
        <div class="flex-container">
            <div class="price-item__card flex-el
                    price-item__flex-container">
                <div class="price-item__flex-el">
                    <div class="price-item__image" style="background-image:
                            url(../images/services/instalation.jpg);"></div>
                </div>
                <div class="price-item__description price-item__flex-el">
                    <div class="price-item__row price-item__row--title">
                        <span>Вид работ</span> <span>Цена</span>
                    </div>
                    <div class="price-item__row">
                        <span>Монтаж 7-9 модели (20 - 25 м²)</span> <span>4000
                            ₽</span>
                    </div>
                    <div class="price-item__row">
                        <span>Монтаж 10-14 модели (30 - 35 м²)</span> <span>4500
                            ₽</span>
                    </div>
                    <div class="price-item__row">
                        <span>Монтаж 15-20 модели (45 - 50 м²)</span> <span>5000
                            ₽</span>
                    </div>
                    <div class="price-item__row">
                        <span>Монтаж 21-24 модели (60 - 70 м²)</span> <span>6000
                            ₽</span>
                    </div>
                </div>
                <div class="note price-item__flex-el">
                    <b>В указанную стоимость стандартного​ монтажа входит:</b>
                    <br />
                    технологическое отверстие - 1 штука, межблочные ​
                    коммуникации - до 2-х метров, кронштейны для​ монтажа
                    наружного​ блока - 1 комплект.
                </div>
            </div>


        </div>
    </div>

    <div class="section section-type2 price-item">
        <h3 style="margin-top: 0;">Работаем с любыми брендами:</h3>
        <div class="offer__brands">
            <div class="offer__brand" style="background-image:
                    url(../images/brands/lg.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/haier.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/fujitsu.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/jax.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/ch.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/toshiba.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/dantex.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/panasonic.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/lessar.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/gree.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/hitachi.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/samsung.png);"></div>
            <div class="offer__brand" style="background-image:
                    url(../images/brands/ровен.png);"></div>
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
                    <input type="tel" class="btn form__input" maxlength="50" id="online_phone_2" name="phone" required="required" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="+7(___)___-__-__" />
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
                    <input type="tel" class="btn form__input" maxlength="50" id="online_phone_3" name="phone" required="required" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="+7(___)___-__-__" />
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
        });
    </script>

    <script src="../js/js.js"></script>
    <script src="../js/closePopup.js"></script>
</body>

</html>