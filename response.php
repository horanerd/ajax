<?php
$response = filter_input(INPUT_POST, "response", FILTER_SANITIZE_STRIPPED);

$mar = filter_input(INPUT_POST, "mar", FILTER_SANITIZE_STRIPPED);

var_dump("response = " . $response,"mar = " . $mar);
switch($response){
    case("teste"):
        echo "validado";
        break;
    case("ola"):
        echo "funcionou";
        break;
    default:
        echo "nada foi enviado";
}

