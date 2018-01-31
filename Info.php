<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="Images/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<title>WebCreator - Skapa Din Hemsida Idag</title>
</head>

<body>
	<div id="container">
    	<div class="wrappercontainer">
        	<div class="wrapper">
            	<div id="sidebar">
                    <div id="dismiss">
                        <div>☰</div>
                    </div>
                    <div class="sidebar-header">
                    	<a href="index.php"><img src="Images/text.png"></a>
                    </div>
                    <ul class="sidebar-list components">
                    	<p><a href="index.php">INFO</a></p>
                        <p><a href="Ideeas.php">IDÉER</a></p>
                        <p><a href="Info.php">OM FÖRETAGET</a></p>
                    </ul>
            	</div>
                <div class="navbar-header">
                	<button type="button" id="sidebarCollapse" class="btnNavbar">☰</button>
                </div>
        	</div>
        	<div class="overlayside"></div>
        </div> 
        <script type="text/javascript" src="script.js"></script>
        <nav>
        	<ul >
            	<li>
                    <a href="index.php">INFO</a>
                </li>
                <li>
                	<a href="Ideeas.php">IDÉER</a>
                </li>
                <li>
                    <a href="Info.php">OM FÖRETAGET</a>
                </li>
                <li class="centerimage">
            		<a href="index.php"><img src="Images/text.png" alt="logo"></a>
                </li>
                <li>
                	<div class="searching">
                       	<form action="Results.php" method="get">
                           	<input type="text" name="k" value="<?php echo $_GET['k']; ?>"/>
                   			<input class="btnSearch" value="" type="submit"/>
                        </form>
                    </div>
                </li>
        	</ul>
        </nav>
        <article>
        	<div class="inform">
            	<div class="topinform">
                	<ul>
                    	<li>
                			<h1>VAD GÖR WEBCREATOR</h1>
                        </li>
                        <li>    
                    		<p>Vår service kommer att tillåta vem som helst — från entreprenörer till egenföretagare som vill förbättra sina företag — att utveckla sina företag till bättre, större och mer framgångsrika bolag i strävan efter en större kundbas.</p>
                        </li>
                    </ul>
                </div>
                <hr style="width:60%; border:solid 1px rgba(0,0,0,0.125)">
                <div class="iconinform">
                	<ul>
                    	<li>
                        	<img src="Images/Icons/code.png" alt=""/>
                            <h2>BRA KODNING</h2>
                            <p>HTML, CSS, JS är bara några av många språk vi kan. Kort sagt finns det väldigt lite vi inte kan göra.</p>
                        </li>
                        <li>
                        	<img src="Images/Icons/phone.png" alt=""/>
                            <h2>UNIK DESIGN</h2>
                            <p>Varje webbsida görs från början. De skräddarsys efter eget tycke och är på så vis helt unika.</p>
                        </li>
                        <li>
                        	<img src="Images/Icons/computer.png" alt=""/>
                            <h2>RESPONSIV</h2>
                            <p>Våra webbsidor är mobilanpassade och de anpassas automatiskt till alla elektroniska enheter.</p>
                        </li>
                    </ul>
                </div>
                <hr style="width:60%; border:solid 1px rgba(0,0,0,0.125)">
                <div class="bot">
					<div class="topinform topbot">
						<ul>
							<li>
								<h1>MER OM OSS</h1>
							</li>
							<li>    
								<p>I kort, WebCreator gör unika websidor för att hjälpa företag med kreativa affärsidéer att bli framgångsrika.</p>
							</li>
						</ul>
					</div>
					<div class="botinform">
						<ul>
							<li>
								<h1>VÅRT MÅL</h1>
							</li>
							<li>    
								<p>Målet hos oss på WebCreator är att erbjuda en enkel, billig och tillfredsställande sevrvice för dig som vill ta ditt företag till nästa nivå. Genom våran service kommer du få en unik webbsida och en större kundbas.</p>
							</li>
						</ul>
						<div class="imgbot">
							<img src="Images/Pics/business.png">
						</div>
					</div>
					<div class="botinform">
						<ul>
							<li>
								<h1>WEBBHANTERING</h1>
							</li>
							<li>    
								<p>Du söker efter en webbsida, vilket betyder att du säkert ve hur bra det kan vara att ha en. Men tänk så kan du inte den första grejen när det kommer till att hantera den. Oroa dig inte. Kontakta oss så löser vi allt du behöver hjälp med.</p>
							</li>
						</ul>
						<div class="imgbot">
							<img src="Images/Pics/indeximage.png">
						</div>
					</div>
				</div>
            </div>
        </article>
        <footer>
        	<div class="footerContainer">
            	<div class="footerContent">
                    <div class="column logo">
                    	<a href="index.php"></a>
                    </div>
                    <div class="column social">
                        <a href="https://www.facebook.com/Web-Creator-1764341753865008/" target="_blank"></a>
                        <a href="https://twitter.com/WebCreator_ORG" target="_blank"></a>
                        <a href="https://www.instagram.com/webcreatorofficial/" target="_blank"></a>
                    </div>
                    <div class="column info">
                        <a href="Terms_of_use.php">ANVÄNDARVILLKOR</a>
				     	<a href="Website_privacy_policy.php">INTEGRITETSPOLICY</a>
                        <a href="Contact_us.php">KONTAKTA OSS</a>
                    </div>
                    <div class="bottom">
                    	<p>© COPYRIGHT 2017, WEB CREATOR</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>