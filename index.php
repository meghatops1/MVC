<?php
include('Controller/Controller.php');

$con=new Controller();
$url="https//";
$url.=$_SERVER['HTTP_HOST'];

if(isset($_SERVER['PATH_INFO'])){
    $path= $_SERVER['PATH_INFO'];
    switch($path){
        case '/':
            $con->index();
        break;
        case '/add':
            $con->create();
        break;
        default:
            echo "page not found";
        break;    

    }
}



?>
