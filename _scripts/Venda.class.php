<?php

class Venda{
    public function Vender(){
        global $pdo;

         $sql = "SELECT * FROM venda";
         $smtp = $pdo->prepare($sql);
         $smtp->execute();
         $venda = $smtp->fetchAll();
         return $venda;
         }

}

?>