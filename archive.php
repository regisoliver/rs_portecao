<?php
	include 'config/conn.php';

    $dados_1 = mysql_query(" SELECT * FROM abrigos ") or die(mysql_error());
	$dados_2 = mysql_query(" SELECT * FROM apicultor ") or die(mysql_error());
	$dados_3 = mysql_query(" SELECT * FROM diversos ") or die(mysql_error());
	$dados_4 = mysql_query(" SELECT * FROM luvas ") or die(mysql_error());
	$dados_5 = mysql_query(" SELECT * FROM motosserrista ") or die(mysql_error());
	$dados_6 = mysql_query(" SELECT * FROM perneiras ") or die(mysql_error());
	$dados_7 = mysql_query(" SELECT * FROM protecao_contra_corte ") or die(mysql_error());
	$dados_8 = mysql_query(" SELECT * FROM rocador ") or die(mysql_error());
	$dados_9 = mysql_query(" SELECT * FROM uniformes ") or die(mysql_error());
    
    // transforma os dados em um array 
    $linha_1 = mysql_fetch_assoc($dados_1);
	$linha_2 = mysql_fetch_assoc($dados_2);
	$linha_3 = mysql_fetch_assoc($dados_3);
	$linha_4 = mysql_fetch_assoc($dados_4);
	$linha_5 = mysql_fetch_assoc($dados_5);
	$linha_6 = mysql_fetch_assoc($dados_6);
	$linha_7 = mysql_fetch_assoc($dados_7);
	$linha_8 = mysql_fetch_assoc($dados_8);
	$linha_9 = mysql_fetch_assoc($dados_9);
 
    // calcula quantos dados retornaram 
    $total_1 = mysql_num_rows($dados_1);
	$total_2 = mysql_num_rows($dados_2);
	$total_3 = mysql_num_rows($dados_3);
	$total_4 = mysql_num_rows($dados_4);
	$total_5 = mysql_num_rows($dados_5);
	$total_6 = mysql_num_rows($dados_6);
	$total_7 = mysql_num_rows($dados_7);
	$total_8 = mysql_num_rows($dados_8);
	$total_9 = mysql_num_rows($dados_9); 
?> 

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

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
				   <li class='active'><a href="archive.php">Portfolio</a></li>
				   <li><a href="contact.html">Contato</a></li>
				</ul>
			</div>
			<a href='index.html' class="logo"><img src="images/logo_antiga_02.fw.png" /></a>
		</div>
	</div>
</header>


