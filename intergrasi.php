<?php
$env = parse_ini_file("db.env");
try {
    $con = new PDO(
        "mysql:host=".$env['DB_HOST'].";dbname=".$env['DB_NAME'],
        $env['DB_USER'],
        $env['DB_PASS']
    );
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Terhubung";
    } catch(PDOException $e){
        echo "Gagal Masuk: " . $e->getMessage();
}
?>