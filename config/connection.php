<?php

function connection() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "asm1";


    try {
        $conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (Exception $ex ) {
        echo "Lỗi kết nối :" . $ex->getMessage();
    }
}
function view($view, $data = []) {
    extract($data);
    include_once "views/{$view}.php";
}