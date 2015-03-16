<?php

include '..\Model\Admin\repositoryAdmin.php';
include '..\Model\Admin\admin.php';

    $admin = new Admin($_POST['login'], $_POST['senha']);

    $connect = new ConcectDataBase();
   // $connect->saveAdminDataBase($admin->getLogin(), $admin->getSenha());
    $conecctionSuccess = false;
    $conecctionSuccess = $connect->loadAdminDataBase($admin->getLogin(), $admin->getSenha());

    if($conecctionSuccess == true){
        echo "USUARIO EXISTE";
    } else
        echo "USUARIO NAO CADASTRADO";


?>