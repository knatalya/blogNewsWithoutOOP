<?php
    if (isset($_GET['new'])) {
        $db = new PDO('mysql:host=mariadb;dbname=default', 'nat', '');
        $db->exec("set names utf8");
        $sql = "DELETE FROM news WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(":id", $_GET['new']);
        $stmt->execute();
        header('Location: /index.php ');
    }
