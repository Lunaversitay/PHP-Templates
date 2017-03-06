<?php
/**
 * @author Lunaversity, ATomIK
 * @desc Friendly little template for PHP connections
 * @link https://github.com/Lunaversitay/PHP-Templates
 */

/** @var string $db_host */
$db_host = "localhost"; // 127.0.0.1(aka localhost) or whatever your host is
/** @var string $db_name */
$db_name = ""; // The database name you use for the database
/** @var string $db_user */
$db_user = ""; // The username you use for the database
/** @var string $db_pass */
$db_pass = ""; // The password for the databases

try {
    $host = "mysql:host=$db_host;dbname=$db_name";
    $pdo = new PDO($host, $db_user, $db_pass);
} catch (PDOException $pdo_err) { ?>
    <h1 style="color:#c10000;">Error Caught:</h1>
    <?php die('<code>' . $pdo_err->getMessage() . '</code>'); ?>
<?php } ?>
