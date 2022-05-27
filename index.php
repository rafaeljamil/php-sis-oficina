<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('location: login.html');
    }
    $oficina = $_SESSION["user_oficina"];
    $nome = $_SESSION['user_name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/styles/bootstrap.css">
    <script defer src="./public/scripts/jquery-3.6.0.js"></script>
    <script defer src="./public/scripts/bootstrap.js"></script>
    <script defer src="./public/scripts/controller.js"></script>
    <title>Garagem</title>
</head>
<body style="background-color: lightgray;">
    <!-- Barra Superior -->
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col">
                <h1><?php echo $oficina ?></h1>
            </div>
            <div class="col-md-auto">
                <div class="container">
                    <div class="row align-items-center">
                        <h3 class="col-sm-auto pt-2">Bem-vindo(a), <?php echo $nome ?></h3>
                        <!-- <p class="col-sm-auto">Bem-vindo(a), <?php echo $nome ?></p>        -->
                        <a class="col-sm-auto btn btn-light" id="btn_sair" href="#">Sair</a>            
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <!-- Barra Lateral -->
        <div class="row">
            <div class="col-sm-auto">
                <div>
                    <a class="btn btn-light my-1 w-100" href="index.php">Dashboard</a> 
                </div>
                <div>
                    <a class="btn btn-light my-1 w-100" href="index.php?pg=aa">Garagem</a>
                </div>
                <div>
                    <a class="btn btn-light my-1 w-100" href="index.php?pg=ab">Teste 2</a>
                </div>
                <div>
                    <a class="btn btn-light my-1 w-100" href="index.php?pg=ac">Teste 1</a>
                </div>
            </div>

            <!-- Conteudo -->
            <div class="col">
                <?php include ('./core/controllers/view-control.php') ?>
            </div>
        </div>
    </div>
</body>
</html>