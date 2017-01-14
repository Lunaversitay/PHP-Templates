<?php
/**
* @author Lunaversity, atomik
* @desc Friendly little template for PHP connections
* @link https://github.com/Lunaversitay/PHP-Templates
*/

$db_host = "localhost"; // 127.0.0.1(aka localhost) or whatever your host is
$db_name = ""; // The database name you use for the database
$db_user = ""; // The username you use for the database
$db_pass = ""; // The password for the databases
try{
$host = "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO($host, $db_user, $db_pass);
}
catch(PDOException $pdo_err){ ?>
    <h1 style="color:#c10000;">Error Caught:</h1>
    <h2><?= $pdo_err->getMessage() ?></h2>
  <?php die();
}
?>
