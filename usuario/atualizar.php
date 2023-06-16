<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //define variáveis para obter os valores específicos dos campos do banco de dados
   $nome = $_POST['nome'];
   $sexo = $_POST['sexo'];
   $partido = $_POST['partido'];
   $cidade = $_POST['cidade'];


   //cria uma variável com um comando SQL
   $SQL = "UPDATE `vereadores` SET `nome`= ?, `sexo`= ?, `partido`= ?, 'cidade'= ? WHERE  `idvereador`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $nome, $sexo , $partido, $cidade );

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

?>

   







