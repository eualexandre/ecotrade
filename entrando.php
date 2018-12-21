<!DOCTYPE html>
<html>
<head>
	<title>EcoTrade | Cadastro</title>
</head>
<body>

<?php

    $connection = mysqli_connect('localhost', 'root', '', 'database');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if(empty($_POST['usuario']) || empty($_POST['senha'])){

        echo '<script language="javascript">alert("Por favor, preencha todos os campos.")</script>';

    }else{
        $consulta = mysqli_query($connection, "SELECT * FROM users WHERE usuario = '$usuario' AND senha = '$senha' ORDER BY id");
        $registro = mysqli_num_rows($consulta);

        if($registro>0)
        {

            echo '<script language="javascript">alert("Usuario logado!")</script>';

            header('location:perfil.html');

        }
        else{

            echo '<script language="javascript">alert("Ops! Usuario não cadastrado.")</script>';

        }
    }

?>

</body>
</html>





