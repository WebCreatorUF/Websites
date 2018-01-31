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
        	<div class="searchingTwo">
            	<form action="Results.php" method="get">
                	<input type="text Two" name="k" id="searchTwo" placeholder="SÖK" value="<?php echo $_GET['k']; ?>"/>
                    <input class="btnSearchTwo" value="" type="submit"/>
                </form>
                <?php 
					$k = $_GET['k'];
					$terms = explode(" ", $k);
					$query = "SELECT * FROM search WHERE ";
					
					foreach ($terms as $each) {
						$i++;					
						if($i == 1)
							$query.= "keywords LIKE '%$each%' ";
						else
							$query.= "OR keywords LIKE '%$each%' ";
					}
					$button = $_GET ['submit'];
            		$search = $_GET ['search']; 

					if(!$button)
					echo '<br />';
					echo 'Inga resultat hittades för: ' . htmlspecialchars($_GET['k']) . '.';
					
					// anslut
					/*mysql_connect("localhost", "root", "korvisinibus1", "test");
					mysql_select_db("webcreatoruf");
					
					$query = mysql_query($query);
					$numrows = mysql_num_rows($query);
					if($numrows > 0) {
						
						while ($row = mysql_fetch_assoc($query)){
							$id = $row['id'];
							$title = $row['title'];
							$description = $row['description'];
							$keywords = $row['keywords'];
							$link = $row['link'];
							
							echo "<h2><a href='$link'>$title</a></h2>
							$description<br /><br />";
						}	
					}
					else
						echo "Inga träffar hittades för \"<b>$k</b>\"";
					// koppla ifrån
					mysql_close();*/
				?>
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