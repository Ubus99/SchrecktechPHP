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

	<p>
		Out of a need for variety we played the Invasion Pack between
		Schrecktech 2&3.<br> it's a Hardcore survival Pack, centered around
		defending the nexus from monster waves.<br> bundled with bloodmoon and
		infernal Mobs, this modpack is not for those without nerves of steel.
	</p>

	<a id="Download_Button" href="Invasion_Pack.zip">Download</a>

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