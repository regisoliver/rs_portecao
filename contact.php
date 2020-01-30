<?php
// Free Bootstrap Themes : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Erro! Tente novamente.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "vendas@rsprotecao.com.br";
	$subject = "Mensagem do Site Rs Protecao";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "RsProtecao.com.br";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Sua Mensagem Foi Enviada Com Sucesso !</span>";
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>RS PROTEÇÃO</title>
	<meta name="description" content="Rs Proteção com inovações para o seu futuro.">
	<meta name="author" content="www.wmwebsites.com.br">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/script.js"></script>
	
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header >
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <li><a href="index.html">Home</a></li>
				   <li><a href="single.html">Empresa</a></li>
				   <li><a href="archive.php">Portfolio</a></li>
				   <li class='active'><a href="contact.html">Contato</a></li>
				</ul>
			</div>
			<a href='index.html' class="logo"><img src="images/logo_antiga_02.fw.png" /></a>
		</div>
	</div>
</header>


<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div id="main-content">
			<div class="sub-header">
				<div class="zerogrid"> 
					<h1>Contato</h1>
					Use the form below to get in touch with us. Share your specific requirements and we'll be happy to reply back shortly. You are also welcome to contact us via phone, emial or at our office during working hours.
				</div>
			</div>	
			<div class="zerogrid">
				<div class="row">
					<div class='embed-container maps'>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3699.466541210782!2d-48.38329604902705!3d-21.99342801137561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b895e87ea381e1%3A0x4a315e8fb56bb379!2sR.+dos+Furlan%2C+476%2C+Boa+Esperan%C3%A7a+do+Sul+-+SP%2C+14930-000!5e0!3m2!1spt-BR!2sbr!4v1469214118167" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
					</div>
					<div class="col-2-3">
						<div class="wrap-col">
							<div class="contact">
								<h5 class="color-orange">Envie uma Mensagem</h5>
								<!--Warning-->
								<center><?php echo $text;?></center>
								<!---->
								<div id="contact_form">
									<form name="form1" id="ff" method="post" action="contact.php">
										<label class="row">
											<input type="text" name="name" id="name" placeholder="Nome" required />
										</label>
										<label class="row">
											<input type="text" name="email" id="email" placeholder="Email" required />
										</label>
										<label class="row">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" requiredplaceholder="Mensagem"></textarea>
										</label>
										<center><input class="btn" type="submit" name="Submit" value="Enviar"></center>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<h5 class="color-orange">Informações de Contato</h5>
								<span>ENTRE EM CONTATO COM NOSSA EQUIPE E GARANTA A MELHOR PROTEÇÃO PARA SUA EMPRESA.</span>
								<p><b>Telefone:</b></p>
							<ul class="link">
								<li><a href="#">(16) 3346-8080</a></li>
							</ul>
                            <p><b>E-mail:</b></p>
                            <ul class="link">
								<li><a href="#">vendas@rsprotecao.com.br</a></li>
                                <li><a href="#">comercial@rsprotecao.com.br</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer>
	<div class="wrap-footer">
		<div class="zerogrid">
			<div class="row">
				<h3><img src="images/logo_rodape.fw.png">RS PROTEÇÃO</h3>
                <span>&#9679; SERGIO GAMBA ME - EQUIPAMENTOS DE PROTEÇÃO INDIVIDUAL (EPI)</span><br>
                <span>&#9679; Rua dos Furlan, 476, Jd. Primavera - Boa Esperança do Sul - SP &#9679; CEP 14.930-000</span></br>
				<span>&#9679; Telefone: (16) 3346-8080 </span> &#9679; 
				<span>E-mail: vendas@rsprotecao.com.br </span></br>
				<br>
				<span><strong>Copyright RS Proteção &copy; Todos os direitos reservados. Desenvolvido por <a href="http://www.wmwebsites.com.br/" rel="nofollow" target="_blank">WM WEBSITES</a></strong></span>
			</div>
		</div>
	</div>
</footer>

	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>

</div>
</body></html>