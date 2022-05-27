<?php
    // This script creates functions to initialize the database automatically
    include 'database-variables.php';

    // Creating database
    function create_database($host, $user, $pass, $dbname){
        $conn = mysqli_connect($host, $user, $pass);
        $sql = sprintf("CREATE DATABASE IF NOT EXISTS %s", $dbname);
        if(!$conn){
            echo "Falha ao conectar: " . mysqli_connect_error();
        }

        if(mysqli_query($conn, $sql)){
            $ok = sprintf("Banco de dados %s criado com suceso.\n", $dbname);
            //echo $ok;
        }else{
            //echo "Erro ao criar banco de dados: " . mysqli_error($conn);
        }

        mysqli_close($conn);
        return $dbname;
    }

    // Creating table users
    function create_table_users($host, $user, $pass, $dbname){
        $mytable = "users";
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $sql = sprintf("CREATE TABLE IF NOT EXISTS %s (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            user_name VARCHAR(30) NOT NULL,
            user_login VARCHAR(15) NOT NULL,
            user_pass VARCHAR(65) NOT NULL,
            user_email VARCHAR(30) NOT NULL,
            user_created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )", $mytable);
        
        if(!$conn){
            echo "Falha ao conectar: " . mysqli_connect_error();
        }

        if(mysqli_query($conn, $sql)){
            $ok = sprintf("Tabela %s criada com sucesso.\n", $mytable);
            //echo $ok;
        }else{
           // echo "Erro ao criar tabela: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    // Creating table oficina
    function create_table_oficina($host, $user, $pass, $dbname){
        $mytable = "oficina";
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $sql = sprintf("CREATE TABLE IF NOT EXISTS %s (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            ofi_name VARCHAR(20) NOT NULL,
            ofi_created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )", $mytable);
        
        if(!$conn){
            echo "Falha ao conectar: " . mysqli_connect_error();
        }

        if(mysqli_query($conn, $sql)){
            $ok = sprintf("Tabela %s criada com sucesso.\n", $mytable);
            //echo $ok;
        }else{
            //echo "Erro ao criar tabela: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    // Creating table user_oficina to organize the relation between users and oficina
    function create_table_user_oficina($host, $user, $pass, $dbname){
        $mytable = "user_oficina";
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $sql = sprintf("CREATE TABLE IF NOT EXISTS %s (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            user_id INT(6) UNSIGNED,
            oficina_id INT(6) UNSIGNED,
            user_oficina_created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(id),
            FOREIGN KEY (oficina_id) REFERENCES oficina(id)
        )", $mytable);
        
        if(!$conn){
            echo "Falha ao conectar: " . mysqli_connect_error();
        }

        if(mysqli_query($conn, $sql)){
            $ok = sprintf("Tabela %s criada com sucesso.\n", $mytable);
            //echo $ok;
        }else{
            //echo "Erro ao criar tabela: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    // Create table service
    function create_table_service($host, $user, $pass, $dbname){
        $mytable = "service";
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $sql = sprintf("CREATE TABLE IF NOT EXISTS %s (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            svc_user_oficina INT(6) UNSIGNED,
            svc_plate VARCHAR(9) NOT NULL,
            svc_maker VARCHAR(15) NOT NULL,
            svc_model VARCHAR(15) NOT NULL,
            svc_order VARCHAR(200) NOT NULL,
            svc_date_in DATETIME DEFAULT CURRENT_TIMESTAMP,
            svc_date_out DATETIME NOT NULL,
            FOREIGN KEY (svc_user_oficina) REFERENCES user_oficina(id)
        )", $mytable);
        
        if(!$conn){
            echo "Falha ao conectar: " . mysqli_connect_error();
        }

        if(mysqli_query($conn, $sql)){
            $ok = sprintf("Tabela %s criada com sucesso.\n", $mytable);
            //echo $ok;
        }else{
            //echo "Erro ao criar tabela: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }