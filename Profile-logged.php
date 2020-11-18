<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en-UK">

<head>
	<title>Doctor Doom/Profile/numele contului</title>
	<img class="ddpic" src="/img/Doctor Doom.png" alt="Doctor Doom">
	<meta charset="utf-8">
	<!--<link rel="stylesheet" href="Tema 2.css">-->
	<!--<script type="text/javascript" src="Tema2.js"></script>-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>-->
    <!--<style type="text/css">-->
	
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
			background-size: 307px 430px;
			/*background-color: lightgreen;*/
			float: left;
			width: 20%;
			height: 430px;
		}
		
		article
		{
			text-align: center;
			background-color: green;
			float: left;
			padding: 20px;
			width: 60%;
			height: 430px;
			opacity:0.9;
		}
		
		#column2
		{
			background-image: url('/img/DDN c2.jpeg');
			background-repeat: no-repeat;
			background-size: 307px 450px;
			/*background-color: lightgreen;*/
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

		/*a:link
		{
			color: white;
			background-color: transparent;
			text-decoration: none;
		}

		a:visited
		{
			color: lightgreen;
			background-color: transparent;
			text-decoration: none;
		}
		
		a:hover
		{
			color: black;
			background-color: transparent;
			text-decoration: underline;
		}
		
		a:active
		{
			color: white;
			background-color: transparent;
			text-decoration: underline;
		}*/

	</style>
	
</head>

<body id="wall">

	<br>
	<br>
	<br>

	<h1 style="text-align: center; color: green">Profile</h1>

	<div class="menu">
		<button class="menubutton"><a href="Menu-logged.html">Menu</a></button>
		<button class="menubutton">Character Details</button>
		<button class="menubutton">Comics</button>
		<button class="menubutton">Games</button>
		<button class="menubutton">Movies</button>
		<button class="menubutton">Gallery</button>
		<button class="menubutton">Merch</button>
		<button class="menubutton">Forum</button>
		<button class="menubutton">Fanart</button>
		<button class="menubuttonon">Profile</button>
	</div>

	<section>

		<div id="column1"></div>
	
		<article>
			<h2>Aceasta este pagina contului</h2>
			
			<p>Bine ai venit, <?php echo $_SESSION['username']; ?> !</p>
			
			<!--<button class="menubutton"><a href="register.php">Login</a></button>-->
			<button class="menubutton"><a href="CRUD.php">Account Details</a></button>
			<button class="menubutton"><a href="reset-password.php">Reset your password</a></button>
			<button class="menubutton"><a href="logout.php">Logout</a></button>
			<?php 
				//echo "<a href='read.php ' title='View Account' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
				/*echo "<a href='update.php?id=". $row['id'] ."' title='Update Account' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
				echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Account' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
			*/?>
		</article>

		<div id="column2"></div>

	</section>
	
	<footer>
		<!--<a class="links" href="https://www.youtube.com/watch?v=q5FcKAe4M1w" target="_blank">Aici vor fi link-uri.</a>-->
	</footer>
	
</body>
</html>