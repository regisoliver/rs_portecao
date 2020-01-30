<?php
	session_start();
	include '../config/conn.php';
	include 'cadastro_dados.php';
	
	$secao_usuario = $_SESSION['usuario'];
	$secao_senha   = $_SESSION['senha'];

	if(!isset($_SESSION['usuario']) && (!isset($_SESSION['senha']))){	
		header("Location: ../login.php");	
	}
?>

<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>25 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>RS - Administração</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="../default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<script language="javascript">

function validaForm(){
		if (document.envia_foto.grupos.selectedIndex==0){ 
      	 alert("Escolha uma categoria.") 
      	 document.envia_foto.grupos.focus() 
      	 return false; 
   		} 
		
		if (document.envia_foto.marca_id.selectedIndex==0){ 
      	 alert("Escolha uma marca.") 
      	 document.envia_foto.marca_id.focus() 
      	 return false; 
   	} 
}
</script>

</head>
<body>
<div id="header">
	<div id="menu" class="container">
		
		<ul>
			<div id="logado"><h1>Bem vindo: <?php  echo $secao_usuario; ?></h1></div>
			<br />
			<li><a href="painel.php" accesskey="1" title="">Minha Conta</a></li>
			<li class="current_page_item"><a href="cadastrar_produto.php" accesskey="1" title="">Cadastrar Produtos</a></li>
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
		<br />
        <br />
		<div>
    		<h3 align="center" style="color:#00F"><?php echo @$msg_s ?></h3>
            <h3 align="center" style="color:#F00"><?php echo @$msg_n ?></h3>
    	</div>

