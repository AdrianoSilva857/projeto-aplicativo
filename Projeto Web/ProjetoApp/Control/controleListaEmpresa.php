<?php

include '..\Model\Empresa\repositoryEmpresa.php';
include '..\Model\Empresa\empresa.php';

    $db = new PDO('sqlite:..\BD\ProjetoApp.db');

    $connect = new ConnectEmpresaDataBase($db);

    try {
        echo "Adriano da Silva";
        $teste = $connect->loadEmpresaDataBase();

        print_r($teste['nome']);



       // print "<script> window.location.href='../View/ListagemEmpresa.php';</script>";

    } catch(Exception $e) {
        echo 'Não foi possível gravar a Empresa no banco. Motivo: ',  $e->getMessage(), "\n";
    }
?>