<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="sub-header ">
			<div class="zerogrid"> 
				<h1>Portfolio</h1>
				Confira todos os nossos produtos. Garantia de qualidade desde 1993 no mercado.
			</div>
		</div>	
		<div class="zerogrid">
			
            <!-- PORTFOLIO -->

	<div id="wrapper-container">
    
		<div class="container object">

			<div id="main-container-image">
                    <h4>&#8227; Abrigos</h4>
                    <section class="work">
                        <?php 
							// se o número de resultados for maior que zero, mostra os dados
						if($total_1 > 0 && $linha_1['segmento'] == 'abrigos' ) { 
							// inicia o loop que vai mostrar todos os dados 
							do { 
						?> 	
						<figure class="white">
							<a href="#">
								<img src="admin/imagens/produtos/<?=$linha_1['foto']?>" alt=""/>
								<dl>
									<dt>Descrição:</dt>
									<dd><?=$linha_1['descricao']?></dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="images/icons/produtos/01.fw.png" alt="" width="28" height="28"/></div>
                            	<div id="part-info"><?=$linha_1['nome']?></div>
							</div>
                        </figure>
                        <?php 
		 					// finaliza o loop que vai mostrar os dados 
		 					}while($linha_1 = mysql_fetch_assoc($dados_1)); 
		 					// fim do if 
		 				} ?>	
                   </section>
                   <section class="work">
                        
                        </br>
                        <h4>&#8227; Apicultor</h4>
                        <?php 
							// se o número de resultados for maior que zero, mostra os dados
						if($total_2 > 0 && $linha_2['segmento'] == 'apicultor' ) { 
							// inicia o loop que vai mostrar todos os dados 
							do { 
						?>
                        
						<figure class="white">
							<a href="#">
								<img src="admin/imagens/produtos/<?=$linha_2['foto']?>" alt="" />
								<dl>
									<dt>Descrição:</dt>
									<dd><?=$linha_2['descricao']?></dd>
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="images/icons/produtos/02.fw.png" alt="" width="28" height="28"/></div>
                            	<div id="part-info"><?=$linha_2['nome']?></div>
							</div>
						</figure>
                        <?php 
		 					// finaliza o loop que vai mostrar os dados 
		 					}while($linha_2 = mysql_fetch_assoc($dados_2)); 
		 					// fim do if 
		 				} ?>
					</section>
                    <section class="work">
                        
                        </br>
                        <h4>&#8227; Diversos</h4>
                        <?php 
							// se o número de resultados for maior que zero, mostra os dados
						if($total_3 > 0 && $linha_3['segmento'] == 'diversos' ) { 
							// inicia o loop que vai mostrar todos os dados 
							do { 
						?>
                        
						<figure class="white">
							<a href="#">
								<img src="admin/imagens/produtos/<?=$linha_3['foto']?>" alt="" />
								<dl>
									<dt>Descrição:</dt>
									<dd><?=$linha_3['descricao']?></dd>
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="images/icons/produtos/03.fw.png" alt="" width="28" height="28"/></div>
                            	<div id="part-info"><?=$linha_3['nome']?></div>
							</div>
						</figure>
                        <?php 
		 					// finaliza o loop que vai mostrar os dados 
		 					}while($linha_3 = mysql_fetch_assoc($dados_3)); 
		 					// fim do if 
		 				} ?>
					</section>
                    <section class="work">
                        
                        </br>
                        <h4>&#8227; Luvas</h4>
                        <?php 
							// se o número de resultados for maior que zero, mostra os dados
						if($total_4 > 0 && $linha_4['segmento'] == 'luvas' ) { 
							// inicia o loop que vai mostrar todos os dados 
							do { 
						?>
                        
						<figure class="white">
							<a href="#">
								<img src="admin/imagens/produtos/<?=$linha_4['foto']?>" alt="" />
								<dl>
									<dt>Descrição:</dt>
									<dd><?=$linha_4['descricao']?></dd>
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="images/icons/produtos/04.fw.png" alt="" width="28" height="28"/></div>
                            	<div id="part-info"><?=$linha_4['nome']?></div>
							</div>
						</figure>
                        <?php 
		 					// finaliza o loop que vai mostrar os dados 
		 					}while($linha_4 = mysql_fetch_assoc($dados_4)); 
		 					// fim do if 
		 				} ?>
					</section>
                    <section class="work">
                        
                        </br>
                        <h4>&#8227; Motosserrista</h4>
                        <?php 
							// se o número de resultados for maior que zero, mostra os dados
						if($total_5 > 0 && $linha_5['segmento'] == 'motosserrista' ) { 
							// inicia o loop que vai mostrar todos os dados 
							do { 
						?>
                        
						<figure class="white">
							<a href="#">
								<img src="admin/imagens/produtos/<?=$linha_5['foto']?>" alt="" />
								<dl>
									<dt>Descrição:</dt>
									<dd><?=$linha_5['descricao']?></dd>
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="images/icons/produtos/05.fw.png" alt="" width="28" height="28"/></div>
                            	<div id="part-info"><?=$linha_5['nome']?></div>
							</div>
						</figure>
                        <?php 
		 					// finaliza o loop que vai mostrar os dados 
		 					}while($linha_5 = mysql_fetch_assoc($dados_5)); 
		 					// fim do if 
		 				} ?>
					</section>
                    <section class="work">
                        
                        </br>
                        <h4>&#8227; Perneiras</h4>
                        <?php 
							// se o número de resultados for maior que zero, mostra os dados
						if($total_6 > 0 && $linha_6['segmento'] == 'perneiras' ) { 
							// inicia o loop que vai mostrar todos os dados 
							do { 
						?>
                        
						<figure class="white">
							<a href="#">
								<img src="admin/imagens/produtos/<?=$linha_6['foto']?>" alt="" />
								<dl>
									<dt>Descrição:</dt>
									<dd><?=$linha_6['descricao']?></dd>
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="images/icons/produtos/06.fw.png" alt="" width="28" height="28"/></div>
                            	<div id="part-info"><?=$linha_6['nome']?></div>
							</div>
						</figure>
                        <?php 
		 					// finaliza o loop que vai mostrar os dados 
		 					}while($linha_6 = mysql_fetch_assoc($dados_6)); 
		 					// fim do if 
		 				} ?>
					</section>
                    <section class="work">
                        
                        </br>
                        <h4>&#8227; Proteção Contra Corte</h4>
                        <?php 
							// se o número de resultados for maior que zero, mostra os dados
						if($total_7 > 0 && $linha_7['segmento'] == 'protecao_contra_corte' ) { 
							// inicia o loop que vai mostrar todos os dados 
							do { 
						?>
                        
						<figure class="white">
							<a href="#">
								<img src="admin/imagens/produtos/<?=$linha_7['foto']?>" alt="" />
								<dl>
									<dt>Descrição:</dt>
									<dd><?=$linha_7['descricao']?></dd>
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="images/icons/produtos/07.fw.png" alt="" width="28" height="28"/></div>
                            	<div id="part-info"><?=$linha_7['nome']?></div>
							</div>
						</figure>
                        <?php 
		 					// finaliza o loop que vai mostrar os dados 
		 					}while($linha_7 = mysql_fetch_assoc($dados_7)); 
		 					// fim do if 
		 				} ?>
					</section>
                    <section class="work">
                        
                        </br>
                        <h4>&#8227; Roçador</h4>
                        <?php 
							// se o número de resultados for maior que zero, mostra os dados
						if($total_8 > 0 && $linha_8['segmento'] == 'rocador' ) { 
							// inicia o loop que vai mostrar todos os dados 
							do { 
						?>
                        
						<figure class="white">
							<a href="#">
								<img src="admin/imagens/produtos/<?=$linha_8['foto']?>" alt="" />
								<dl>
									<dt>Descrição:</dt>
									<dd><?=$linha_8['descricao']?></dd>
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="images/icons/produtos/08.fw.png" alt="" width="28" height="28"/></div>
                            	<div id="part-info"><?=$linha_8['nome']?></div>
							</div>
						</figure>
                        <?php 
		 					// finaliza o loop que vai mostrar os dados 
		 					}while($linha_8 = mysql_fetch_assoc($dados_8)); 
		 					// fim do if 
		 				} ?>
					</section>
                    <section class="work">
                        
                        </br>
                        <h4>&#8227; Uniformes</h4>
                        <?php 
							// se o número de resultados for maior que zero, mostra os dados
						if($total_9 > 0 && $linha_9['segmento'] == 'uniformes' ) { 
							// inicia o loop que vai mostrar todos os dados 
							do { 
						?>
                        
						<figure class="white">
							<a href="#">
								<img src="admin/imagens/produtos/<?=$linha_9['foto']?>" alt="" />
								<dl>
									<dt>Descrição:</dt>
									<dd><?=$linha_9['descricao']?></dd>
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="images/icons/produtos/09.fw.png" alt="" width="28" height="28"/></div>
                            	<div id="part-info"><?=$linha_9['nome']?></div>
							</div>
						</figure>
                        <?php 
		 					// finaliza o loop que vai mostrar os dados 
		 					}while($linha_9 = mysql_fetch_assoc($dados_9)); 
		 					// fim do if 
		 				} ?>
					</section>
                    
				</div>	
            	    
			</div>
            
            <div id="wrapper-oldnew">
                <div class="oldnew">
                    <div class="wrapper-oldnew-prev">
                        <div id="oldnew-prev"></div>
                    </div>
                    <div class="wrapper-oldnew-next">
                        <div id="oldnew-next"></div>
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
</div>

