<!DOCTYPE html>
<html>
<?PHP
include 'S.Tablescanner.php';
$dirlist = getFileList(".");
?>
<script
	src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter/dist/mc-player-counter.min.js"></script>
<head>
<link href="style.css" type="text/css" rel="stylesheet">
<title>SchreckTech Official</title>
</head>

<header>
	<h1 id="pagename">Downloads:</h1>
</header>

<body>
	<nav>
		<?php linkFilelist($dirlist, "indexTest")?>
	</nav>

	<ol>
		<li><a id="Download_Button" href="SchreckTech.php">SchreckTech
				Modpack</a></li>
		<li><a id="Download_Button" href="SchreckTech2(beta).php">SchreckTech2
				Modpack</a></li>
		<li><a id="Download_Button" href="Schrecktech3.php">SchreckTech3
				Modpack</a></li>
		<li><a id="Download_Button" href="Invasion Pack.php">Invasion Pack</a></li>
		<li><a id="Download_Button" href="Share.php">Share</a></li>
	</ol>

</body>

<footer>
	<p>
		There are currently <span data-playercounter-ip="185.244.195.86">100</span>
		players playing on Schrecktech Official.
	</p>
</footer>
</html>