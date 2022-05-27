<?php
    // include "database-create.php";
    include "database-variables.php";

    // $dbname = create_database($host, $user, $pass, $dbname);
    $con = mysqli_connect($host, $user, $pass, $dbname);
    if (mysqli_connect_error()){
        echo /*"Falha ao conectar no Banco de Dados: " . */mysqli_connect_error();
    }else{
        
        // Automate database creation
        // create_table_users($host, $user, $pass, $dbname);
        // create_table_oficina($host, $user, $pass, $dbname);
        // create_table_user_oficina($host, $user, $pass, $dbname);
        // create_table_service($host, $user, $pass, $dbname);

        // echo "Conectado com ".$bank.", usuário ".$bank_user;
        // echo "<br>";
        // echo "Número de usuários salvos: ". mysqli_num_rows(mysqli_query($con, "SELECT * from users")) ;
    }
?>