<?php
$op = $_GET['op'];
if($op == 'login'){
    session_start();
    $login = $_POST["login"];
    $pass = $_POST["password"];
    // $login = 'teste';
    // $pass = 'abc123';
    
    include "database-control.php";
    $a = getLogin($login);
    if($a == 0){
        echo "err-user";
    }else{
        if(password_verify($pass, $a['user_pass'])){
            echo "ok";

            //Função que retorna o nome da oficina ligada ao usuário
            $b = getOficinaName($a["id"]);
            $_SESSION["user_id"] = $a["id"];
            $_SESSION["user_name"] = $a["user_name"];
            $_SESSION["user_oficina"] = /*$a["user_oficina"]*/ $b[0];
            
        }else{
            echo "err-pass";
        }
    }
}else if($op == 'logout'){
    session_start();
    session_destroy();
    echo "ok";
}
