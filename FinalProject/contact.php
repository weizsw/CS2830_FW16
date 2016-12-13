<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular|Asul|Concert+One|Eczar|Fruktur|Gloria+Hallelujah|Kavoon|Neuton|Space+Mono|Tillana|Work+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<style type="text/css">
	
	.backgroundImg {
				width: 100%;
	}

	.backgroundImg img {
		width: 100%;
	}

	.getInfo {
		top: 0;
		right: 0;
		margin-right: 300px;
		margin-top: 170px;
		width: 500px;
		height: 500px;
		background: white;
		position: absolute;
		z-index: 9;
	}

	.infoInput {
		margin: 50px;
		/*text-align: center;*/
		font-family: "Space Mono";
	}

	.infoInput p {
		margin: 0;

	}

	.infoInput input[type="text"], .infoInput input[type="email"] {
		width: 100%;
		margin-bottom: 10px;
		height: 30px;
		text-indent: 10px;
	}

	.infoInput textarea {
		height: 100px;
		text-indent: 10px;
		width: 100%;
		font-size: 15px;
		resize: none;
		/* border-color: #bfbfbf; */
		border: 0.5px solid #bfbfbf;
	}

	.infoInput input[type="submit"] {
		position: absolute;
		right: 0;
		margin-right: 45px;
		background: #4595f7;
		color: white;
		border: none;
		height: 30px;
		width: 70px;
	}

	.bold {
		font-weight: bold;
	}

	.head {
		font-size: 30px;
		margin-bottom: 20px;
	}

	


</style>
<body>
	<div class="header">
				
				<div class="btns">
					
					<ul>
						<li><a href="index.html" >Welcome</a></li>
						<li><a href="main.php">Portfolio</a></li>
						<!-- <li><a href="#">Showcase</a></li> -->
						<li><a href="login.php">Login</a></li>
						<li><a href="contact.php" class="active-btn">Contact</a></li>
						<li><a href="https://www.facebook.com/shaowei.zhou.12" target="_blank"><img src="https://static.wixstatic.com/media/0fdef751204647a3bbd7eaa2827ed4f9.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/0fdef751204647a3bbd7eaa2827ed4f9.webp"></a></li>
						<li><a href="https://twitter.com/weizsw888" target="_blank"><img src="https://static.wixstatic.com/media/c7d035ba85f6486680c2facedecdcf4d.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/c7d035ba85f6486680c2facedecdcf4d.webp"></a></li>
						<li><a href="https://www.instagram.com/weizsw/" target="_blank"><img src="https://static.wixstatic.com/media/01c3aff52f2a4dffa526d7a9843d46ea.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/01c3aff52f2a4dffa526d7a9843d46ea.webp"></a></li>
					</ul>
				</div>
	</div> <!-- end header -->

	<div class="backgroundImg">
		<img src="images/lights-lamps-design-recycling.jpg">
		<div class="getInfo">
			<div class="infoInput">
				<p class="head">GET IN TOUCH</p>
				<p class="bold">Email</p>
				<p>weizsw888@gmail.com</p>
				<p class="bold">Phone</p>
				<p>206-602-9271</p>
				<br>
				
				<form action="" method="GET">
					<input type="text" name="name" placeholder="Name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					
					<textarea name="message" placeholder="Message(max: 250)" maxlength="250" required=""></textarea>
					<input type="submit" name="submit" value="Send">

					<p id="infobox"></p>
				</form>
			</div>
			
		</div>
		

		
	</div>

</body>

<script type="text/javascript">
  
  function infobox() {
    var text = "Message sent Successfully!";
    var result = text.fontcolor("#9aeb63");
    return result
  }

  function invalid_username() {
    var text = "Please contact admin.";
    var result = text.fontcolor("#F51215");
    return result
  }
  
</script>
</html>
<?php
	include("db.conf");

	if(isset($_GET['submit'])) {
		$link =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Connect Error " . mysqli_error($link));
		$sql = "INSERT INTO MESSAGE (name, email, message) VALUES (?, ?, ?)";

		if($stmt = mysqli_prepare($link, $sql)) {
	                        //value in form
	      mysqli_stmt_bind_param($stmt, "sss", $_GET['name'], $_GET['email'], $_GET['message']) or die ("Line 150");
	      if(mysqli_stmt_execute($stmt)) {
	        echo '<script type="text/javascript">';
	        echo "document.getElementById('infobox').innerHTML = infobox();";
	        echo "</script>";
	      }
	      else {
	        echo '<script type="text/javascript">';
	        echo "document.getElementById('infobox').innerHTML = invalid_username();";
	        echo "</script>";
	      }
	    }
	    else {
	      die("Prepared Failed Line 163");
	    }
	  }

        
        
    




