<?php
namespace APP\Controller;

use APP\Model\Product;
use APP\Model\Provider;
use APP\Model\Validation;
use APP\Utils\Redirect;

require_once '../../vendor/autoload.php';

if(empty($_POST)){
    Redirect::redirect(
        message: 'falha no cadastro',
        type: 'error'
    );
}


$providerName = $_POST["name"];
$providerPhone = $_POST["phone"];
$providerCnpj = $_POST["cnpj"];

$error = array();

if(!Validation::validateName($providerName)){
    array_push($error, 'você esta registrando um nome muito curto');
}

if(!Validation::validatePhone($providerPhone)){
    array_push($error, 'você esta cadastrando um numero muito longo ou muito curto');
}

if(!Validation::validateCNPJ($providerCnpj)){
    array_push($error, 'você esta cadastrando um CNPJ muito longo ou muito curto');
}

if($error){
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
} else {
    $provider = new Provider(name: $providerName, phone: $providerPhone, cnpj: $providerCnpj);
        Redirect::Redirect(
            message: "fornecedor cadastrado com sucesso!"
            
            
        );
}