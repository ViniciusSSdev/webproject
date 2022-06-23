<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
<body>

<?php

if(isset($_POST['email']) && isset($_POST['senha'])) { 
    require "config.php";
    require "Usuario.class.php";
    require "Produto.class.php";

    $u = new Usuario();
    
    
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

   
  if($u->login($email, $senha) == true){
      if(isset($_SESSION['iduser'])){
        if($_SESSION['nivel'] = '1') {
            header("location: ../adminview.php");
        } else {
            header("location: ../vendedorview.php");
        }


      }else{
        header("location: ../views/login.php");
      }

  }else{
    header("location: ../views/login.php");
}
}





function cadDisciplina($dados){
    include "_scripts/config.php";

    $disciplina = $dados['disciplina'];
    $status = $dados['status'];
   
    $sql = "INSERT INTO disciplinas (disciplina,status) VALUES ('$disciplina','$status')";
    $query = $mysqli->query($sql);

    return $query;
}


function listarDisciplina(){
    include "_scripts/config.php";
    $sql = "SELECT * FROM disciplinas WHERE status = 'A'";
    $query = $mysqli->query($sql);

    return $query;

}

function cadProf($dados){
    include "_scripts/config.php";

    $prof = $dados['nome'];
    $dt_nascimento = $dados['dt_nascimento'];
    $nome_mae = $dados['nome_mae'];
    $disciplina = $dados['disciplina'];
    $sexo = $dados['sexo'];
   
    $sql = "INSERT INTO professor (prof,mae,disciplina,sexo,data_nascimento) VALUES ('$prof','$nome_mae','$disciplina','$sexo','$dt_nascimento')";
    $query = $mysqli->query($sql);

    return $query;  
}

function totalAlunos(){//QUANTIDADE DE ALUNOS NA BASE

    include "_scripts/config.php";
      
    $sql = "SELECT id FROM cadaluno";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    return $total;  

}

function totalDisciplinas(){//QUANTIDADE DE DISCIPLINAS NA BASE

    include "_scripts/config.php";
      
    $sql = "SELECT id FROM disciplinas";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    return $total;  

}

function totalProf(){//QUANTIDADE DE PROFESSORES NA BASE

    include "_scripts/config.php";
      
    $sql = "SELECT id FROM professor";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    return $total;  

}


function matriculadata(){

    include "_scripts/config.php";
      
    $sql = "SELECT
    date(data) as dt,
    count(id) as t
    FROM `professor`
    GROUP BY date(data)";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return $dados;  


}






?>