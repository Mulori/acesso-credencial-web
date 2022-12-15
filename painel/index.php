<?php
session_start();
ini_set("display_errors", 1);
error_reporting(E_ALL);

//include("../controller/ConnectionSQLServer/controller_database.php");
include("../libs/login/verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <title>Acesso | Coopercitrus</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/8aae9daeac.js"></script>

    <link rel="stylesheet" src="../../assets/css/painel/styles.css" />
</head>

<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #13331f;">
            <a class="navbar-brand text-light" href="#"><img src="../assets/imagens/cooper-logo.svg" style="width: 170px; height: 90px;" /></a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" id="navbarDropdown1" data-toggle="dropdown" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-list-alt" aria-hidden="true"></i> Acessos
                        </a>
                        <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" id="btn-gerar-acesso" href="javascript:void(0);">Cadastrar Acesso</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" id="navbarDropdown1" data-toggle="dropdown" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-o" aria-hidden="true"></i> Minha Conta
                        </a>
                        <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" id="btn-desconectar" href="javascript:void(0);">Desconectar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="content">

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script type="text/javascript">
        var url_atual = window.location.href;

        $('#btn-desconectar').on('click', function() {
            window.location.href = "../libs/login/desconecta.php";
        });

        $('#btn-authorize-app').on('click', function() {
            // $('#content').load("./GenerateAuthorization");
        });
    </script>

</body>

</html>