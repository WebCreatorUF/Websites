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
        	<div class="policy">
            	<div class="policycontainer">
                    <h1>INTEGRITETSPOLICY</h1>
						<h2>INTRODUKTION</h2>
							<h3>Den här integritetspolicyn ger ett värdefullt skydd för våran webbsida och dess användare. Framförallt ökar det tilliten. Genom att tillhandahålla en okomplicerad policy på enkel svenska, som beskriver de faktiska skydden, får webbsidan ett övertag gentemot de konkurrenter som har en komplex och förvirrande policy.</h3>	
                        <h2>1.1 SAMLING AV PERSONLIG INFORMATION</h2>
                            <h3>Vi samlar in information från dig när du anger information på vår webbplats genom att kontakta oss. Ingen information lagras på webbsidan.</h3>
                        <h2>1.2 ANVÄNDNING AV PERSONLIG INFORMATION</h2>
                            <h3>Vi kan använda den information vi samlar in från dig när du kontaktar oss genom webbsidan. Vi säljer inte personligt identifierbar information till tredje part.</h3>
							<h3>Den information vi samlar in från dig kan användas för att:
                            	<ol>
									<li>Göra din upplevelse personlig och tillgodose dina personliga behov.</li>
									<li>Tillhandahålla anpassade annonser.</li>
									<li>Förbättra vår hemsida.</li>
									<li>Förbättra vår kundservice och ditt behov av hjälp.</li>
									<li>Kontakta dig via e-post.</li>
									<li>Administrera en tävling, ett erbjudande eller en undersökning.</li>
								</ol>
							</h3>
                        <h2>1.3 SKYDD AV PERSONLIG INFORMATION & SSL </h2>
                            <h3>Vår hemsida skannas regelbundet för säkerhetshål och kända sårbarheter för att göra ditt besök på vår webbplats så säker som möjligt. Detta gör vi genom att använda en Malware Scanner. Vi använder inte ett SSL-certifikat nu, men kan förekomma i framtiden beroende på om nya funktioner, som kräver inforamtionslagring, som läggs till på webbsidan blir tillgängliga; då kan information från de som besöker webbsidan lagras.
                            <h3>Vi är de enda som äger informationen som samlas in på den här webbplatsen. Din personligt identifierbara information kommer inte att säljas, utbytas, överföras eller delas vidare till något annat företag, i något syfte, utan ditt samtycke, förutom då så krävs för att uppfylla en begäran och/eller överföring, t.ex. för att skicka en beställning.</h3;
                            </h3>
                        <h2>2. COOKIES</h2>
							<h3>Vi använder inte cookies för spårningsändamål. Du kan välja att din dator varnar dig varje gång en cookie skickas, eller du kan välja att stänga av alla cookies. Du gör det genom dina webbläsarinställningar. Eftersom webbläsaren är lite annorlunda, kolla på din webbläsares hjälpmeny för att lära dig rätt sätt att ändra dina cookies.</h3> 
                       		<h3>Om du stänger av cookies kan vissa av de funktioner som gör din webbplats mer effektiv, inte fungera korrekt. Det gör din webbplatsupplevelse effektivare och kanske inte fungerar korrekt.</h3>
                        <h2>3. TREDJEPARTSINFORMATION & TREDJEPARTSLÄNKAR</h2>
                            <h3>Vi säljer inte, handlar eller på annat sätt överför till din personliga identifierbara information till utomstående. Vi inkluderar inte eller erbjuder produkter eller tjänster från tredje part på vår hemsida. Sociala medier räknas inte med som produkter eller tjänster.</h3>
							<h3>Det är också viktigt att notera att vi inte tillåter spårning av spårning från tredje part.</h3>
                        <h2>4. GOOGLE</h2>
                            <h3>Googles annonseringskrav kan summeras av Googles annonseringsprinciper. De införs för att ge en positiv upplevelse för användarna. <a href="https://support.google.com/adwordspolicy/answer/1316548?hl=en" style="color: #000;">Adwords Policy</a>. Vi har inte aktiverat Google AdSense på vår webbplats, men vi kan göra det i framtiden.</h3>
							<h3>Vi änväder oss utav google maps för att hänvisa vår huvudkontor där man möta oss personligen. Detta anges vid våran <a href="Contact_us.php" style="color: #000;">Kontakta Oss</a> sida.</h3>
                        <h2>5. MARKNADSFÖRING</h2>
                            <h3>Vi marknadsför inte till specifika personer. Vem som helst kan köpa våra hemsidor givet att de är över 18 år.</h3>
                        <h2>6. KONTAKT</h2>
							<h3>För att kontakta oss kan du besöka <a href="Contact_us.php" style="color:#000;">Kontakta Oss</a> på vår sida.</h3>
							<h3>Vi meddelar dig tillbaks via e-post inom 48 timmar.</h3>
						<h2>7. MODIFIERINGAR</h2>
							<h3>Vi kommer möjligtvist modifiera våran integretetspolicy i framtiden, och kommer att lägga ut den på webbsidan. Om eventuella modifieringar skulle orsaka problem för dig medelar vi dig enligt de procedurer som anges i ovan.</h3>
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