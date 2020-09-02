<?php
$hostnom = 'host=localhost';
$usernom = 'root';
$password = '';
$bdd = 'biblio';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ligne utile seuleument lors du développement, à supprimer lors de la publication du site
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}