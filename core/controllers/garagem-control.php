<?php
$op = $_GET["op"];
if($op == 'get'){
    $userId = $_SESSION['user_id'];
    $plate = $_POST['busca'];
    include 'database-control.php';
    $a = getEntry($userId, $plate);
}else if($op == 'post'){

}else if($op == 'put'){

}else if($op == 'delete'){

}