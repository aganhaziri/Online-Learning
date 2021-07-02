<?php

try{
    $pdo =new PDO ("mysql:host=localhost;dbname=test", "root", "");

}catch(PDOException $pdo){
    die("Lidhja deshtoi");
}
?>
