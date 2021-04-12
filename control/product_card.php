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
                <h1>Заполнение карточки продукта</h1>
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
<br />• Вывод дренажа в 2 стороны         
                </textarea>

                <br />
                <h2>Характеристики</h2>
            </div>
        </div>
    </div>
</body>

</html>