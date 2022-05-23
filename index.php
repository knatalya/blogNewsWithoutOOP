<?php
$db = new PDO('mysql:host=mariadb;dbname=default', 'nat', '');
$db->exec("set names utf8");
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else $page = 1;
if ($page == 1) {
    $kol = 5;
} else {
    $kol = 6;
}
$art = ($page * $kol) - $kol;
$stmt = $db->query("SELECT * FROM news ORDER BY date DESC LIMIT $art,$kol");
$res = $db->query("SELECT COUNT(*) FROM news");
$rows = $res->fetch();
$total = $rows[0] - 5;
$str_page = ceil($total / 6) + 1;
?>
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
            <p>Только качественные и объективные новости и материалы по всем направлениям жизнедеятельности. У нас самая
                оперативная информация: темы дня, обзоры, анализ новостей.</p>
        </div>
        <img src="resources/news.svg" alt="Логотип">
    </header>
    <div class="content">
        <?php
        if ($page == 1) { ?>
            <a href="#openModal" class="add"><img src="resources/add.svg" alt="Добавить новость"></a>
        <?php } ?>
        <?php foreach ($stmt as $row) {
            if (strlen($row[3]) > 750) {
                $string = substr($row[3], 0, 750);
                $string = rtrim($string, "!,.-");
                $string = substr($string, 0, strrpos($string, ' ')) . "...";
            } else {
                $string = $row[3];
            } ?>
            <a href="news.php?new=<?= $row[0] ?>" class="news">
                <h2><?= $row[2] ?></h2>
                <p class="number"><?= date('d.m.Y', strtotime($row[1])) ?></p>
                <p><?= $string ?></p>
                <img src="resources/category.svg" alt="Категория">
            </a>
        <?php } ?>
    </div>
    <div class="pagination">
        <?php
        if ($page != 1) { ?>
            <a href="index.php?page=<?= ($page - 1) ?>"><img src="resources/back.svg" alt="Назад"></a>
        <?php } ?>
        <?php for ($i = 1; $i <= $str_page; $i++) {
            if ($i == $page) { ?>
                <a href="index.php?page=<?= $i ?>" class="active"><?= $i ?></a>
            <?php } else { ?>
                <a href="index.php?page=<?= $i ?>"><?= $i ?></a>
            <?php } ?>
        <?php } ?>
        <?php if ($page != $str_page) { ?>
            <a href="index.php?page=<?= ($page + 1) ?>"><img src="resources/forward.svg" alt="Вперед"></a>
        <?php } ?>
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
                <form method="post" action="controllers/add.php">
                    <p>Заполните все поля</p>
                    <input name="name" id="name" type="text" placeholder="Заголовок новости (не больше 50 символов)"/>
                    <textarea name="new" id="new" cols="30" rows="10" placeholder="Новость"></textarea>
                    <div>
                        <input type="submit" value="Сохранить" class="save" id="save">
                        <a href="#close" class="btn-close">Отменить</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>