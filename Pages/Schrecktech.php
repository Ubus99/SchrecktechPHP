<!DOCTYPE html>
<html>
<?php
include 'Tablescanner.php';
$dirlist = getFileList(".");
?>
    <script
	src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter/dist/mc-player-counter.min.js"></script>
<head>
<link href="style.css" type="text/css" rel="stylesheet">
<title>SchreckTech Official</title>
</head>

<header>
	<h1 id="pagename">Schrecktech Download:</h1>
</header>

<body>
	<nav>
		<?php linkFilelist($dirlist, "indexTest")?>
	</nav>

	<p>Schrecktech was our first big Minecraft modpack based around
		GregTech and lasted for over a jear. with time it accumulated varions
		unnecessary mods, crippling its performance, thus they are not
		included.</p>

	<li><a id="Download_Button" href="SchreckTech.zip">Download</a></li>

	<h3>mods:</h3>		
	<?php
showFileList($dirlist);
?>
	</body>

<footer>
	<p>
		There are currently <span data-playercounter-ip="185.244.195.86">100</span>
		players playing on Schrecktech Official.
	</p>
</footer>
</html>