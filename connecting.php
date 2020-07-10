<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "biblioteca";

    $connect = new MySQLi("$host", "$user", "$pass", "$database");

    $connect ->set_charset("utf8");
    if ($connect -> connect_error){
        echo "Erro de conexão";
    } else{

    }


?>
