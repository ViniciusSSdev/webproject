<?php

class Produto{
    public function estoque(){
        global $pdo;

         $sql = "SELECT * FROM estoque";
         $smtp = $pdo->prepare($sql);
         $smtp->execute();
         $busca = $smtp->fetchAll();
         return $busca;
         }

}

?>