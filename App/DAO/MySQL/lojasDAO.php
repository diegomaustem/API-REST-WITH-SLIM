<?php

namespace App\DAO\MySQL;

class LojasDAO extends Conexao
{
        public function __construct()
        {
            parent:: __construct();
        }

       public function getAllLojas(): array
       {
        $lojas = $this->pdo
        ->query('SELECT
                id,
                nome,
                telefone,
                endereco
            FROM lojas;')
        ->fetchAll(\PDO::FETCH_ASSOC);

         return $lojas;
       }

}


?>