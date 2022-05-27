<?php
    $main_path = $_SERVER["DOCUMENT_ROOT"];
    $main_path .= "/Projeto Sistema Oficina-Loja/app/";
    if(isset($_GET['v'])){
        $pg = $_GET['v'];
    }else{
        $pg = '';
    };

    switch ($pg){
        case "of":
            include($main_path."/views/modules/Shop/home_shop.html");
            break;
        case "lj":
            include($main_path."/views/modules/Store/home_store.html");
            break;
        case "op":
            break;
        case "rl":
            break;
    };
?>