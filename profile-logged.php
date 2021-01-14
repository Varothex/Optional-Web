<?php
session_start();
if($_SESSION['agent'] != $_SERVER['HTTP_USER_AGENT']) {
    die('Session MAY have been hijacked');
}
?>

<!DOCTYPE html>
<html lang="en-UK">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<title>Doctor Doom/Profile/numele contului</title>
	<img class="ddpic" src="/img/Doctor Doom.png" alt="Doctor Doom">
	<meta charset="utf-8">
	
	<style>
	
		.ddpic
		{
			float: left;
			position:-webkit-sticky;
			position: sticky;
			top: 0;
			height: 5%;
			width: 5%;
		}

		#wall
		{
			background-image: url('/img/wall.jpeg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
	
		*
		{
			box-sizing: border-box;
		}
		
		.menu
		{
			background-color: darkgreen;
			font-weight: bold;
			text-align: center;
			padding: 10px;
			opacity:0.9;
		}

		.menubutton
		{
			background-color: darkgreen;
			border: none;
			color: white;
			padding: 16px;
			font-size: 16px;
			transition-duration: 0.4s;
			cursor: pointer;
		}
		
		.menubuttonon
		{
			
			background-color: lightgreen;
			color: black;
			border: none;
			padding: 16px;
			font-size: 16px;
		}

		.menubutton:hover
		{
			background-color: lightgreen;
			color: black;
		}

		#column1
		{
			background-image: url('/img/DDN c1.png');
			background-repeat: no-repeat;
			background-size: 100%;
            margin-top: 15%;
			float: left;
			width: 20%;
			height: 200px;
		}
		
		article
		{
			text-align: center;
			background-color: green;
            display: inline-block;
			padding: 3%;
			width: 60%;
			height: 430px;
			opacity:0.9;
		}
		
		#column2
		{
			background-image: url('/img/DDN c2.jpeg');
			background-repeat: no-repeat;
			background-size: 100%;
			float: right;
			width: 20%;
			height: 430px;
		}
		
		section:after
		{
			content: "";
			display: table;
			clear: both;
		}
		
		footer
		{
			color: white;
			background-color: darkgreen;
			text-align: center;
			text-decoration: underline;
			padding: 25px;
			height: 70px;
			opacity:0.9;
		}

	</style>
	
</head>

<body id="wall">

	<br>
	<br>
	<br>

	<h1 style="text-align: center; color: green">Profile</h1>

	<div class="menu">
		<a href="menu-logged.html" title='Menu' data-toggle='tooltip'><button class="menubutton">Menu</button></a>
		<a href="character-details.html" title='Character Details' data-toggle='tooltip'><button class="menubutton">Character Details</button></a>
		<a href="comics.html" title='Comics' data-toggle='tooltip'><button class="menubutton">Comics</button></a>
		<a href="games.html" title='Games' data-toggle='tooltip'><button class="menubutton">Games</button></a>
		<button class="menubutton">Movies</button>
		<button class="menubutton">Gallery</button>
		<button class="menubutton">Merch</button>
		<button class="menubutton">Forum</button>
		<a href="fanart.php" title='Fanart' data-toggle='tooltip'><button class="menubutton">Fanart</button></a>
		<button class="menubuttonon">Profile</button>
	</div>

	<section>

		<div id="column1"></div>
	
		<article>
			<h2>Aceasta este pagina contului</h2>
			
			<p>Bine ai venit, <?php echo htmlspecialchars($_SESSION['username'], ENT_XHTML | ENT_QUOTES);?>! Ai rangul de <?php echo $_SESSION['rank'];?>.</p>
			<a href='account-details.php' title='Account Details' data-toggle='tooltip'><button class='menubutton'>Account Details</button></a>
			<a href='logout.php' title='Logout' data-toggle='tooltip'><button class='menubutton'>Logout</button></a>
		</article>

		<div id="column2"></div>

	</section>
	
	<footer>
		<!--<a class="links" href="https://www.youtube.com/watch?v=q5FcKAe4M1w" target="_blank">Aici vor fi link-uri.</a>-->
	</footer>
	
</body>
</html>