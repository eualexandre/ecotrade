<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- css -->
<link rel="stylesheet" type="text/css" href="style.css">
		
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<!-- titulo -->
<title>Eco Trade | Cadastrar</title>

<!-- icone -->
<link rel="icon" href="#">
		
<!--Bootstrap -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
	
<body>
<!-- barra de navegação -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="img/marca.png" alt="Eco Trade" width=240 height=40>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="telaInicio.php">Home</a></li>
        <li><a href="telaInicio.php">Quem Somos</a></li>
        <li><a href="telaInicio.php">Fale Conosco</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		<li  class="active"><a href="telaEntrar.php"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
      </ul>
	  
    </div>
  </div>
</nav>
	
<div class="container text-center">
	<div class="row"> </br> </br> </br> </br>
		<div class="col-sm-12 well">
			<form name="signin" method="post" action="entrando.php">
			
				<strong>
					<span class="titulo">Login</span>
				</strong>
				
				<div class="row">
					<div class="col-sm-3"></div>
					
					<div class="col-sm-6">
						<input class="form-control" type="text" name="usuario" placeholder="Usuário" required> </br>
						<input class="form-control" type="password" name="senha" placeholder="Senha" required> </br>
					</div>
				</div>
				
				<div class="col-sm-2"></div>
				
				<div class="col-sm-3">
					<div type="submit" value="Entrar" align="center"><a><button class="button">Entrar</button></a></div> </br>
				</div>
				
			</form>

			<div class="col-sm-2"></div>
			
			<div class="col-sm-3">
				<div type="submit" align="center"><a href="telaCadastro.html"><button class="button">Criar perfil</button></a></div> </br>
				
			</div>
			
			<div class="col-sm-2"></div>
			
			
		</div>
	</div>
</div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<!-- começo da section barra inderior-->
<section id="barra-inferior">
	<center>
        <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados à Eco Trade. <br> Proibida a reprodução sem autorização.</span>
    </center>
</section>
<!-- final da section barra inderior-->

</body>
</html>


</body>
</html>
