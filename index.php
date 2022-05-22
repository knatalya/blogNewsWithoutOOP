<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/raleway/raleway.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="/resources/favicon.ico">
    <title>Список новостей</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="header">
                <h1>Новости</h1>
                <p>Только качественные и объективные новости и материалы по всем направлениям жизнедеятельности. У нас самая оперативная информация: темы дня, обзоры, анализ новостей.</p>
            </div>
            <img src="resources/news.svg" alt="Логотип">
        </header>
        <div class="content">
            <a href="#openModal" class="add">
                <img src="resources/add.svg" alt="Добавить новость">
            </a>
            <div class="news">
                <h2>Новость 1</h2>
                <p>20 мая 2022</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et finibus diam. Pellentesque eu tincidunt risus, vel tempus nibh. Sed feugiat nisl in consectetur aliquam. Quisque fermentum sed dui bibendum pharetra. Etiam at pellentesque eros. Aenean posuere dolor a</p>
                <img src="resources/category.svg" alt="Категория">
            </div>
            <div class="news">
                <h2>Новость 1</h2>
                <p>20 мая 2022</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et finibus diam. Pellentesque eu tincidunt risus, vel tempus nibh. Sed feugiat nisl in consectetur aliquam. Quisque fermentum sed dui bibendum pharetra. Etiam at pellentesque eros. Aenean posuere dolor a</p>
                <img src="resources/category.svg" alt="Категория">
            </div>
            <div class="news">
                <h2>Новость 1</h2>
                <p>20 мая 2022</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et finibus diam. Pellentesque eu tincidunt risus, vel tempus nibh. Sed feugiat nisl in consectetur aliquam. Quisque fermentum sed dui bibendum pharetra. Etiam at pellentesque eros. Aenean posuere dolor a</p>
                <img src="resources/category.svg" alt="Категория">
            </div>
            <div class="news">
                <h2>Новость 1</h2>
                <p>20 мая 2022</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et finibus diam. Pellentesque eu tincidunt risus, vel tempus nibh. Sed feugiat nisl in consectetur aliquam. Quisque fermentum sed dui bibendum pharetra. Etiam at pellentesque eros. Aenean posuere dolor a</p>
                <img src="resources/category.svg" alt="Категория">
            </div>
            <div class="news">
                <h2>Новость 1</h2>
                <p>20 мая 2022</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et finibus diam. Pellentesque eu tincidunt risus, vel tempus nibh. Sed feugiat nisl in consectetur aliquam. Quisque fermentum sed dui bibendum pharetra. Etiam at pellentesque eros. Aenean posuere dolor a</p>
                <img src="resources/category.svg" alt="Категория">
            </div>
        </div>
        <div class="pagination">
            <button type="button"><img src="resources/back.svg" alt="Назад"></button>
            <button type="button" class="active">1</button>
            <button type="button">2</button>
            <button type="button">3</button>
            <button type="button">4</button>
            <div>
                <span>...</span>
            </div>
            <button type="button">20</button>
            <button type="button"><img src="resources/forward.svg" alt="Вперед"></button>
        </div>
    </div>
    <div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Добавление новости</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">
                    <p>Заполните все поля</p>
                    <input type="text" placeholder="Заголовок новости" />
                    <textarea name="new" id="new" cols="30" rows="10" placeholder="Новость"></textarea>
                    <div>
                        <a href="" class="save">Сохранить</a>
                        <a href="#close" class="btn-close">Отменить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>