<!DOCTYPE html>

<?php

session_start();


if (isset($_SESSION['online'])) {
    
    echo "Você está online!";
} else {

    echo "<a href='login/login.php'>  </a>";
}


$caminho_imagem = "imagens/tipos.png";
$camin_imagem ="imagens/veiculos.png";

?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="icon.css" rel="stylesheet" type="text/css" media="all" />

</head>

<style>
	.box {
    border-radius: 8px;
    padding: 20px;
    background-color: #f5f5f5;
    transition: box-shadow 0.3s ease;
}

.box:hover {
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
}
</style>

<body>
    <div id="wrapper1">
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <div id="wrapper1">
                        <div id="espaço_container" class="container">
                            <div id="logo_site">
                                
                                <img src="<?php echo $caminho_imagem; ?>" alt="tipos.png" width="980" height="390">
                            </div>
                        </div>
                    </div>
                    <h1><a href="#">Gerenciamento de Aluguel de Carros</a></h1>
                    <div id="menu">


							<li><a href="index.php" accesskey="3" title="">Principal</a></li>
							<li><a href="catalogo.php" accesskey="3" title="">catalogo</a></li>
							<li><a href="login/login.php" accesskey="7" title="">Login</a></li>
							<li><a href="contato.php" accesskey="7" title="">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="wrapper2">
				<div id="welcome" class="container">
					<div class="title">
						<h2>Bem-vindo(a) ao Sistema de Aluguel mais moderno do mundo</h2>
					</div>
					<h3>Este é um sistema desenvolvido para facilitar o <strong>gerenciamento</strong> de aluguel de veículos.</h3>
				</div>
			</div>
			<div id="wrapper3">
				<div id="portfolio" class="container">
					<div class="title">
						<h2>Vantagens de se alugar um automóvel</h2>
					</div>
					<div class="column1">
						<div class="box">
							<span class="icon icon-wrench"></span>
							<h3>Não se preocupe com manutenção</h3>
							<p>A manutenção é por conta nossa. Apenas preocupe-se em diigir!</p>
						</div>
					</div>
					<div class="column2">
						<div class="box">
							<span class="icon icon-trophy"></span>
							<h3>Ganhe tempo, notoriedade e agilidade!</h3>
							<p>Use o automóvel para poupar tempo, ganhar notoriedade e adigilidade!</p>

						</div>
					</div>
					<div class="column3">
						<div class="box">
							<span class="icon icon-key"></span>
							<h3>Abra possibilidades!</h3>
							<p>Um automóvel te dá possibilidades de momentos incriveis e inesquecíveis. Um onibus e um metro não... </p>
						</div>
					</div>
					<div class="column4">
						<div class="box">
							<span class="icon icon-lock"></span>
							<h3>Sua viagem assegurada!</h3>
							<p>Não se preocupe! Todos os automoveis têm seguro. Qualquer problema é só chamar!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper1">
			<div id="espaço_container" class="container">
				<div class="title">
					<h2>Temos todos os tipos de automóveis!</h2>
					<img src="<?php echo $camin_imagem; ?>" alt="veiculos.png" width=800 height=280>
				</div>
			</div>
		</div>
		<div id="espaço_container" class="container">
			<div class="title">
				<h2>Acesse nossas redes sociais!</h2>
				<span class="byline">Estamos sempre a disposição de nossos clientes!</span>
			</div>
			<ul class="contact">
				<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
				<li><a href="#" class="icon icon-facebook"><span></span></a></li>
				<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
				<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
			</ul>
			<div id="espaço_container" class="container">
			</div>
		</div>
</body>

</html>