<?php
if (isset($_POST['id']) && $_POST['name'] != "" && strlen($_POST['name']) > 50 && $_POST['new'] != "") {
    $db = new PDO('mysql:host=mariadb;dbname=default', 'nat', '');
    $sql = "UPDATE news SET name = :name, new = :new WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(":id", $_POST["id"]);
    $stmt->bindValue(":name", $_POST["name"]);
    $stmt->bindValue(":new", $_POST["new"]);
    $stmt->execute();
    header('Location: /news.php?new='.$_POST["id"]);
} else {
    header('Location: /news.php?new='.$_POST["id"].'#openModal');
}