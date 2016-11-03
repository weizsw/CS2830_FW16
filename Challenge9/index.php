<!-- Shaowei Zhou
14215493
11/3/2016 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Challenge9</title>
</head>
<style type="text/css">
	
	.container {
		margin-left: auto;
		margin-right: auto;
		width: 400px;
		height: 200px;
		background-color: #DFE4EA;
		border: 1px solid black;
		text-align: center;
		border-radius: 5px;
	}

	ul li {
		
		text-align: left;
	}

	button {
		background-color: #337AEA;
		color: white;
		width: 25%;
	}

	#contentBox {
		margin-top: 10px;
		margin-left: auto;
		margin-right: auto;
		width: 320px;
	}
</style>
<script type="text/javascript">
	
	function Home() {
		var xmlHttp = new XMLHttpRequest();

		xmlHttp.onreadystatechange = function() {
			if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {

				var response = xmlHttp.responseText;

				var contentBox = document.getElementById('contentBox');

				contentBox.innerHTML = response;
			}
		};
	

		document.getElementById('contentBox').innerHTML = "Loading...";

		xmlHttp.open("GET", "http://ec2-54-162-120-82.compute-1.amazonaws.com/Challenge9/webService.php?content=home", true);

		xmlHttp.send();

	}

	function XML_Dinos() {
		var xmlHttp = new XMLHttpRequest();
		
		xmlHttp.onload = function() {
			if (xmlHttp.status == 200) {
				// Get XML Document
				var xmlDoc = xmlHttp.responseXML;
				
				// Variable for our output
				var output = '';
				
				// Build output by parsing XML
				dinosName = xmlDoc.getElementsByTagName('name');
				dinosPeriod = xmlDoc.getElementsByTagName('period');
				//movieTitles = xmlDoc.getElementsByTagName('nick');
				
				console.dir(dinosName); 
				console.dir(dinosPeriod);
				
				for (i = 0; i < dinosName.length; i++) {
					output += "<li>" + dinosName[i].childNodes[0].nodeValue + " lived during the " + dinosPeriod[i].childNodes[0].nodeValue + "</li>";
				}
				
				// Get div object
				var divObj = document.getElementById('contentBox');
				
				// Set the div's innerHTML
				divObj.innerHTML = "<ul>" + output + "</ul>";//movieTitles.length;
			}
		}
		document.getElementById('contentBox').innerHTML = "Loading...";
		xmlHttp.open("GET", "http://ec2-54-162-120-82.compute-1.amazonaws.com/Challenge9/webService.php?content=data&format=xml", true);
		xmlHttp.send();
	}

	function JSON_Dinos() {
            // Loading feedback
            
            
            
            var xmlHttp = new XMLHttpRequest();
            
            xmlHttp.onload = function() {
                if (xmlHttp.status == 200) {
                    var contentBox = document.getElementById("contentBox");
                    
                    // Get the response text
                    var response = xmlHttp.responseText;
                    
                    // This prints the JSON string
                    console.dir(response);
                    
                    // JSON.parse converts the JSON string into a JavaScript object
                    response = JSON.parse(response);
                    
                    // This prints our object
                    console.dir(response);

                    var output = '';
                    // And we can use the object like so:
                    for(i = 0; i < response.length; i++){
                    	output += "<li>" + response[i].name + " was a " + response[i].diet + "</li>"; 
                	}
                	contentBox.innerHTML = "<ul>" + output + "</ul>";
                }
            };
            document.getElementById("contentBox").innerHTML = "Loading...";
            
            xmlHttp.open("GET", "http://ec2-54-162-120-82.compute-1.amazonaws.com/Challenge9/webService.php?content=data&format=json", true);
            xmlHttp.send();
            
        }
</script>
<body>
	<div class="container">
		<h1>Dinosaur Web Application</h1>
		<button type="button" onclick="Home()">Home</button>
		<button type="button" onclick="XML_Dinos()">XML Dinos</button>
		<button type="button" onclick="JSON_Dinos()">JSON Dinos</button>
		<div id="contentBox"></div>
	</div>

</body>
</html>

<?php

?>