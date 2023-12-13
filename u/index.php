<?php 
require "../config.php";
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $query = $pdo->prepare('select * from urls where Id = ?');
    $query->execute(array($id));

    $rows = $query->fetch();//fetch()

    $clicks = $rows['click']+1;
    $update = $pdo->prepare("UPDATE urls set click = ? where Id = ?");
    $update->execute(array($clicks,$id));
    header("location:".$rows['url']);
}