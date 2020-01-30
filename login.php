<?php  
session_start();
include 'config/conn.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema WMPRO WEB</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
		
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/css_login/style.css" media="all" />
<link rel="stylesheet" href="css/css_login/botoes.css">

<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>


<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header" align="center">
	<div><!--<img src="images/LOGO_DRY_&amp;_CLEAN.fw.png" alt="" width="400" height="148" border="0" align="middle" />--></div>
</div>

<div class="wrapper">
			</br>
            </br>
            </br>
			<div class="content">
			<br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
				<div id="form_wrapper" class="form_wrapper">
                    <div id="imagem_login"><a href="index.html"><img src="images/logo_antiga_02.fw.png" alt="desc" /></a></div>
                    </br>
					<form action="" enctype="multipart/form-data" method="post" name="logar" class="login active">
						<h3>Login</h3>
						<div>
							<label>Usuário:</label>
							<input type="text" name="usuario" id="usuario" />
							
						</div>
						<div>
							<label>Senha:</label>
							<input type="password" name="senha" id="senha" />
							<br />
						</div>
						<div class="bottom">
							<input type="submit" value="Logar" name="logar" id="logar" />
							<br/>
							<br/>
                            <br/>
                            <br/>
						</div>
					</form>
                    <?php  include 'config/logar.php';  ?>
                    </div>
                    <br />
                    <br />
                    <br />
                    <br />
                 	<?php
						if(isset($_REQUEST['logar'])){ ?>
                    	<div id="mensagem" style="background-color: rgba(255, 0, 0, 0.5)"> <?php echo @$msg ?> </div>
					<?php } ?>
				</div>
				<div class="clear"></div>
			</div>
			
		</div>
		<div id="footer" align="center">
			<a href="http://www.wmwebsites.com.br"<div><img src="images/logo_wm.fw.png" alt="" border="0" align="middle" /></div>
		</div>

		<!-- The JavaScript -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
					//the form wrapper (includes all forms)
				var $form_wrapper	= $('#form_wrapper'),
					//the current form is the one with class active
					$currentForm	= $form_wrapper.children('form.active'),
					//the change form links
					$linkform		= $form_wrapper.find('.linkform');
						
				//get width and height of each form and store them for later						
				$form_wrapper.children('form').each(function(i){
					var $theForm	= $(this);
					//solve the inline display none problem when using fadeIn fadeOut
					if(!$theForm.hasClass('active'))
						$theForm.hide();
					$theForm.data({
						width	: $theForm.width(),
						height	: $theForm.height()
					});
				});
				
				//set width and height of wrapper (same of current form)
				setWrapperWidth();
				
				/*
				clicking a link (change form event) in the form
				makes the current form hide.
				The wrapper animates its width and height to the 
				width and height of the new current form.
				After the animation, the new form is shown
				*/
				$linkform.bind('click',function(e){
					var $link	= $(this);
					var target	= $link.attr('rel');
					$currentForm.fadeOut(400,function(){
						//remove class active from current form
						$currentForm.removeClass('active');
						//new current form
						$currentForm= $form_wrapper.children('form.'+target);
						//animate the wrapper
						$form_wrapper.stop()
									 .animate({
										width	: $currentForm.data('width') + 'px',
										height	: $currentForm.data('height') + 'px'
									 },500,function(){
										//new form gets class active
										$currentForm.addClass('active');
										//show the new form
										$currentForm.fadeIn(400);
									 });
					});
					e.preventDefault();
				});
				
				function setWrapperWidth(){
					$form_wrapper.css({
						width	: $currentForm.data('width') + 'px',
						height	: $currentForm.data('height') + 'px'
					});
				}
				
				/*
				for the demo we disabled the submit buttons
				if you submit the form, you need to check the 
				which form was submited, and give the class active 
				to the form you want to show
				*/
				//$form_wrapper.find('input[type="submit"]')
				//			 .click(function(e){
				//				e.preventDefault();
				//			 });	
			});
        </script>
        
</body>
</html>
