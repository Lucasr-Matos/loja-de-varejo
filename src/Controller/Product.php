<?php
namespace APP\Controller;

use APP\Model\Product;
use APP\Model\Validation;
use APP\Utils\Redirect;

use function PHPSTORM_META\type;

require_once '../../vendor/autoload.php';

if(empty($_POST)){
    Redirect::redirect(
        message: 'Requisição inválida!!!',
        type: 'error'
    );
}

$productName = $_POST["name"];
$productPrice = (float) $_POST["price"];
$productQuantity = (float) $_POST["quantity"];

$error = array();

if(!Validation::validateName($productName)){
    array_push($error, "O nome do produto precisa conter 5 caracteres"); 

}

if(!Validation::validateNumber($productPrice)){
    array_push($error, "O preço do produto precisa ser maior que zero");
}

if(!Validation::validateNumber($productQuantity)){
    array_push($error, "A quantitade do produto deve ser maior que zero");
}

if($error){
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
} else {
    $product = new Product(name: $productName, price: $productPrice, quantity: $productQuantity);

//salva no banco de dados

Redirect::redirect(
    message: "produto cadastrado com sucessos",
    type: 'success'
);
}