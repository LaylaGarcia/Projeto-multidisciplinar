<?php
  $nome   = $_GET['nome'];
  $cpf  = $_GET['cpf'];
  $rg  = $_GET['rg'];
  $datanascimento  = $_GET['data'];
  $endereço  = $_GET['endereço'];
  $estadocivil = $_GET['Estado civil'];
  $numero  = $_GET['numero de matricula'];
  $setor  = $_GET['setor'];
  $cargo  = $_GET['cargo'];
  $salario  = $_GET['salario'];
  $gestor  = $_GET['gestor'];
 
 

  $sql = "INSERT INTO dep VALUES ($nome, $cpf, '$rg', $numero, '$setor', '$estadocivil', $salario, '$gestor', $cargo', '$datanascimento', '$endereco');

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
        echo '<p>Erro no preenchimento cadastro nÃo realizado!</p>';
      }
    ?>
  </body>
</html> 
