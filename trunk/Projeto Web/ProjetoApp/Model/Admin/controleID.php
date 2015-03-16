<?php

    class ControlID {
        private $table;

        function __construct($table)
        {
            $this->table = $table;
        }

        public function getTable()
        {
            return $this->table;
        }

        public function generateID(){
            $tableName = $this->getTable();

            $db = new PDO('sqlite:C:\SQLite\ProjetoApp.db');

            $sth = $db->prepare("SELECT max(Id) FROM '$tableName'");
            $sth->execute();

            $result = $sth->fetch(PDO::FETCH_ASSOC);
            $valor = $result['max(Id)'];

            /*echo "AAA==>>".$valor."<<<==BBBB";
            print_r($result);
            print("\n");*/

            return $valor + 1;
        }
    }

?>