<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/bootstrap.css" media="screen">
    <script defer src="./assets/scripts/bootstrap.js"></script>
    <script defer src="./assets/scripts/script.js"></script>
    <script defer src="./assets/scripts/jQuery_v3.6.0.js"></script>
    <title>Sistema de Oficina</title>
</head>
<body>
    <header class="container" id="top_bar">
        <div>
            <h1>JPK - Sistema de Oficina</h1>
        </div>
        <div>
            <nav>
                <a href="index.php">Início</a>
                <a href="#">Voltar</a>
                <a href="#">Logout</a>
            </nav>
        </div>
    </header>
    <div class="container" id="content">
        <div id="left_bar">
            <nav>
              <a href="index.php?v=of">Oficina</a>
              <a href="index.php?v=lj">Loja</a>
              <a href="index.php?v=op">Sistema</a>
            </nav>
        </div>
        <div id="modules">
            <?php include("./views/handler.php") ?>
        </div>
    </div>
</body>
</html>