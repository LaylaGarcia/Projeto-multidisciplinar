<?php
  $nome   = $_GET['nome'];
  $cpf  = $_GET['cpf'];
  $rg  = $_GET['rg'];
  $datanascimento  = $_GET['data']; 
  $endereco  = $_GET['endereco']; 
  $estadocivil = $_GET['estadocivil']; 
  $numero  = $_GET['numeromatricula']; 
  $setor  = $_GET['setor']; 
  $cargo  = $_GET['cargo']; 
  $salario  = $_GET['salario']; 
  $gestor  = $_GET['gestor']; 
 
 
 
  $dbh = new PDO('pgsql:host=localhost;port=5432;dbname=bancocadastro', 'postgres', 'postgres');		
  $sql = "INSERT INTO func VALUES ('$nome', $cpf, $rg, $numero, '$setor', '$estadocivil', $salario, '$gestor', '$cargo', '$datanascimento', '$endereco')";
  
  $resultado = $dbh->exec($sql);
  //echo $dbh->getMessage();
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
        echo '<p>Erro no preenchimento cadastro nao realizado!</p>';
      }
    ?>
  </body>
</html> 
