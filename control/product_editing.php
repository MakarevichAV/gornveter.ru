<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/product_card.css">
    <title>Add Product Info</title>
</head>

<body>
    <div class="wrapper">
        <div class="main">
            <div class="site">
                <div class="block">
                    <div class="btn info">
                        <div class="ico info"></div>
                    </div>
                    <div class="btn help">
                        <div class="ico help"></div>
                    </div>
                    <div class="btn back" id="dop_btn_back" title="Вернуться в меню">
                        <div class="ico back"></div>
                    </div>
                </div>
            </div>
            <div class="nav">
                <ul class="menu">
                    <li><a href="./product_adding.php">Новая модель</a></li>
                    <li>Изменить модель</li>
                </ul>
                <h1>Заполнение карточки продукта</h1>
                <select name="system_name">
                    <option value="{system_name}">{system_name}</option>
                    <option value="{system_name}">{system_name}</option>
                    <option value="{system_name}">{system_name}</option>
                    <option value="{system_name}">{system_name}</option>
                </select>
                <select name="system_name">
                    <option value="{system_name}">{system_name}</option>
                    <option value="{system_name}">{system_name}</option>
                    <option value="{system_name}">{system_name}</option>
                    <option value="{system_name}">{system_name}</option>
                </select>
                <input type="text" name="model" placeholder="Введите название модели" />
                <input type="number" name="price" placeholder="Введите цену" />
                <br />
                <h2>Описание модели</h2>
                <p>Для переноса строки введите &lt;br /&gt; </p>
                <textarea name="description" placeholder="Введите описание модели">Пример:
С новой сплит-системой Perfecto Вы сможете не только охлаждать помещение летом, но и поддерживать необходимую температуру в загородном доме без центрального отопления зимой. Благодаря функции «Защита дома от замерзания» кондиционер будет поддерживать температуру воздуха +8°С, не позволяя заморозить помещение и потребляя минимум электроэнергии. Безупречное качество и надежность работы кондиционера подтверждаются расширенной гарантией 5 лет.
<br />
<br />• Класс энергоэффективности "A"
<br />• 4 режима работы: охлаждение / обогрев / вентиляция / осушение
<br />• Режимы "Auto", "Sleep" и "Turbo"
<br />• Гарантия 5 лет
<br />• Защита дома от замерзания: функция обогрева +8°C.
<br />• Защита от перепадов напряжения 175~264 В.
<br />• Автоматическое качание горизонтальных жалюзи
<br />• Самодиагностика
<br />• Режим оттаивания "Defrost"
<br />• Режим предварительного нагрева "Hot start"
<br />• Авторестарт
<br />• Самодиагностика
<br />• Таймер 24 часа
<br />• Вывод дренажа в 2 стороны</textarea>

                <br />
                <h2>Характеристики</h2>
                <div class="parametr">
                    <p>Производительность (охлаждение/обогрев)</p>
                    <input type="text" name="param_1">
                </div>
                <div class="parametr">
                    <p>Класс энергоэффективности</p>
                    <input type="text" name="param_2">
                </div>
                <div class="parametr">
                    <p>Расход воздуха (внутренний /внешний блок)</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Уровень шума внутреннего блока</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Напряжение питания</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Потребляемая мощность (охлаждение/обогрев)</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Номинальный ток (охлаждение/обогрев)</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Размеры внутреннего блока (Ш×В×Г)</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Размеры внешнего блока (Ш×В×Г)</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Вес нетто/брутто внутреннего блока</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Вес нетто/брутто внешнего блока</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Диаметр труб (жидкость/газ)</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Максимальная длина магистрали</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Максимальный перепад высот</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Хладагент</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Диапазон рабочих температур (охлаждение/обогрев)</p>
                    <input type="text" name="param_3">
                </div>
                <div class="parametr">
                    <p>Марка компрессора</p>
                    <input type="text" name="param_3">
                </div>
            </div>
        </div>
    </div>
</body>

</html>