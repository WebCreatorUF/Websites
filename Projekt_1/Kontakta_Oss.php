<!doctype html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title>AB Skåne lås | Låssmed sedan 1973</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" type="image/x-icon" href="Bilder/Logos/icon_logo.ico">
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Välkommen till AB Skåne lås! Vi är en komplett låsservicefirma som hjälper dig att låsa upp dina problem, vi arbetar i Ystad, Sjöbo, Simrishamn med mera.">
	</head>
	
	<body>
		<div class="container">
        <div id="btnReturn"></div>
			<div class="wrappercontainer">
				<div class="wrapper">
					<div id="sidebar">
						<div id="dismiss">
							<div>☰</div>
						</div>
						<div class="sidebar-header">
							<a href="index.html"><img src="Bilder/Logos/logo_text.png" alt="logo"></a>
						</div>
						<ul class="sidebar-list components">
							<p><a href="#">Hem</a></p>
							<p><a href="#">Kvalitet och Miljö</a></p>
							<p><a href="#">Om oss</a></p>
							<p><a href="#">Kontakta oss</a></p>
						</ul>
					</div>
					<div class="navbar-header">
						<button type="button" id="sidebarCollapse" class="btnNavbar">☰</button>
					</div>
				</div>
				<div class="overlayside"></div>
			</div>
			<script type="text/javascript" src="script.js"></script>
			<header>
				<div class="header_container">
					<ul>
						<li>
							<a href="index.html"><img src="Bilder/Logos/logo_text.png" alt="logo" /></a>
						</li>
						<li>
							<ul>
								<li>
									<a href="index.html">Hem</a>
								</li>
								<li>
									<a href="Kontakta_Oss.php" style="font-weight: bolder; color: #e94335; font-size: 16px;">Kontakta oss</a>
								</li>
								<li>
									<a href="#">Kvalitet och Miljö</a>
								</li>
								<li>
									<a href="#">Om oss</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</header>
			<article>
            	<div class="article_container">
                	<h1>Kontakta Oss</h1>
                    <ul>
                    	<li>
                        	<ul>
                            	<li>
									<img src="Bilder/Other/1.png" alt="shop">
                                </li>
                                <li>
									<h2>Koppargatan 28</h2>
									<p>Detta är den första samt en av flera butiker vi har i Skåne. Vi befinner oss vid Koppargatan 28, 271 39 i Ystad. Besök oss gärna!</p>
                                </li>
                                <li>
									<b><p>Telefon:</p></b>
									<p>0411-55 51 10</p>
                                </li>
								<li>
									<b><p>Öppetider:</p></b>
									<p>Jun-Aug&ensp;07:00 - 16:00</p>
									<p>Sep-Maj&ensp;08:00 - 17:00</p>
									<p>Lunch&ensp;12:30 - 13:30</p>
									<p>Helger&ensp;<b>Stängt</b></p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="googleMap">
                            	<div id="googleMap"></div>
                            </div>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqF8mxr2UUJgzOXk-BSoZi0a3_EqS3gaE&callback=myMap"></script>
                        </li>
                    </ul>
					<div class="email">
<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$message = <<<EMAIL

Medelande från: $lastname, $name.

Skickat från: $email.

$comments

EMAIL;
				
$to = 'webcreator.help@hotmail.com';
$subject ='Nytt medelande - Kund';

if($_POST) {
	mail ($to, $subject, $message);
	$feedback = 'Ditt medelande har skickats!';
}
?>
						<form action="?" method="post"> 
							<ul>
								<li>
									<label for="name"></label>
									<input type="text" class="textcont" placeholder="Namn" id="name" name="name" minlength="2" maxlength="25" required pattern="[a-zA-2] {2,25}$" />
								</li>
								<li>
									<label for="lastname"></label>
									<input type="text" class="textcont" placeholder="Efternamn" id="lastname" name="lastname" minlength="2" maxlength="25" required pattern="[a-zA-2] {2,25}$" />
								</li>
								<li>
									<label for="email"></label>
									<input type="text" class="textcont" placeholder="E-mail" id="email" name="email" minlength="5" maxlength="50" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
								</li>
								<li>
									<label for="comments"></label>
									<textarea name="comments" id="comments" placeholder="Medelande" minlength="1" maxlength="500" rows="10" cols="20"></textarea>
								</li>
								<br/>
								<li>
									<div>
										<input type="submit" name="submit" value="SKICKA" />
									</div>
								</li>
							</ul>
                            <div id="rem_cha"></div>
						</form>
					</div>
                </div>
            </article>
			<footer>
				<div class="footer_container">
                	<ul>
                        <li>
                        	<div class="social">
                                <ul>
                                    <li>
                                    	<a href="#"><img src="Bilder/Social/facebook.png" alt="facebook"></a>
                                    </li>
                                    <li>
                                    	<a href="#"><img src="Bilder/Social/instagram.png" alt="instagram"></a>
                                    </li>
                                    <li>
                                    	<a href="#"><img src="Bilder/Social/google.png" alt="googleplus"></a>
                                    </li>              
                                </ul>
                            </div>
                        </li>
                        <li>
                            <p>© 1973-2018, AB Skåne Lås</p>
                        </li>
                    </ul>
				</div>
			</footer>
		</div>
	</body>
</html>
