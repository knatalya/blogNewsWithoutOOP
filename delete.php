<?php
    if (isset($_GET['new'])) {
        $db = new PDO('mysql:host=mariadb;dbname=default', 'nat', '');
        $db->exec("set names utf8");
        $id = $_GET['new'];
        $sql = "DELETE FROM news WHERE id = $id";
        $db->exec($sql);
        header('Location: index.php ');
    }
