<?php
require_once "vendor/autoload.php";
use Genisson\ProjetoCepDigital\Search;
$busca = new Search();
$resultado = $busca->getAddressFromZipcode('23893785');
print_r($resultado);