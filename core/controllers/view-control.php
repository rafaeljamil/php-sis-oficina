<?php

    $main_path = $_SERVER["DOCUMENT_ROOT"];
    $main_path .= "/projeto-sistema-oficina/";
    if(isset($_GET['pg'])){
        $pg = $_GET['pg'];
    }else{
        $pg = '';
    };

    switch ($pg){
        case "aa":
            include ($main_path."/core/views/app/shop.php");
            break;
        case "ab":
            include ($main_path."/core/views/app/home_test2.html");
            break;
        case "ac":
            include ($main_path."/core/views/app/home_test1.html");
            break;
        default:
            include ($main_path."/core/views/app/dashboard.php");
            break;
    };