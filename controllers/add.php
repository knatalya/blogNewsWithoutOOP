<?php
if(isset($_POST['name']) && isset($_POST['new']) && $_POST['name'] != ""  && $_POST['new'] != "" && strlen($_POST['name']) <= 50) {
    $db = new PDO('mysql:host=mariadb;dbname=default', 'nat', '');
    $db->exec("set names utf8");
    $name = $_POST['name'];
    $new = $_POST['new'];
    $date = date("Y-m-d H:i:s");
    $data = array( 'date'=>$date, 'name' => $name, 'new' => $new );
    $query = $db->prepare("INSERT INTO news (date, name, new) values (:date, :name, :new)");
    $query->execute($data);
    header('Location: index.php#close ');
}