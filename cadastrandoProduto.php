<!DOCTYPE html>
<html>
<head>
	<title>EcoTrade | Cadastro</title>
</head>
<body>

	<?php
    $connection = mysqli_connect('localhost', 'root', '', 'database');

    $nomeprod = $_POST['nomeprod'];
    $preco = $_POST['preco'];
    $qtd = $_POST['qtd'];
    $descricao = $_POST['descricao'];


    mysqli_query($connection, "CREATE TABLE IF NOT EXISTS produtos (CREATE TABLE `database`.`produtos` ( `ID` INT NULL AUTO_INCREMENT ,  `nomeprod` VARCHAR(250) NOT NULL ,  `preco` NUMBER(250) NOT NULL , `qtd` VARCHAR(50) NOT NULL , `descricao` VARCHAR(500) NOT NULL ,  PRIMARY KEY  (`ID`)) ENGINE = InnoDB;)");

    mysqli_query($connection, "INSERT INTO produtos(nomeprod, preco, qtd, descricao) VALUES('$nomeprod', '$preco', '$qtd', '$descricao')");

    echo '<script language="javascript">alert("Cadastro Finalizado com Sucesso!")</script>';
     	
?>

</body>
</html>

https://www.devmedia.com.br/criando-sessao-para-login-no-php/27347

/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:site.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:index.php');
   
  }
