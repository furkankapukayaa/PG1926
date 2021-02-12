<?php

date_default_timezone_set('Europe/Istanbul');

$saat = date("H");

$geceyarisi = "00";
$sabah = "06";
$ogle  = "10";
$aksam = "17";
$gece  = "20";

if ($saat > $geceyarisi && $saat < $sabah) {
    echo "Esenlikler Dilerim";
}

if ($saat >= $sabah && $saat < $ogle) {
    echo "Günaydın";
}

if ($saat >= $ogle && $saat < $aksam) {
    echo "İyi Günler";
}

if ($saat >= $aksam && $saat < $gece) {
    echo "İyi Akşamlar";
}

if ($saat >= $gece) {
    echo "İyi Geceler";
}

?>