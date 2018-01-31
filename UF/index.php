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
        	<div class="index">
                <div class="container">           
                    <div class="slider-wrapper">
                    	<div class="inner-wrapper">
                        	 <div class="slide">
                                <h1>INSPIRERA DIG SJÄLV
                                <br>
                                <span>Bläddra igenom våra unika deisgn.</span>
                                </h1>
                                <div class="btnInfo"><a href="Ideeas.php">INSPIRATION</a></div>
                                <div class="slideimg"><img src="Images/logo.png"></div>
                            </div>
                            <div class="slide">
                                <h1>SKAPA DIN EGEN WEBBSIDA IDAG
                                <br>
                                <span>Vi bygger din egna drömsida.</span>
                                </h1>
                                <div class="btnInfo"><a href="Info.php">LÄS OM OSS</a></div>
                                <div class="slideimg"><img src="Images/logo.png"></div>
                            </div>
                             <div class="slide">
                                <h1>INSPIRERA DIG SJÄLV
                                <br>
                                <span>Bläddra igenom våra unika deisgn.</span>
                                </h1>
                                <div class="btnInfo"><a href="Ideeas.php">INSPIRATION</a></div>
                                <div class="slideimg"><img src="Images/logo.png"></div>
                            </div>
                            <div class="slide">
                                <h1>SKAPA DIN EGEN WEBBSIDA MED VÅR HJÄLP
                                <br>
                                <span>Vi bygger din egna drömmsida.</span>
                                </h1>
                                <div class="btnInfo"><a href="Info.php">LÄS OM OSS</a></div>
                                <div class="slideimg"><img src="Images/logo.png"></div>
                            </div>
                      	</div>
                    </div>               
                    <div class="button prev">&#8249;</div>
                    <div class="button next">&#8250;</div>                        
              	</div>
				<div class="information">
                	<div class="innerinfo">
                        <ul>
                            <li>
                            	<ul>
                                	<li>
                                        <h1>VAD VI GÖR</h1>
                                    </li>
                                    <li>
                                        <p>Web Creator utvecklar din drömm webbsida som är skräddarsydd efter ditt eget nöje. Vill du ha din egna webbsida idag kontakta oss när som helst.</p>
                                    </li>
                                    <li style="height:25%;">
                                    	<div class="btnInfo"><a href="Contact_us.php">KONTAKTA OSS</a></div>
                                    </li>
                            	</ul>
                            </li>
                            <li style="text-align:left;">
                            	<img src="Images/Icons/computer.png">
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="process">
                	<div class="innerprocess">
                    	<ul>
                        	<li>
                            	<img src="Images/Pics/pad.png">
                            </li>
                            <li>
                            	<table>
                                  <tr>
                                    <th colspan="2">Från ideé till webbsida</th>
                                  </tr>
                                  <tr>
                                    <td><img src="Images/Social/phone.png"></td>
                                    <td>
                                    	<span>Planering</span>
                                        <br>
                                        <p>Processen börjar med ett möte. På det mötet kommer du att förklara hur du vill att din webbsida ska se ut, och vi börjar sen skissa.</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><img src="Images/Social/gears.png"></td>
                                    <td>
                                    	<span>Arbete</span>
                                        <br>
                                        <p>När vi har fått all information och skissen har blivigt godkänd börjar vi bygga din webbsida från grunden så att allt blit precis som du vill ha det.</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><img src="Images/Social/party.png"></td>
                                    <td>
                                    	<span>Enjoy</span>
                                        <br>
                                        <p>När webbsidan är färdig är det bara att njuta!
                                        </p>
                                    </td>
                                  </tr>
                                </table>
                            </li>
                        </ul>
                    </div>
				</div>
			</div>
            <script type="text/javascript" src="script.js"></script>
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