<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['acesso_user_login'])) {
    header('location: ../login');
    exit();
}
