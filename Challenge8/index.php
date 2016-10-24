<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Challenge 8</title>
	<style type="text/css">
		
		img {
			height: 500px;
			width: 800px;
		}
	</style>
</head>
<body>
	<?php

		$dir = "images/";
		if(is_dir($dir) or die("Directory is not exist, Line 18")) {
			if($dh = opendir(($dir)) or die("Filed to open Directory,  Line 19")) {
				while(($file = readdir($dh)) !== false) {
					if(strpos($file, 'jpg') || strpos($file, 'jpeg') || strpos($file, 'png')  || strpos($file, 'gif') !== false) {
						
						echo '<div><img src="images/'.$file.'" alt="'.$file.'"></div>';
						
					}
				}
				closedir($dh);
			}
		}
	?>

</body>
</html>