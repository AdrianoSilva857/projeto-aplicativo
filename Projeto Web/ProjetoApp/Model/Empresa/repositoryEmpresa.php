<?php

include '..\Model\Id\controleID.php';

    class ConnectEmpresaDataBase {
        private $db;

        function __construct($db)
        {
            $this->db = $db;
        }

        public function saveEmpresaDataBase($nome, $email, $telefone, $cep, $bairro, $logradouro, $numero, $foto_perfil,
                                            $foto_capa, $foto_galeria, $avaliacao, $id_cidade)
        {
            $controlID = new ControlID("EMPRESA");
            $id = $controlID->generateID();

            $this->db->exec("INSERT INTO EMPRESA VALUES('$id',".
                                                        "'$nome',".
                                                        "'$email',".
                                                        "'$telefone',".
                                                        "'$cep',".
                                                        "'$bairro',".
                                                        "'$logradouro',".
                                                        "'$numero',".
                                                        "'$foto_perfil',".
                                                        "'$foto_capa',".
                                                        "'$foto_galeria',".
                                                        "'$avaliacao',".
                                                        "'$id_cidade')");
        }

        public function loadEmpresaDataBase()
        {
            $result = $this->db->prepare("SELECT * FROM EMPRESA order by id desc");

            $result->execute();

            $listaEmpresas = $result->fetchAll(PDO::FETCH_ASSOC);
            $empresas = $listaEmpresas;

            return $empresas;

        }

    }


?>