<div id="portfolio-wrapper">	
	<div  class="major">
		<h2 align="center">Cadastre seus Produtos</h2>
        <span class="byline">Cadastre até 4 Produtos de uma vez</span>
    </div>
    
	<div id="formulario-cadastra">
							
	<form method="post" action="" name="envia_foto" enctype="multipart/form-data">
    
    <!--  Produto 1 -->
    <div id="esquerda">
    	Foto do Produto 1:<br />
        <input name="foto_primeira" type="file" id="foto_primeira" size="25" />
        <br />
        <br />
        Nome do Produto 1:<br />
        <input name="nome_produto_um" type="text" id="nome_produto_um" size="36" maxlength="30" />
        <br />
        <br />
        Marca do Produto 1:<br />
        <input name="marca_produto_um" type="text" id="marca_produto_um" size="36" maxlength="30" />
        <br />
        <br />
        Segmento do Produto 1:
        <select name="segmento_um" id="segmento_um" maxlength="30" >
        	<option value="" selected="selected">Selecione o Segmento</option>
            <option value="abrigos">Abrigos</option>
            <option value="apicultor">Apicultor</option>
            <option value="diversos">Diversos</option>
            <option value="luvas">Luvas</option>
            <option value="motosserrista">Motosserrista</option>
            <option value="perneiras">Perneiras</option>
            <option value="protecao_contra_corte">Proteção Contra Corte</option>
            <option value="rocador">Roçador</option>
            <option value="uniformes">Uniformes</option>
        </select>
        <br />
        <br />
        Descrição do Produto 1:
        <textarea name="descricao_produto_um" id="textearea" maxlength="200"></textarea>
    </div>
    
    <!--  Produto 2 -->
    <div id="esquerda">
    	Foto do Produto 2:<br />
        <input name="foto_segunda" type="file" id="foto_segunda" size="25" />
        <br />
        <br />
        Nome do Produto 2:<br />
        <input name="nome_produto_dois" type="text" id="nome_produto_dois" size="36" maxlength="30" />
        <br />
        <br />
        Marca do Produto 2:<br />
        <input name="marca_produto_dois" type="text" id="marca_produto_dois" size="36" maxlength="30" />
        <br />
        <br />
        Segmento do Produto 2:
        <select name="segmento_dois" id="segmento_dois" maxlength="30" >
        	<option value="" selected="selected">Selecione o Segmento</option>
            <option value="abrigos">Abrigos</option>
            <option value="apicultor">Apicultor</option>
            <option value="diversos">Diversos</option>
            <option value="luvas">Luvas</option>
            <option value="motosserrista">Motosserrista</option>
            <option value="perneiras">Perneiras</option>
            <option value="protecao_contra_corte">Proteção Contra Corte</option>
            <option value="rocador">Roçador</option>
            <option value="uniformes">Uniformes</option>
        </select>
        <br />
        <br />
        Descrição do Produto 2:
        <textarea name="descricao_produto_dois" id="textearea" maxlength="200"></textarea>
    </div>
    
    <!--  Produto 3 -->
    <div id="esquerda">
    	Foto do Produto 3:<br />
        <input name="foto_terceira" type="file" id="foto_terceira" size="25" />
        <br />
        <br />
        Nome do Produto 3:<br />
        <input name="nome_produto_tres" type="text" id="nome_produto_tres" size="36" maxlength="30" />
        <br />
        <br />
        Marca do Produto 3:<br />
        <input name="marca_produto_tres" type="text" id="marca_produto_tres" size="36" maxlength="30" />
        <br />
        <br />
        Segmento do Produto 3:
        <select name="segmento_tres" id="segmento_tres" maxlength="30" >
        	<option value="" selected="selected">Selecione o Segmento</option>
            <option value="abrigos">Abrigos</option>
            <option value="apicultor">Apicultor</option>
            <option value="diversos">Diversos</option>
            <option value="luvas">Luvas</option>
            <option value="motosserrista">Motosserrista</option>
            <option value="perneiras">Perneiras</option>
            <option value="protecao_contra_corte">Proteção Contra Corte</option>
            <option value="rocador">Roçador</option>
            <option value="uniformes">Uniformes</option>
        </select>
        <br />
        <br />
        Descrição do Produto 3:
        <textarea name="descricao_produto_tres" id="textearea" maxlength="200"></textarea>
    </div>
    
    <!--  Produto 4 -->
    <div id="esquerda">
    	Foto do Produto 4:<br />
        <input name="foto_quarta" type="file" id="foto_quarta" size="25" />
        <br />
        <br />
        Nome do Produto 4:<br />
        <input name="nome_produto_quatro" type="text" id="nome_produto_quatro" size="36" maxlength="30" />
        <br />
        <br />
        Marca do Produto 4:<br />
        <input name="marca_produto_quatro" type="text" id="marca_produto_quatro" size="36" maxlength="30" />
        <br />
        <br />
        Segmento do Produto 4:
        <select name="segmento_quatro" id="segmento_quatro" maxlength="30" >
        	<option value="" selected="selected">Selecione o Segmento</option>
            <option value="abrigos">Abrigos</option>
            <option value="apicultor">Apicultor</option>
            <option value="diversos">Diversos</option>
            <option value="luvas">Luvas</option>
            <option value="motosserrista">Motosserrista</option>
            <option value="perneiras">Perneiras</option>
            <option value="protecao_contra_corte">Proteção Contra Corte</option>
            <option value="rocador">Roçador</option>
            <option value="uniformes">Uniformes</option>
        </select>
        <br />
        <br />
        Descrição do Produto 4:
        <textarea name="descricao_produto_quatro" id="textearea" maxlength="200"></textarea>
    </div>
    	<div id="cad_botao">
        <br />
        <br />
    		<input name="envia_foto" value="Cadastrar" type="submit" />
    	</div>
    	</form>
    </div>
    
</div>

<br />
<br />
<br /><br />
<br />
<br />
<div id="copyright" class="container">
	<p>Copyright (c) 2015 wmwebsites.com.br | Todos os direitos reservados | Design by <a href="http://www.wmwebsites.com.br" rel="nofollow"><strong>www.wmwebsites.com.br</strong></a></p>
</div>
</body>
</html>
