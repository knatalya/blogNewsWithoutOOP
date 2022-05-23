<?php
if (isset($_POST['id'])) {
    $db = new PDO('mysql:host=mariadb;dbname=default', 'nat', '');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $new = $_POST['news'];
    $sql = "UPDATE news SET new = '$new', name = '$name' WHERE id=$id";
    $db->exec($sql);
    header('Location: news.php?new='.$id);
}