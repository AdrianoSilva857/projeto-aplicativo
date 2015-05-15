<?php

include '..\Model\Empresa\repositoryEmpresa.php';
include '..\Model\Empresa\empresa.php';

    $empresa = new Empresa($_POST['txtNomeLocal'],
                           $_POST['emlEmail'],
                           $_POST['txtFone'],
                           $_POST['txtCep'],
                           $_POST['txtBairro'],
                           $_POST['txtLog'],
                           $_POST['txtNumero'],
                           null,
                           null,
                           null,
                           null,
                           $_POST['sctCidade']);

    // Apagar depois de pospular automático
    $empresa->setIdCidade(1);

    $db = new PDO('sqlite:..\BD\ProjetoApp.db');

    $connect = new ConnectEmpresaDataBase($db);

    try {
        $connect->saveEmpresaDataBase($empresa->getNome(),
                                      $empresa->getEmail(),
                                      $empresa->getTelefone(),
                                      $empresa->getCep(),
                                      $empresa->getBairro(),
                                      $empresa->getLogradouro(),
                                      $empresa->getNumero(),
                                      $empresa->getFotoPerfil(),
                                      $empresa->getFotoCapa(),
                                      $empresa->getFotoGaleria(),
                                      $empresa->getAvaliacao(),
                                      $empresa->getIdCidade());

        print "<script> window.location.href='../View/ListagemEmpresa.php';</script>";

    } catch(Exception $e) {
        echo 'Não foi possível gravar a Empresa no banco. Motivo: ',  $e->getMessage(), "\n";
    }
?>