<?php 
	session_start();
	include '../config/conn.php';
	if(!isset($_SESSION['usuario']) && (!isset($_SESSION['senha']))){	
	header("Location: ../login.php");	
	}
	$secao_usuario = $_SESSION['usuario'];
	$secao_senha   = $_SESSION['senha'];
?>
<?php
	
				// cria a instrução SQL que vai selecionar os dados
				$dados = mysql_query("SELECT usuario, senha FROM usuarios WHERE usuario='$secao_usuario'") or die(mysql_error());
				// transforma os dados em um array 
				$linha = mysql_fetch_assoc($dados) or die(mysql_error()); 
				// calcula quantos dados retornaram 
				//$total = @mysql_num_rows($dados) or die(mysql_error());
					$votes = array();
					$votes[0] = $linha['usuario']; 
																	
?>

<?php
		if(isset($_REQUEST['recuperar'])){
			$sen_atual = $_REQUEST['troca_senha_atual'];
			$sen_nova  = $_REQUEST['troca_senha_nova'];
			$sen_nova2 = $_REQUEST['troca_senha_nova2'];
			
			$msg = "";
			
							if(empty($sen_atual) || empty($sen_nova) || empty($sen_nova2)){
								$msg = "Peencha todos os campos.";
							}else{
								//Todos os campos preenchidos
								if($secao_senha != $sen_atual){
									$msg = "Senha Atual Errada.";
								}elseif($sen_nova == $sen_atual){
									$msg = "Escolha Outra Senha.";
								}elseif($sen_nova != $sen_nova2){
									$msg = "Confirme a Senha Corretamente.";
								}else{
										mysql_query("UPDATE usuarios SET senha='$sen_nova' WHERE usuario='$secao_usuario' ") or die(mysql_error());
										$msg = "Senha Alterada com Sucesso.";
										}
							}
									
				
			}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROMO - Administração</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="../default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header">
	<div id="menu" class="container">
		
		<ul>
			<div id="logado"><h1>Bem vindo: <?php  echo $secao_usuario; ?></h1></div>
			<br />
			<li class="current_page_item"><a href="painel.php" accesskey="1" title="">Minha Conta</a></li>
			<li><a href="cadastrar_produto.php" accesskey="1" title="">Cadastrar Produtos</a></li>
			<li><a href="?sair" accesskey="5" title="">LOGOUT(SAIR)</a></li>
			<?php
				if(isset($_REQUEST['sair'])){	
					session_destroy();
					header("Location: ../login.php");	
					}
			?>
		</ul>
	</div>
</div>


<div id="featured-wrapper-2">
	<div id="featured-2" class="container">
		<div class="major">
			<h2>Minha Conta </h2>
		</div>
		<div class="column1-2">
			<span class="icon"><img src="../imagens/avatar.png" width="110px" height="110px"></span>
			<div class="title">
				<h2><?php  echo $secao_usuario; ?></h2>
				<?php
				
				?>
				<span class="byline" align="left">
					<strong>Nome: </strong><?php  echo $votes[0]; ?><br />
					<strong>Sobrenome: </strong> <!-- <?php  echo $votes[1]; ?> --><br />
				</span>
			</div>
		</div>
		<div class="column2-2">
			<span class="icon"><img src="../imagens/cadeado.png" width="110px" height="110px"></span>
			<div class="title">
				<h2>Alterar Senha</h2>
				<span class="byline">
					<form action="" name="recuperar" enctype="multipart/form-data" method="post" class="forgot_password">
						
						<div>
							<label ><strong>Senha Atual</strong></label><br />
							<input type="text" name="troca_senha_atual" id="usua_email" maxlength="12" /><br />
							<label><strong>Nova Senha</strong></label><br />
							<input type="password" name="troca_senha_nova" id="usua_email" maxlength="12" /><br />
							<label><strong>Confirmar Senha</strong></label><br />
							<input type="password" name="troca_senha_nova2" id="usua_email" maxlength="12" /><br />
						</div>
						<div id="painel">
						
							<input type="submit" value="Alterar Senha" name="recuperar"></input>
							
						</div>
					</form>
				</span>
				<?php echo @$msg ?>
			</div>
		</div>
		<div class="column3-2">
			<span class="icon"><img src="../imagens/tempo.png" width="110px" height="110px"></span>
			<div class="title">
				<h2>Tempo De Acesso</h2>
				<span class="byline" align="center">
				</span>

			</div>
		</div>
	</div>
</div>

<div id="copyright" class="container">
	<p>Copyright (c) 2016 wmwebsites.com.br | Todos os direitos reservados | Design by <a href="http://www.wmwebsites.com.br" rel="nofollow"><strong>www.wmwebsites.com.br</strong></a></p>
</div>
</body>
</html>
