<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se o nome, login e senha foram enviado
   //do formulário
   if(isset($_POST['nome']) && isset($_POST['sexo']) &&
     isset($_POST['partido']) && isset($_POST['cidade'])){

      $nome = $_POST['nome'];
      $sexo = $_POST['sexo'];
      $partido = $_POST['partido'];
      $cidade = $_POST['cidade'];
   

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `vereadores` (`nome`, `sexo`, `partido`, `cidade`) VALUES (?, ?, ?, ?);"; 
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $nome, $sexo , $partido, $cidade );

   //executa o comando
   $comando->execute();

}
   //volta para o formulário
   header("Location: index.php");

?>
   







