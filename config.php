<?php 
try
{
    $pdo= new PDO('mysql:host=localhost;dbname=db_ShortUrls','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    die("Error is:".$e->getMessage());
}
?>