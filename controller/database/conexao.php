<?php
define("server", "127.0.0.1");
define("username", "SisLogin");
define("password", "190123");
define("port", "1433");
define("database", "acesso_cooper");


try {
    $pdo = new PDO("sqlsrv:Server=" . server . "," . port . ";database=" . database . "", username, password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Não foi possivel conectar ao banco de dados: " . $e->getMessage());
}
