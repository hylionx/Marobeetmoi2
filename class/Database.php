<?php
    define('HOST','localhost');
    define('DB_NAME','marobeetmoi2');
    define('PORT','3306');
    define('USER', 'root');
    define('PASS','');

    try { 

        $db=new PDO("mysql:host=".HOST.";dbname=".DB_NAME.";port=".PORT,USER,PASS,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
    } catch(PDOException $e) {

        echo $e;

    }
?>