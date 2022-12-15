<?php
ini_set('display_error', 1);
error_reporting(E_ALL);

session_start();

include('../database/conexao.php');

$data = json_decode($_POST['data'], true, 512, JSON_UNESCAPED_UNICODE);

$cpf = $data["cpf"];
$senha = $data["senha"];

$cpf = str_replace('-', '', $cpf);
$cpf = str_replace('.', '', $cpf);

$ssql = "select codigo, codigo_externo from usuario where cpf = '{$cpf}' and upper(senha) = upper(CONVERT(VARCHAR(32), HashBytes('MD5', '{$senha}'), 2))";

$stmt = $pdo->prepare($ssql);
$stmt->execute();

$user_data = $stmt->fetchAll();


if ($stmt->rowCount() > 0) {
    foreach ($user_data as $user) {
        $_SESSION['acesso_user_login'] = intval($user['codigo']);
    }
    echo 'login-ok';
    exit();
} else {
    echo 'login-error';
    exit();
}
