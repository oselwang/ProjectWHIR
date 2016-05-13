<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Iwoc</title>
<link href="<?php echo e(asset('css/style.css')); ?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/easyResponsiveTabs.js')); ?>" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				   </script>
<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="wrap">
	<h1 style="color:white">WHIR</h1>
	<div class="main-content">
		<div class="sap_tabs">	
			 
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			 
				  <ul>
					  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Login</span></li>
					  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>create account</span></li>
					  
				  </ul>		
				  <!---->

				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div class="register">
							<form method="post" action="login" id="login-form">
								<input placeholder="Email" class="mail" type="email" required="">
								<input placeholder="Phone" class="lock" type="password" required="">
								<input type="submit" value="Login"/>
							</form>
							<p>Forgot Your ID or Password?<a href="#"> Click here</a></p>
						</div>
				</div>	

				<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="register">
							<div id="flash-error-register" class="alert alert-danger hidden">
								<ul id="error-register">
								</ul>
							</div>
							<form method="post" action="register" id="register-form">
								<?php echo e(csrf_field()); ?>

								<input placeholder="Name" name="name" type="text" required="">
								<input placeholder="Email Address" name="email" type="email" required="">
								<input placeholder="Phone" type="text" name="phone" required="">
									<div class="sign-up">
										<input type="submit" value="Create Account"/>
									</div>
							</form>
						</div>
					</div> 	        					            	      
					
			</div>	
			
		</div>
	</div>
	 <!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>&copy; 2016 Cool Login Form.  All Rights  Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
	<!--//end-copyright-->
 </div>
<script>
	function redirect(url) {
		window.location = url;
	}

	$('#register-form').submit(function (e) {
		e.preventDefault();
		var url = $('#register-form').attr('action');
		var data = $('#register-form').serializeArray();
		$('#error-register').text('');
		$.ajax({
			type: 'post',
			data: data,
			url: url,
			dataType:'json',
			success:function () {
				redirect('home');
			},
			error:function (data) {
				errors = $.parseJSON(data.responseText);
				$('#flash-error-register').removeClass('hidden');
				$.each(errors, function (index, value) {
					$('#error-register').append("<li>" + value + "</li>")
				})
			}
		})
	});
</script>
</body>
</html>