<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/js-novo/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/js-novo/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/js-novo/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="js/js-novo/fastclick.min.js"></script>
	<script type="text/javascript" src="js/js-novo/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="js/js-novo/jquery.animate-shadow-min.js"></script>


<script>

/*TRANSITION PAGE*/

var speed = 'slow';

$('html, body').hide();

$(document).ready(function() {
    $('html, body').fadeIn(speed, function() {
        $('a[href], button[href]').click(function(event) {
            var url = $(this).attr('href');
            if (url.indexOf('#') == 0 || url.indexOf('javascript:') == 0) return;
            event.preventDefault();
            $('html, body').fadeOut(speed, function() {
                window.location = url;
            });
        });
    });
});

/* DISABLE HOVER EFFECT WHILE YOU SCROLL FOR A SMOOTHY NAVIGATION */

var body = document.body,
	timer;

window.addEventListener('scroll', function() {

	clearTimeout(timer);

	if(!body.classList.contains('disable-hover'))
		body.classList.add('disable-hover')

	timer = setTimeout(function(){
		body.classList.remove('disable-hover')
	}, 200);

}, false);
 
  /* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* MENU SIDE OPEN */

var MENUSIDEOPEN = document.getElementById('stripes');

MENUSIDEOPEN.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({left:'0'},300);	
}); 

