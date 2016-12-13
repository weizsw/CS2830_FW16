<?php
    // HTTPS redirect
 //    if ($_SERVER['HTTPS'] !== 'on') {
	// 	$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	// 	header("Location: $redirectURL");
	// 	exit;
	// }
    
	// Every time we want to access $_SESSION, we have to call session_start()
	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 1</title>
    <link href="https://fonts.googleapis.com/css?family=Alike+Angular|Asul|Concert+One|Eczar|Fruktur|Gloria+Hallelujah|Kavoon|Neuton|Space+Mono|Tillana|Work+Sans" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <link href="js/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<style type="text/css">
    #logout{
        text-decoration: none;
        color: white;
    }

    #logout:hover {
        color: #4595f7;

    }
</style>
<body>
    <div class="header">
            
            <div class="btns">
                
                <ul>
                    <li><a href="index.html">Welcome</a></li>
                    <li><a href="main.php">Portfolio</a></li>
                    <!-- <li><a href="#">Showcase</a></li> -->
                    <li><a href="login_form.php" class="active-btn"><?php print "Welcome: $loggedIn"; ?></a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="https://www.facebook.com/shaowei.zhou.12" target="_blank"><img src="https://static.wixstatic.com/media/0fdef751204647a3bbd7eaa2827ed4f9.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/0fdef751204647a3bbd7eaa2827ed4f9.webp"></a></li>
                    <li><a href="https://twitter.com/weizsw888" target="_blank"><img src="https://static.wixstatic.com/media/c7d035ba85f6486680c2facedecdcf4d.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/c7d035ba85f6486680c2facedecdcf4d.webp"></a></li>
                    <li><a href="https://www.instagram.com/weizsw/" target="_blank"><img src="https://static.wixstatic.com/media/01c3aff52f2a4dffa526d7a9843d46ea.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/01c3aff52f2a4dffa526d7a9843d46ea.webp"></a></li>
                </ul>
            </div>
    </div> <!-- end header -->
    <div class="ui-widget pageWidget">
        <!-- <h1 class="ui-widget-header">Page 1</h1> -->
        <div class="ui-widget-content" style="background: #222222; border-color: #222222; margin-top: 80px;">
            <!-- <p>This is a page containing protected content<?php print "$loggedIn"; ?>.</p>
            <p>You must be logged in to view this page.</p> -->
            <!-- <p>Look at what you found!</p> -->
            <!-- <p><a href='page2.php'>Go to page 2.</a></p> -->

            <p><a href='logout.php' id="logout">Logout</a></p>
            <!-- <p><a href="main.html">Go to home.</a></p> -->
            <video src="IMG_0022.MOV" autobuffer autoloop loop controls width="400" height="400"></video>
        </div>
    </div>
</body>
</html>  </div>
</body>
</html>