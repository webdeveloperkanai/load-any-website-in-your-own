<?php 
/*
  Author: Kanai Shil
  Author uri: https://ksconsultant.online
  Company: https://devsecit.com
  Description: Load any website into your own website. For more updates follow on https://devsecit.com
  
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Demo </title>
</head>
<body>
    <div class="banner"> 
        <h3>Preview</h3>
        <a href="" class="buyBTN">Buy Now</a>
    </div>
	<iframe src="https://<?= $_GET['id'] ?>"></iframe>
	
	<style>
	    * {
    margin: 0px;
    padding: 0px; 
}
h3 {
    font-size: 30px; 
    padding: 0px;
    margin: 0px; 
    position: absolute
}
.banner {
    background: #FF6400; 
    padding: 15px;
    color: white; 
    box-shadow: 0 10px 10px 15px;
    height: 5vh;
}
body {
    overflow: hidden
}
iframe {
    border: 0px; 
    height: 90vh;
    width: 101%;     
}
.buyBTN {
    float: right; 
    color: white; 
    text-decoration: none; 
    background: #000;
    padding: 15px 45px;
    margin-top: -5px;
    border-radius: 35px;
    animation: 0.5s anmt linear infinite;
    font-weight: bold; 
    font-family: Arial;
}

@keyframes anmt {
    0%,100% {
        color: green; 
    }
    50% {
        color: white
    }
}
	</style>
</body>
</html>
