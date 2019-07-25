<!DOCTYPE html>
<html>
<?php
include 'S.Tablescanner.php';
$dirlist = getFileList(".");

$PageName = "Home";
?>
<script
	src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter/dist/mc-player-counter.min.js"></script>
<head>
<link href="style.css" type="text/css" rel="stylesheet">
<title>SchreckTech Official</title>
</head>

<header>
	<h1 id="pagename">Schrecktech Official</h1>
</header>

<body id="withWidget">
	<nav>
		<?php linkFilelist($dirlist, "index")?>
	</nav>

	<p>
		Schrecktech Gaming is a small Discord gaming community mainly for
		Minecraft and LOL. <br> This Website is Dedicated to Official
		SchrecktechGaming Downloads, especially the Modpack we are named
		After.
	</p>

	<iframe src="https://discordapp.com/widget?id=471400847847325717"
		width=500px height=400pxallowtransparency= "true" frameborder="0"></iframe>
</body>

<footer>
	<p>
		There are currently <span data-playercounter-ip="185.244.195.86">100</span>
		players playing on Schrecktech Official.
	</p>
</footer>
</html>