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
        	<div class="terms">
            	<div class="termscontainer">
                    <h1>ANVÄNDARVILLKOR</h1>
                        <h2>INTRODUKTION</h2>
							<h3>Standardvillkor som skrivs på denna webbsida ska hantera din användning av denna webbplats. Dessa villkor tillämpas fullständigt och påverkar din användning.</h3>
							<h3>Genom att använda denna webbplats godkänner du alla villkor som skrivs i våra <a href="Terms_of_use.php" style="color:#000;">Användarvillkor</a> samt våran <a href="Website_privacy_policy.php" style="color:#000;">Integretetspolicy</a>. Du får inte använda den här webbplatsen om du inte håller med någon av dessa användarvillkor för webbplatsen.</h3>
                        <h2>1. IMMATERIELLA RÄTTIGHETER</h2>
                            <h3>Utöver innehållet du äger, enligt dessa villkor äger WebCreator och / eller dess licensgivare alla immateriella rättigheter och material som finns på denna webbplats. 
                            Du beviljas endast begränsad licens för att se materialet på denna webbplats.</h3>
                        <h2>2. BEGRÄNSNINGAR</h2>
							<h3>Du är specifikt begränsad från följandande:
								<ol>
                                    <li>Publicera material från denna webbplats i andra media.</li>
									<li>Sälja, underlicensiera och / eller på annat sätt marknadsföra något material från WebCreator.</li>
									<li>Offentligt utföra och / eller visa material från WebCreator.</li>
									<li>Använda denna webbplats på något sätt som är eller kan vara skadlig för denna webbplats.</li>
									<li>Använda denna webbplats på något sätt som påverkar användaråtkomsten till denna webbplats.</li>
									<li>Använda denna webbplats i strid med gällande lagar och förordningar eller på något sätt kan skada webbplatsen eller till någon person eller affärsenhet.</li>
									<li>Engagera dig i datainsamling, datautvinning eller annan liknande verksamhet i förhållande till denna webbplats.</li>
								</ol>
                            Vissa områden på den här webbplatsen är begränsade från att du får tillgång till det, och WebCreator kan när som helst begränsa åtkomsten till dig på alla områden på denna webbplats, när som helst, efter eget gottfinnande.</h3>
                        <h2>3.1 INGA GARANTIER</h2>
                            <h3>Denna webbplats tillhandahålls "som det är" med alla fel, och WebCreator uttrycker inga förbehåll eller garantier av något slag som är relaterat till denna webbplats eller materialet på denna webbplats.</h3>
                        <h2>3.2 SKADEERSÄTTNING</h2>
                            <h3>Du befriar härmed i största utsträckning WebCreator från och mot alla skulder, kostnader, krav, orsaker till handling, skador och kostnader som uppstår på något sätt i samband med ditt brott mot någon av bestämmelserna i dessa villkor.</h3>
                        <h2>4. ANSVARSBEGRÄNSNING</h2>
                            <h3>WebCreators direktörer, styrelseledamöter och anställda ska under inga omständigheter hållas ansvarig för något som uppstår på grund av eller på något sätt i samband med din användning av denna webbplats om sådant ansvar är under kontrakt. WebCreator, inklusive tjänstemän, styrelseledamöter och anställda, ansvarar inte för några indirekta, följd- eller specialansvar som uppstår på grund av eller på något sätt relaterat till din användning av denna webbplats.</h3>
                        <h2>5. AVSKILJBARHET</h2>
                            <h3>Om någon bestämmelse i dessa villkor visar sig vara ogiltig enligt gällande lag, ska sådana bestämmelser raderas utan att de övriga bestämmelserna häri påverkas.</h3>
                        <h2>6. VARIATION AV VILLKOREN</h2>
                            <h3>WebCreator har rätt att ändra dessa villkor när som helst som det passar, och med hjälp av denna webbplats förväntas du regelbundet se över dessa villkor.</h3>
                        <h2>7. UPPDRAG</h2>
                            <h3>WebCreator har rätt att tilldela, överföra och dela ut sina rättigheter och / eller skyldigheter enligt dessa villkor utan någon anmälan. Du har dock inte rätt att överlåta eller dela ut några av dina rättigheter och / eller skyldigheter enligt dessa villkor.</h3>
                        <h2>8. LAG OCH JURISDIKTION</h2>
                            <h3>Dessa villkor styrs av och tolkas i enlighet med Sveriges lagar, och du lämnar in till de icke-exklusiva jurisdiktionerna för de statliga domstolarna i Sverige för att lösa eventuella tvister.</h3>
                       	<h2>HELA AVTALET</h2>
                            <h3>Dessa villkor utgör hela avtalet mellan WebCreator och dig i förhållande till din användning av denna webbplats och ersätter alla tidigare avtal och överenskommelser.</h3>
							<h3>Senast ändrad den <b style="color:#000;">6-11-2017</b></h3>
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