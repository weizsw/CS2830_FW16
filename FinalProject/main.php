<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hello!</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular|Asul|Concert+One|Eczar|Fruktur|Gloria+Hallelujah|Kavoon|Neuton|Space+Mono|Tillana|Work+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	
	<!-- <link rel="stylesheet" type="text/css" href="css/zoomin.css"> -->
	
</head>
<body style="background-color: #222222;">
	<div class="header">
			<!-- <div class="audio-player">
				<h1>Demo - Preview Song</h1>
				<img class="cover" src="img/cover.png" alt="" >
				<audio id="audio-player" src="music/爽子与瓷乐队 - 自由的飞.mp3" controls="controls">
     				 
    			</audio>
			</div> -->
			<div class="btns">
				
				<ul>
					<li><a href="index.html" >Welcome</a></li>
					<li><a href="main.php" class="active-btn">Portfolio</a></li>
					<!-- <li><a href="#">Showcase</a></li> -->
					<li><a href="login.php"><?php
						if ($loggedIn) {
							print "Welcome: $loggedIn";
						}
						else {
							print "login";
						}
					?></a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="https://www.facebook.com/shaowei.zhou.12" target="_blank"><img src="https://static.wixstatic.com/media/0fdef751204647a3bbd7eaa2827ed4f9.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/0fdef751204647a3bbd7eaa2827ed4f9.webp"></a></li>
					<li><a href="https://twitter.com/weizsw888" target="_blank"><img src="https://static.wixstatic.com/media/c7d035ba85f6486680c2facedecdcf4d.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/c7d035ba85f6486680c2facedecdcf4d.webp"></a></li>
					<li><a href="https://www.instagram.com/weizsw/" target="_blank"><img src="https://static.wixstatic.com/media/01c3aff52f2a4dffa526d7a9843d46ea.png/v1/fill/w_20,h_20,al_c,q_80,usm_0.66_1.00_0.01/01c3aff52f2a4dffa526d7a9843d46ea.webp"></a></li>
				</ul>
			</div>
	</div> <!-- end header -->
	<div class="img" id="firstRow">
		<figure class="img-container">
			<a  href="#" class="darken"><img src="images/84770f_227dd4720d944aa384122fe75e683088-mv2_d_1920_1280_s_2.jpg"></a>
			<figcaption>
					<div class="heart-container">
					<div class="heart " id="like1" rel="like"></div> 
					<div class="likeCount" id="likeCount1">0</div>
					</div>
			</figcaption>
		</figure>
		<figure class="img-container">
			<a  href="#" class="darken"><img src="images/84770f_51f481ab0b0d4adda6e68ca3dea0162b-mv2_d_4256_2832_s_4_2.jpg"></a>
			<figcaption>
					<div class="heart-container">
					<div class="heart " id="like2" rel="like"></div> 
					<div class="likeCount" id="likeCount2">0</div>
					</div>
			</figcaption>
		</figure>
		<figure class="img-container">
			<a href="#" class="darken"><img src="images/84770f_694f8e520e8c413689f95c34b0410a5b-mv2_d_5420_3613_s_4_2.jpg"></a>
			<figcaption>
					<div class="heart-container">
					<div class="heart " id="like3" rel="like"></div> 
					<div class="likeCount" id="likeCount3">0</div>
					</div>
			</figcaption>
		</figure>
		<figure class="img-container">
			<a href="#" class="darken"><img src="images/84770f_6adc0e521fdf4da0b8251118880b44b5-mv2_d_1921_2090_s_2.jpg"></a>
			<figcaption>
					<div class="heart-container">
					<div class="heart " id="like4" rel="like"></div> 
					<div class="likeCount" id="likeCount4">0</div>
					</div>
			</figcaption>
		</figure>
	</div>
	<div class="img">
		<figure class="img-container">
			<a href="#" class="darken"><img src="images/84770f_9b12a0d79f654a38bf7b7551d68b00de-mv2_d_5472_3648_s_4_2.jpg"></a>
			<figcaption>
					<div class="heart-container">
					<div class="heart " id="like5" rel="like"></div> 
					<div class="likeCount" id="likeCount5">0</div>
					</div>
			</figcaption>
		</figure>
		<figure class="img-container">
			<a href="#" class="darken"><img src="images/84770f_af6838b6333341a4b1279cdf37512e10-mv2_d_2000_1357_s_2.jpg"></a>
			<figcaption>
					<div class="heart-container">
					<div class="heart " id="like6" rel="like"></div> 
					<div class="likeCount" id="likeCount6">0</div>
					</div>
			</figcaption>
		</figure>
		<figure class="img-container">
			<a href="#" class="darken"><img src="images/84770f_e07b464c1ce14a6aa1020e4c72daccc2-mv2_d_2736_4128_s_4_2.jpg"></a>
			<figcaption>
					<div class="heart-container">
					<div class="heart " id="like7" rel="like"></div> 
					<div class="likeCount" id="likeCount7">0</div>
					</div>
			</figcaption>
		</figure>
		<figure class="img-container">
			<a href="#" class="darken"><img src="images/84770f_fb3dfac02cc946a1bcae90828c58d572-mv2_d_3855_2891_s_4_2.jpeg"></a>
			<figcaption>
					<div class="heart-container">
					<div class="heart " id="like8" rel="like"></div> 
					<div class="likeCount" id="likeCount8">0</div>
					</div>
			</figcaption>
		</figure>
	</div>


	<!-- <script src="js/jquery.imgbox.pack.js" ></script>
	<script src="js/jquery.min.js"></script> -->
	<script src="http://libs.useso.com/js/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
	<script>

		

		$(document).ready(function() {
	    
			$('body').on("click",'.heart',function() {
		    	
		    	var A=$(this).attr("id");
		    	var B=A.split("like");
		        var messageID=B[1];
		        var C=parseInt($("#likeCount"+messageID).html());
		    	$(this).css("background-position","")
		        var D=$(this).attr("rel");
		       
		        if(D === 'like') {      
			        $("#likeCount"+messageID).html(C+1);
			        $(this).addClass("heartAnimation").attr("rel","unlike");
		        
		        }
		        else {
			        $("#likeCount"+messageID).html(C-1);
			        $(this).removeClass("heartAnimation").attr("rel","like");
			        $(this).css("background-position","left");
		        }
		    });

		    var selector = '.btns a';
		    $(selector).on('click', function() {
		    	$(selector).removeClass('active-btn');
		    	$(this).addClass('active-btn');
		    	});
			});

			
    		// $('#audio-player').mediaelementplayer({
	     //        alwaysShowControls: true,
	     //        features: ['playpause','volume','progress'],
	     //        audioVolume: 'horizontal',
	     //        audioWidth: 400,
	     //        audioHeight: 120
    		// });
    		

		

	
		

	</script>
</body>
</html>