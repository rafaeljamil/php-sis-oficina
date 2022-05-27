<?php

//LOGIN
function getLogin($login){
    include "database-connect.php";
    //print_r($con);
    $con;
    $check = mysqli_query($con, "SELECT * from users WHERE user_login = '$login'");
    if(!$check){
        //echo "Nenhum usuário no banco de dados";
        return 0;
    }else{
        $retorno = mysqli_fetch_array($check);
        //print_r($retorno);
        return $retorno;
    }
}

function postLogin($login, $pwd){
    include "database-connect.php";
    $con;
    $hash = password_hash($pwd, PASSWORD_BCRYPT);
    mysqli_query($con, "INSERT IF NOT EXISTS into users (login, password) VALUES ('$login', '$hash')");
}

function getUserOficina($userId){
    include "database-connect.php";
    $con;
    $check = mysqli_query($con, "SELECT oficina_id FROM user_oficina WHERE user_id = '$userId'");
    if(!$check){
        //echo "Nenhum usuário no banco de dados";
        return 0;
    }else{
        $retorno = mysqli_fetch_array($check);
        //print_r($retorno);
        return $retorno;
    }
}

function getOficinaName($userId){
    include "database-connect.php";
    $con;
    $oficinaId = getUserOficina($userId);
    $check = mysqli_query($con, "SELECT ofi_name FROM oficina WHERE id = '$oficinaId[0]'");
    if(!$check){
        //echo "Nenhum usuário no banco de dados";
        return 0;
    }else{
        $retorno = mysqli_fetch_array($check);
        //print_r($retorno);
        return $retorno;
    }
}

//GARAGEM
function getEntry($id, $busca){
    include 'database-connect.php';
    $check = mysqli_query($con, "SELECT item FROM oficina_shop WHERE user_id, plate = '$id', '$busca' ");
    if(!$check){
        return 0;
    }else{
        $retorno = mysqli_fetch_array($check);
        return $retorno;
    }
}

function postEntry($id, $plate, $maker, $model, $service){
    include 'database-connect.php';
    $date = date('d/m/Y, H:i');
    mysqli_query($con, "INSERT IF NOT EXISTS INTO garagem_shop (user_id, plate, maker, model, service, date_in) VALUES ('$id', '$plate', '$maker', '$model', '$service', '$date')");
}

function putEntry(){

}

function delEntry(){

}
?>