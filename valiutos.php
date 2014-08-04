<?php

$valiutos=array(
    array("Pavadinimas"=>"Doleris","Simbolis"=>"USD"),
    array("Pavadinimas"=>"Litas","Simbolis"=>"LTL"),
    array("Pavadinimas"=>"Euro","Simbolis"=>"EUR"));

header('Content-Type: application/json');
echo json_encode($valiutos);

