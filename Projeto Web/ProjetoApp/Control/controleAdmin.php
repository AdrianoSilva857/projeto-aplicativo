<?php

include '..\Model\Admin\repositoryAdmin.php';
include '..\Model\Admin\admin.php';

    $admin = new Admin($_POST['login'], $_POST['senha']);

    $connect = new ConcectAdminDataBase();
    $conecctionSuccess = false;
    $conecctionSuccess = $connect->loadAdminDataBase($admin->getLogin(), $admin->getSenha());

    if($conecctionSuccess == true){
        print "<script> window.location.href='../View/home.php';</script>";
    } else
        print "<script> window.location.href='../View/admin.html';</script>";


?>