<?php
$url = $_SERVER['REQUEST_URI'];
//echo $url;
$app_url = "http://localhost/examen/public/";
if($url == "/examen/public/"){
 require_once "../views/inicio.php";

}elseif ($url == "/examen/public/ejercicio01/"){
    require_once "../views/ejercicio01.php";

}elseif ($url == "/examen/public/ejercicio02/"){
    require_once "../views/ejercicio02.php";

}elseif ($url == "/examen/public/ejercicio03/"){
    require_once "../views/ejercicio03.php";
}