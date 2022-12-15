<?php
session_start();

if (isset($_SESSION['acesso_user_login'])) {
    header('location: ../painel');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Coopercitrus</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login/styles.css">
    <script src="https://use.fontawesome.com/8aae9daeac.js"></script>
</head>

<body>
    <div class="container-fluid h-100 container-auth">
        <div class="row h-100">
            <div class="col d-flex flex-column justify-content-center" style="background-color: #13331f;">
                <div class="d-flex justify-content-between mx-auto">
                    <img class="img-logo" src="../assets/imagens/cooper-logo.svg" />
                </div>
                <div class="container-form mx-auto w-75 p-5">
                    <form method="POST" id="form-login">
                        <div class="form-group">
                            <label id="title-form-login" class="text-light">Acesso ao Sistema</label>
                            <input type="text" id="txtCPF" name="cpf" class="form-control" required="true" maxlength="30" id="exampleInputcpf1" aria-describedby="cpfhelper" placeholder="Informe seu CPF" mask>
                        </div>
                        <div class="form-group">
                            <input type="password" id="txtSenha" name="senha" required="true" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <div class="row h-100">
                            <div class="col w-100 mt-3">
                                <button type="submit" class="btn btn-light w-100" style="color: #13331f; font-size: large; font-weight: bold;">Acessar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="footer mx-auto p-3" style="color: white;">
                    © 2023 coopercitrus.com.br - Powered by: <a href="https://coopercitrus.com.br/" style="color: white;"><strong>MG Tech</strong></a>
                </div>
            </div>
            <div class="col d-none d-md-block col-right">
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: #13331f;">
                        <span aria-hidden="true" class="text-primary" style="color: #13331f;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span id="modalMessage"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: #13331f;" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="../libs/jquery.serializejson.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#txtCPF').mask('000.000.000-00');
        });

        $("#form-login").on("submit", function(e) {
            e.preventDefault();

            var formData = $("#form-login").serializeJSON();
            var login = JSON.stringify(formData);

            console.log(login);

            $.ajax({
                url: '../controller/Login/valida_login.php',
                dataType: 'text',
                type: 'post',
                data: {
                    data: login
                },
                success: function(result) {
                    console.log(result);
                    switch (result) {
                        case 'login-ok':
                            window.location.href = '../index.php';
                            break;
                        case 'login-error':
                            showModal('Credenciais inválidas', 'E-mail ou senha inválidos.');

                            $("#modalCenter").modal({
                                backdrop: 'static'
                            }, 'show');
                            break;
                    }
                },
                error: function(e, ts, et) {
                    console.log(ts.responseText);
                }
            });
        });

        function showModal(title, message) {
            $("#modalTitle").text(title);
            $("#modalMessage").text(message);
        }
    </script>
</body>

</html>