<?php
if(isset($_REQUEST['logar'])){
$usuario = $_REQUEST['usuario'];
$senha   = $_REQUEST['senha'];

$msg ="";
$sql = "SELECT * FROM usuarios WHERE usuario ='$usuario' AND senha = '$senha' ";
$query = mysql_query($sql) or die(mysql_error());
$qtda  = mysql_num_rows($query);
if($qtda == 0){
	$msg = "Usuário e Senha Incorretos";
	//echo '<strong>Usuario e Senha incorretos</strong>';	
	}else{		
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha']   = $senha;
		header("Location: admin/painel.php");
		}
}
?>