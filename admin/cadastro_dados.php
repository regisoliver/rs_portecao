<?php
 	ini_set('default_charset','UTF-8');
	include '../config/conn.php';
	if(!isset($_SESSION['usuario']) && (!isset($_SESSION['senha']))){	
		header("Location: ../login.php");	
	}
	
	$secao_usuario = $_SESSION['usuario'];
	$secao_senha   = $_SESSION['senha'];
	$nova_foto_nome1 = '';
	$nova_foto_nome2 = '';
	$nova_foto_nome3 = '';
	$nova_foto_nome4 = '';
	$aprovado = '';
 
 if(isset($_REQUEST['envia_foto'])){

	$msg_s = "";
	$msg_n = "";
	$t = time();
	$datahoje = date("d/m/Y"); //pega a data de hoje para todos os cadastros
	
	$nome_um = $_REQUEST['nome_produto_um'];
	$segmento_um = $_REQUEST['segmento_um'];
	$marca_um = $_REQUEST['marca_produto_um'];
	$descricao_um = $_REQUEST['descricao_produto_um'];
	
	$nome_dois = $_REQUEST['nome_produto_dois'];
	$segmento_dois = $_REQUEST['segmento_dois'];
	$marca_dois = $_REQUEST['marca_produto_dois'];
	$descricao_dois = $_REQUEST['descricao_produto_dois'];
	
	$nome_tres = $_REQUEST['nome_produto_tres'];
	$segmento_tres = $_REQUEST['segmento_tres'];
	$marca_tres = $_REQUEST['marca_produto_tres'];
	$descricao_tres = $_REQUEST['descricao_produto_tres'];
	
	$nome_quatro = $_REQUEST['nome_produto_quatro'];
	$segmento_quatro = $_REQUEST['segmento_quatro'];
	$marca_quatro = $_REQUEST['marca_produto_quatro'];
	$descricao_quatro = $_REQUEST['descricao_produto_quatro'];
	
	$nova_foto1 = $_FILES['foto_primeira']['name'];
	$nova_foto2 = $_FILES['foto_segunda']['name'];
	$nova_foto3 = $_FILES['foto_terceira']['name'];
	$nova_foto4 = $_FILES['foto_quarta']['name'];
	
	// cria a instruзгo SQL que vai selecionar os dados
	//$ativo_agora = mysql_query("SELECT ativo, nome FROM usuarios WHERE usuario='$secao_usuario'") or die(mysql_error());
	// transforma os dados em um array 
	//$linha_dois = mysql_fetch_assoc($ativo_agora) or die(mysql_error());
	
	//$arquivo = array();
	//$arquivo[0] = $linha_dois['ativo'];
	//$arquivo[1] = $linha_dois['nome'];
	
	if(!empty($nova_foto1) && !empty($nome_um) && !empty($segmento_um) 
	|| !empty($nova_foto2) && !empty($nome_dois) && !empty($segmento_dois)
	|| !empty($nova_foto3) && !empty($nome_tres) && !empty($segmento_tres)
	|| !empty($nova_foto4) && !empty($nome_quatro) && !empty($segmento_quatro) )
	{
		if(!empty($nova_foto1))
		{
			$nova_foto_nome1 = $t."_".$nova_foto1;
			copy($_FILES['foto_primeira']['tmp_name'], "imagens/produtos/".$nova_foto_nome1);
		}
					
		if(!empty($nova_foto2))
		{
			$nova_foto_nome2 = $t."_".$nova_foto2;
			copy($_FILES['foto_segunda']['tmp_name'], "imagens/produtos/".$nova_foto_nome2);
		}
					
		if(!empty($nova_foto3))
		{
			$nova_foto_nome3 = $t."_".$nova_foto3;
			copy($_FILES['foto_terceira']['tmp_name'], "imagens/produtos/".$nova_foto_nome3);
		}
					
		if(!empty($nova_foto4))
		{
			$nova_foto_nome4 = $t."_".$nova_foto4;
			copy($_FILES['foto_quarta']['tmp_name'], "imagens/produtos/".$nova_foto_nome4);
		}
		
		// Aqui comeзa a inserir os anuncios caso tenha sido inserido.
		if(!empty($nova_foto1) && !empty($nome_um) && !empty($segmento_um)){
			$sql_inserir = mysql_query("INSERT INTO ".$segmento_um."(nome, segmento, marca, descricao, foto, data) VALUES ('$nome_um', '$segmento_um', '$marca_um', '$descricao_um', '$nova_foto_nome1', '$datahoje')") or die(mysqli_error());
			mysql_query($sql_inserir);
			$aprovado++;
		}
		
		if(!empty($nova_foto2) && !empty($nome_dois) && !empty($segmento_dois)){
			$sql_inserir = mysql_query("INSERT INTO ".$segmento_dois."(nome, segmento, marca, descricao, foto, data) VALUES ('$nome_dois', '$segmento_dois', '$marca_dois', '$descricao_dois', '$nova_foto_nome2', '$datahoje')") or die(mysqli_error());
			mysql_query($sql_inserir);
			$aprovado++;
		}
		
		if(!empty($nova_foto3) && !empty($nome_tres) && !empty($segmento_tres)){
			$sql_inserir = mysql_query("INSERT INTO ".$segmento_tres."(nome, segmento, marca, descricao, foto, data) VALUES ('$nome_tres', '$segmento_tres', '$marca_tres', '$descricao_tres', '$nova_foto_nome3', '$datahoje')") or die(mysqli_error());
			mysql_query($sql_inserir);
			$aprovado++;
		}
		
		if(!empty($nova_foto4) && !empty($nome_quatro) && !empty($segmento_quatro)){
			$sql_inserir = mysql_query("INSERT INTO ".$segmento_quatro."(nome, segmento, marca, descricao, foto, data) VALUES ('$nome_quatro', '$segmento_quatro', '$marca_quatro', '$descricao_quatro', '$nova_foto_nome4', '$datahoje')") or die(mysqli_error());
			mysql_query($sql_inserir);
			$aprovado++;
		}
		
		if( $aprovado == 1){
			$msg_s = "( " . $aprovado . " Produto Cadastrado com Sucesso. )";
		}else{
			$msg_s = "( " . $aprovado . " Produtos Cadastrados com Sucesso. )";
		}
	}else{
		$msg_n = "( Cadastre pelo menos um Produto. )";
		}
}

?>