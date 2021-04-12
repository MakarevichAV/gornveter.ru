<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Вход в админку</title>
</head>
<body>
 
    <div class="popup popup__visible">
        <div class="window wrap ">
            <h4>Вход в административную панель</h4>
            <form action="#" method="POST">
            <input type="hidden" name="type" value="auth">
                <input type="text" name="login" id="login" class="btn" placeholder="login" required>
                <input type="password" name="password" id="password" class="btn" placeholder="Пароль" required>
                <button class="btn btn-green">Войти</button>
            </form>
        </div>
    </div>
    
</body>
</html>