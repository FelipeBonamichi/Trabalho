<?php
    //importa o arquivo de conexão
    require_once "consultar_por_id.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
    <h1>Cadastro do vereador</h1>
    <hr>
    <form action="<?php echo isset($vereador) ?
                            "atualizar.php" : 
                            "inserir.php"; ?>"
                            
method="post" enctype="multipart/form-data">


<input type="hidden" name="idvereador" value="<?php echo $vereador->idvereador ??"" ;?>"><br>               

        <label>Nome</label><br>
        <input type="text" name="nome" value="<?php echo $vereador->nome ??"" ;?>"><br>

        <label>sexo</label><br>
        <input type="text" name="sexo" value="<?php echo $vereador->sexo ??"" ;?>"><br>

        <label>partido</label><br>
        <input type="text" name="partido" value="<?php echo $vereador->partido ??"" ;?>"><br>

        <label>cidade</label><br>
        <input type="text" name="cidade" value="<?php echo $vereador->cidade??"" ;?>"><br>
        
        
        <button type="submit">Inserir</button>
        
    </form>

</body>
</html>