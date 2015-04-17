<?php

include '..\Model\Admin\controleID.php';

    class ConcectDataBase
    {
        public function saveAdminDataBase($login, $senha)
        {
            $db = new PDO('sqlite:..\BD\ProjetoApp.db');

            if (!($db->query("SELECT * FROM ADMIN"))){
                $db->exec("CREATE TABLE ADMIN(Id INTEGER PRIMARY KEY, LOGIN TEXT, SENHA TEXT)");
            }

            $controlID = new ControlID("ADMIN");
            $id = $controlID->generateID();

            $db->exec("INSERT INTO ADMIN(id, login, senha) VALUES('$id', '$login', '$senha')");
        }

        public function loadAdminDataBase($login, $senha)
        {
            $db = new PDO('sqlite:..\BD\ProjetoApp.db');

            $result = $db->prepare("SELECT login, senha FROM ADMIN where login = '$login' AND senha = '$senha'");

            $result->execute();
            $loginAndSenha = $result->fetch(PDO::FETCH_ASSOC);

            $loginReturn = $loginAndSenha['login'];
            $senhaReturn = $loginAndSenha['senha'];

            if(($loginReturn == $login) and ($senhaReturn == $senha)){
                return true;
            }

        }
    }
?>