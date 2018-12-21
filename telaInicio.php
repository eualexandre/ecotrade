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
	
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
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
        <li><a href="#myPage">Home</a></li>
        <li><a href="#quem-somos">Quem Somos</a></li>
        <li><a href="#fale">Fale Conosco</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		<li  class="active"><a href="telaEntrar.php"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
      </ul>
	  
    </div>
  </div>
</nav> </br> </br>

<!-- começo da section catalogo-->
<div class="container-fluid bg-1 text-center">
		</br>
		<a href=""><img src="img/produto-quadrado.jpg" class="produto-catalogo"></a>
		<a href=""><img src="img/produto-quadrado.jpg" class="produto-catalogo"></a>
		<a href=""><img src="img/produto-quadrado.jpg" class="produto-catalogo"></a>
		<a href=""><img src="img/produto-quadrado.jpg" class="produto-catalogo"></a>
	<div class="row">
		<div type="submit" align="center"><a href="#" ><button class="button" id="vm-catalogo"><strong>Ver Mais</strong></button></a></div> </br>		
	</div>
</div>

<!-- começo da section quem somos-->
<div class="container-fluid text-center" id="quem-somos">
	<div class="col-sm-12 ">
		<div class="row" id="quem-somos" class="container"> </br> </br> </br>
			<strong>
				<span class="titulo">Um pouco sobre o projeto...</span>
			</strong>
		</div>
		
		<div class="row">
			<div class="col-sm-2"></div>
			
			<div class="col-sm-3 paragrafo">
						<strong><br>Reciclar, Criar, Lucrar.<br></strong>
						O descarte inadequado dos materiais é uma questão alarmante na sociedade atual, pensando nisso, nós da eco trade pensamos em uma alternativa para procurar reduzir significativamente o dilema e as suas terríveis consequências. </br></br>
						Ademais, o que é lixo para alguns pode ser algo de extrema utilidade da vida de outros, e isso é uma verdade que tem sido esquecida por muitos. Então, por que jogar fora algo que você pode vender, não somente ajudando o planeta (reduzindo a quantidade de lixo produzido), mas também ajudando outras pessoas que podem ver grande valor nesses materiais. </br></br>
						Pensando na preservação do meio ambiente e em uma melhor qualidade de vida, a Eco Tarde tem como objetivo reduzir o descarte inadequado de materiais que ainda podem ser utilizados. </br></br>
						Abrace também essa ideia e venha conosco construir um planeta melhor.
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-3"> 
				</br></br>
				<img src="img/plantar-dinheiro.png" style="width:100% ">
			</div>
			<div class="col-sm-2"></div>
		</div>
</div>
</div> </br></br>
<!-- final da section quem somos-->



	<!-- começo da section fale conosco-->
<div class="container-fluid bg-1 text-center" id="fale">
	<div class="col-sm-12">
		<div class="row">
			<strong>
				<p class="titulo">Mande um alô!</p>
			</strong>
		</div>
		
		<div class="row">
		
			<div class="col-sm-1"></div>
			
			<div class="col-sm-4">
				<img src="img/plantar-dinheiro.png" style="width: 100%;">
			</div> </br>
			
			<div class="col-sm-1"></div>
			
			<div class="col-sm-5">
				<div class="form-group">
					<input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" required>
				</div>
			
				<div class="form-group">
					<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
				</div>
				
				<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea> </br>
				 
				<button class="btn pull-right" type="submit">Send</button>
			</div>
			
			<div class="col-sm-1"></div>
   
		</div></br></br>
	</div>
</div>
	<!-- final da section fale conosco-->

<!-- começo da section barra inderior-->
<section id="barra-inferior">
	<center>
        <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados à Eco Trade. <br> Proibida a reprodução sem autorização.</span>
    </center>
</section>
<!-- final da section barra inderior-->


	</body>
</html>
