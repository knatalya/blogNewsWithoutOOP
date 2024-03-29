<?php
$db = new PDO('mysql:host=mariadb;dbname=default', 'nat', '');
$db->exec("set names utf8");
$id = $_GET['new'];
$stmt = $db->query("SELECT * FROM news WHERE id=$id");
$row = $stmt->fetch();
$string = "<p>". str_replace("\n", "</p>\n<p>", $row[3])."</p>";
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
    <title>Новость</title>
</head>
<body>
<div class="container">
    <a href="index.php" class="back">
        <img src="resources/arrow.svg" alt="Вернуться назад">
        <span>назад к списку</span>
    </a>
    <header>
        <h1><?=$row[2] ?></h1>
        <div>
            <a href="#openModal" class="edit">Редактировать</a>
            <a href="controllers/delete.php?new=<?=$id?>" class="delete">Удалить</a>
        </div>
    </header>
    <p class="date number"><?=date('d.m.Y', strtotime($row[1])) ?></p>
    <p><?=$string ?></p>
</div>
<div id="openModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Редактирование новости</h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">
                <form method="post" action="controllers/update.php">
                    <p>Заполните все поля</p>
                    <input name="id" type="number" value="<?=$row[0] ?>" style="display: none">
                    <input name="name" id="name" type="text" placeholder="Заголовок новости" value="<?=$row[2] ?>"/>
                    <textarea name="new" id="new" cols="30" rows="10" placeholder="Новость"><?=$row[3] ?></textarea>
                    <div>
                        <input type="submit" class="save" id="save" value="Сохранить">
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