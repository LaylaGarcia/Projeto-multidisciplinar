<?php
  $nome   = $_GET['nome'];
  $CPF  = $_GET['CPF'];
  $RG  = $_GET['RG'];
  $nascimento  = $_GET['data de nascimento'];
  $endereço  = $_GET['endereço'];
  $Estado = $_GET['Estado civil'];
  $numero  = $_GET['numero de matricula'];
  $setor  = $_GET['setor'];
  $cargo  = $_GET['cargo'];
  $salario  = $_GET['salario'];
  $gestor  = $_GET['gestor'];
 
 
  $dbh = new PDO('pgsql:host=localhost;port=5432;dbname=ifsp', 'postgres', 'postgres');
 
  $sql = "INSERT INTO dep VALUES ($numero, '$nome', '$setor')";

  $resultado = $dbh->exec($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Resultado</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
      if($resultado > 0){
        echo '<p>Cadastro feito com sucesso!</p>';
      }else{
        echo '<p>Cadastro nÃo realizado!</p>';
      }
    ?>
  </body>
</html> 
