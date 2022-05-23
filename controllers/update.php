<?php
if (isset($_POST['id'])) {
    $db = new PDO('mysql:host=mariadb;dbname=default', 'nat', '');
    $sql = "UPDATE news SET name = :name, new = :new WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(":id", $_POST["id"]);
    $stmt->bindValue(":name", $_POST["name"]);
    $stmt->bindValue(":new", $_POST["new"]);
    $stmt->execute();
    header('Location: /news.php?new='.$_POST["id"]);
}