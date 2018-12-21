<!DOCTYPE html>
<html>
<head>
    <title>EcoTrade | Cadastro</title>
</head>
<body>

    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'database');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $usuario = $_POST['usuario'];
    $numeroPessoa = $_POST['numeroPessoa'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    if(empty($_POST['nome']) || empty($_POST['sobrenome']) || empty($_POST['usuario']) || empty($_POST['numeroPessoa']) || empty($_POST['email']) || empty($_POST['senha']) )
    {
    
        echo '<script language="javascript">alert("Por favor, preencha todos os campos.")</script>';    
    }
    else{
    
        $consulta = mysqli_query($connection, "SELECT * FROM users WHERE numeroPessoa = '$numeroPessoa' ORDER BY id");
        $registro = mysqli_num_rows($consulta);
        if($registro>0)
        {

            echo '<script language="javascript">alert("Ops! CPF/CNPJ já cadastrado")</script>';

        }
        else
        {

            $consulta2 = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email' ORDER BY id");
            $registro2 = mysqli_num_rows($consulta2);

            if($registro2>0)
            {

                echo '<script language="javascript">alert("Ops! Email já cadastrado")</script>';

            }
            else
            {

                $consulta3 = mysqli_query($connection, "SELECT * FROM users WHERE usuario = '$usuario' ORDER BY id");
                $registro3 = mysqli_num_rows($consulta3);

                if($registro3>0)
                {

                    echo '<script language="javascript">alert("Ops! Usuario já cadastrado")</script>';

                }
                else
                {
                    mysqli_query($connection, "CREATE TABLE IF NOT EXISTS users (CREATE TABLE `database`.`users` ( `ID` INT NULL AUTO_INCREMENT ,  `nome` VARCHAR(250) NOT NULL ,  `sobrenome` VARCHAR(250) NOT NULL , `usuario` VARCHAR(250) NOT NULL , `numeroPessoa` VARCHAR(250) NOT NULL ,  `email` VARCHAR(250) NOT NULL ,  `senha` VARCHAR(250) NOT NULL ,    PRIMARY KEY  (`ID`)) ENGINE = InnoDB;) ");

                    mysqli_query($connection, "INSERT INTO users(nome, sobrenome, usuario, numeroPessoa, email, senha) VALUES('$nome', '$sobrenome', '$usuario', '$numeroPessoa', '$email', '$senha')");

                    echo '<script language="javascript">alert("Cadastro Finalizado com Sucesso!")</script>';

                    header('location:perfil.html');
                }
            }
        }
    
    }
?>

</body>
</html>