<?php

$minuscole="";
$maiuscole="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$simboli="!@#$%&*_";
$numeri="0123456789";

$NumCheck = $_GET['NumCheck'] ?? false;
$MaiuscCheck = $_GET['MaiuscCheck'] ?? false;
$SimbCheck = $_GET['SimbCheck'] ?? false;

$chars ="abcdefghijklmnopqrstuvwxyz";

if($NumCheck==true){
    $chars = $chars .$numeri ;
}if($MaiuscCheck==true){
    $chars = $chars .$maiuscole;
}if($SimbCheck==true){
    $chars = $chars .$numeri;
}

$password = substr( str_shuffle( $chars ), 0, $_GET["qty"] );




?>