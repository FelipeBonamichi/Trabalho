<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se foi enviada o param id pela URL
      if(isset($_GET['idvereador'])){

   $id = $_GET['idvereador'];

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM `vereadores` WHERE  `idvereador`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $id);

   //executa o comando
   $comando->execute();

//pegar os resultados da consulta - todas as linhas de resultados
$resultados = $comando->get_result();

//pega a primeira linha de resultado da consulta
$vereador = $resultados->fetch_object();


   }