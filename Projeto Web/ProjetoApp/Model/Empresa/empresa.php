<?php

    class Empresa {
        private $id;
        private $nome;
        private $email;
        private $telefone;
        private $cep;
        private $bairro;
        private $logradouro;
        private $numero;
        private $foto_perfil;
        private $foto_capa;
        private $foto_galeria;
        private $avaliacao;
        private $id_cidade;

        function __construct($nome, $email, $telefone, $cep, $bairro, $logradouro, $numero, $foto_perfil, $foto_capa, $foto_galeria,
                             $avaliacao, $id_cidade)
        {
            $this->nome         = $nome;
            $this->email        = $email;
            $this->telefone     = $telefone;
            $this->cep          = $cep;
            $this->bairro       = $bairro;
            $this->logradouro   = $logradouro;
            $this->numero       = $numero;
            $this->foto_perfil  = $foto_perfil;
            $this->foto_capa    = $foto_capa;
            $this->foto_galeria = $foto_galeria;
            $this->avaliacao    = $avaliacao;
            $this->id_cidade    = $id_cidade;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }

        public function getCep()
        {
            return $this->cep;
        }

        public function setCep($cep)
        {
            $this->cep = $cep;
        }

        public function getBairro()
        {
            return $this->bairro;
        }

        public function setBairro($bairro)
        {
            $this->bairro = $bairro;
        }

        public function getLogradouro()
        {
            return $this->logradouro;
        }

        public function setLogradouro($logradouro)
        {
            $this->logradouro = $logradouro;
        }

        public function getNumero()
        {
            return $this->numero;
        }

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        public function getFotoPerfil()
        {
            return $this->foto_perfil;
        }

        public function setFotoPerfil($foto_perfil)
        {
            $this->foto_perfil = $foto_perfil;
        }

        public function getFotoCapa()
        {
            return $this->foto_capa;
        }

        public function setFotoCapa($foto_capa)
        {
            $this->foto_capa = $foto_capa;
        }

        public function getFotoGaleria()
        {
            return $this->foto_galeria;
        }

        public function setFotoGaleria($foto_galeria)
        {
            $this->foto_galeria = $foto_galeria;
        }

        public function getAvaliacao()
        {
            return $this->avaliacao;
        }

        public function setAvaliacao($avaliacao)
        {
            $this->avaliacao = $avaliacao;
        }

        public function getIdCidade()
        {
            return $this->id_cidade;
        }

        public function setIdCidade($id_cidade)
        {
            $this->id_cidade = $id_cidade;
        }




    }
?>