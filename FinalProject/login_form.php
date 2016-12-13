<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>login</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular|Asul|Concert+One|Eczar|Fruktur|Gloria+Hallelujah|Kavoon|Neuton|Space+Mono|Tillana|Work+Sans" rel="stylesheet">
	<!-- <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'> -->
	<link href="js/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    

	<!-- <link rel="stylesheet" href="css/loginform.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
	<link rel="stylesheet" type="text/css" href="css/app.css">

  <script>
     $(function(){
            $("input[type=submit]").button();
        });

     $(document).ready(function(){

        
    $("button").click(function(){
        $.ajax({url: "hint.txt", success: function(result){
            $(".hint").html(result);
        }});
    });
});
  </script>
</head>
<style type="text/css">
    .hint {
        color: white;
        margin-top: 20px;
    }

    button {
        margin-top: 10px;
        border-radius: 25px;

    }
</style>

<body>
	<div class="header">
			
			<div class="btns">
				
				<ul>
					<li><a href="index.html">Welcome</a></li>
					<li><a href="main.php">Portfolio</a></li>
					<!-- <li><a href="#">Showcase</a></li> -->
					<li><a href="login_form.php" class="active-btn">Login</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="https://www.facebook.com/shaowei.zhou.12" target="_blank"><img src="https://static.wixstatic.com/media/0fdef751204647a3bbd7eaa2827ed4f9.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/0fdef751204647a3bbd7eaa2827ed4f9.webp"></a></li>
					<li><a href="https://twitter.com/weizsw888" target="_blank"><img src="https://static.wixstatic.com/media/c7d035ba85f6486680c2facedecdcf4d.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/c7d035ba85f6486680c2facedecdcf4d.webp"></a></li>
					<li><a href="https://www.instagram.com/weizsw/" target="_blank"><img src="https://static.wixstatic.com/media/01c3aff52f2a4dffa526d7a9843d46ea.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/01c3aff52f2a4dffa526d7a9843d46ea.webp"></a></li>
				</ul>
			</div>
	</div> <!-- end header -->
  
    <div id="loginWidget" class="ui-widget">
        <h2>Login to see something different.</h2>
    	<h1 class="ui-widget-header" style="background: #aab4b8; border-color: #aab4b8">Login</h1>

    	<?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
    	<form action="login.php" method="POST" >
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <input type="submit" value="Submit" style="color:#4595f7">
            </div>
        </form>
        <button>hint</button>
        <div class="hint"></div>
    </div>
  
	

</body>
</html>