/* BOUTON CROSS */

$(document).on('touchstart mouseover', '#cross-menu', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#cross-menu").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#cross-menu', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#cross-menu").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* MENU SIDE CLOSE */

var MENUSIDECLOSE = document.getElementById('cross-menu');

MENUSIDECLOSE.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({'left':'-100%'},300);	
}); 

/* BOUTON MENU ARROW-2 */

$(document).on('touchstart mouseover', '#wrapper-title-2', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-2").stop().animate({rotate: '90deg',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-2', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-2").stop().animate({rotate: '0deg',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU ARROW-3 */

$(document).on('touchstart mouseover', '#wrapper-title-3', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-3").stop().animate({rotate: '90deg',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-3', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-3").stop().animate({rotate: '0deg',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON NEXT */

$(document).on('touchstart mouseover', '#oldnew-next', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-next").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-next', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-next").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON PREV */

$(document).on('touchstart mouseover', '#oldnew-prev', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-prev").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-prev', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-prev").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});


/*FORMULAIRE NEWSLETTER*/
	
$("form").on("submit", function(event) {
  event.preventDefault();
  $.post("/burstfly/form-burstfly-modified.asp",$("form").serialize(), function(data) {//alert(data);
	});
});

/* PRELOADER */

function preloader() {
	if (document.images) {
		var img1 = new Image();
		var img2 = new Image();
		var img3 = new Image();
		var img4 = new Image();
		var img5 = new Image();
		var img6 = new Image();
		var img7 = new Image();
		var img8 = new Image();
		var img9 = new Image();
		var img10 = new Image();
		var img11 = new Image();
		var img12 = new Image();
		var img13 = new Image();
		var img14 = new Image();
		var img15 = new Image();
		var img16 = new Image();
		var img17 = new Image();
		var img18 = new Image();
		var img19 = new Image();
		var img20 = new Image();

		img1.src = "img/psd-4.jpg";
		img2.src = "img/font-1.jpg";
		img3.src = "img/psd-1.jpg";
		img4.src = "img/psd-2.jpg";
		img5.src = "img/ai-1.jpg";
		img6.src = "img/theme-2.jpg";
		img7.src = "img/psd-3.jpg";
		img8.src = "img/font-2.jpg";
		img9.src = "img/font-3.jpg";
		img10.src = "img/ai-2.jpg";
		img11.src = "img/icons-1.jpg";
		img12.src = "img/ui-1.jpg";
		img13.src = "img/font-5.jpg";
		img14.src = "img/theme-2.jpg";
		img15.src = "img/psd-5.jpg";
		img16.src = "img/icons-3.jpg";
		img17.src = "img/font-4.jpg";
		img18.src = "img/theme-3.jpg";
		img19.src = "img/font-6.jpg";
		img20.src = "img/theme-4.jpg";
	}
}
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);

</script>
</body>
</html>