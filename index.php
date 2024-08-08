<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>ADACHO GAMES</title>
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Adacho Games, Adacho,CubeKey, Cube, Key, Game, Android, Games" />
		 <meta name="revisit-after" content="3 days"/>
		 <meta name="Description" CONTENT="Adacho Games, CubeKey is a unique game which connect elements of logic and agility,Beat your records, have a great time and practice your reflexes and your mind.. Young Game Developer, Android, Pc, Cube Key">
		<meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/>
		
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!----Calender -------->
		  <link rel="stylesheet" href="css/clndr.css" type="text/css" />
		  <script src="js/underscore-min.js" type="text/javascript"></script>
		  <script src= "js/moment-2.2.1.js" type="text/javascript"></script>
		  <script src="js/clndr.js" type="text/javascript"></script>
		  <script src="js/site.js" type="text/javascript"></script>
	<!----End Calender -------->
	<!----graph -------->
	<script src="js/highcharts.js"></script>
	<script src="js/chart.js"></script>
	<!----//graph -------->
</head>
<body>
<!-- content -->
<div class="content">
	<div class="container" style="margin-top: -4%;">
		<div class="header">
			<div class="logo" style="min-width: 300px;">
				<a href="#"><img src="images/logo.png" alt=""/></a>
			</div>
			
			
			<div class="clearfix"></div>
		</div>
		<div class="content-top">
			<div class="wrap">
				<div class="col-md-5 content-left">
					<h1>CubeKey</h1>
					<div class="border"></div>
					<p>CubeKey is a unique game which connect elements of logic and agility. Match the key to the wall by the proper selection and turning the key. The sooner you will do it,you will receive bigger bonus. Beat your records, have a great time and practice your reflexes and your mind..</p>
					<a href="https://play.google.com/store/apps/details?id=com.adacho.cubekey" class="hvr-rectangle-out button">ANDROID</a>
					<a href="CubeKey.jar"class="hvr-rectangle-in button more-mar">PC</a>
				</div>
				<div class="col-md-7 content-right">
					<!-- responsiveslides -->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								 // Slideshow 4
								$("#slider3").responsiveSlides({
									auto: true,
									pager: true,
									nav: false,
									speed: 300,
									namespace: "callbacks",
									before: function () {
								$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
									}
									});
									});
							</script>
					<!-- responsiveslides -->
					<div id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="slider-image">
									<img src="images/1.png" alt=""/>
								</div>
							</li>
							<li>
								<div class="slider-image">
									<img src="images/2.png" alt=""/>
								</div>
							</li>
							<li>
								<div class="slider-image">
									<img src="images/3.png" alt=""/>
								</div>
							</li>
							<li>
								<div class="slider-image">
									<img src="images/4.png" alt=""/>
								</div>
							</li>
							<li>
								<div class="slider-image">
									<img src="images/5.png" alt=""/>
								</div>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="content-bottom">
			<div class="col-md-5 con-btm-left">
				<div class="register">
					<div class="user-login">
								<h2 style="margin-top: -4%;">Contact</h2>
								<?php 
								if(isset($_POST['submit']))
								{
								    $to = "adam.bjp@gmail.com"; 
								    $from = $_POST['email']; 
								    $first_name = $_POST['first_name'];
								    $subject = "Form submission";
								    $subject2 = "Copy of your form submission";
								    $message = $first_name . "\nemail: " . $from . "\nNapisal:" . "\n\n" . $_POST['message'];
								    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
								
								    $headers = "From:" . $from;
								    $headers2 = "From:" . $to;
								    mail($to,$subject,$message,$headers);
								    mail($from,$subject2,$message2,$headers2); 
								    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
                                }
								else
                                {


                                    ?>
                                    <form action="" method="post" style="margin-top: -4%;margin-bottom: 4%;margin-left: 3%;">
                                        Name: <br><input type="text" name="first_name"><br>
                                        Email: <br><input type="text" name="email"><br>
                                        Message:<br><textarea rows="5" name="message" cols="30" style="width: 90%;resize: none;margin-bottom: 2%;"></textarea><br>
                                        <div class="user-right">
                                            <input type="submit" name="submit" value="SEND">
                                        </div>
                                    </form>
                                    <?php
								}
								?>
								
							</div>
				</div>
				
				
			</div>
			<div class="col-md-7 con-btm-right">
				<div class="con-btm-grids">
					<div class="con-btm-l">
						<div class="login-tab">
							<div class="user-login">
								<div class="fb-connect">
								<h2>MEDIA</h2>
								<ul>
									<li><a href="#" class="facebook">Like me on <b>Facebook</b></a></li>
									<li><a href="https://instagram.com/adachoxd" class="twitter">Follow on <b>Instagram</b></a></li>
								</ul>
								
						</div>
						
							</div>
						</div>
						
						
					</div>
					<div class="con-btm-r">
						<div class="follow">
							<div class="follow-img">
								<div class="follow-pos"><img src="images/zdj.jpg" alt=""/></div>
							</div>
							<div class="follow-info">
								<h4>Adam Gąsiorek</h4>
								<p>I'm studying computer science in the first year at the Politechnika Krakowska in Cracow. Game Developing is only my passion. If you have any question, contact with me :)</p>
							</div>
							
							
						</div>
						

					</div>
					<div class="clearfix"></div>
				</div>
				
				
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="footer">
			<p>Visit: 
				<?php
								$cfg['file'] = "licznik.txt";
								$cfg['read'] = file_get_contents($cfg['file']);

								if(!isset($_COOKIE['licznik'])) {
								    setcookie('licznik', 'licznik', time() + 1*24*3600);
								    $fp = fopen($cfg['file'], "w");
								    flock($fp, 2);
								    fwrite($fp, $cfg['read']+1);
								    flock($fp,3);
								    fclose($fp);
								}
								    echo $cfg['read'];

								?>
            </p>
			<p>Copyright &copy; 2015 Blocky UI Kit. Template by <a href="http://w3layouts.com/"> W3layouts</a></p>
		</div>
	</div>
</div>
	
<!-- //content -->
</body>
</html>