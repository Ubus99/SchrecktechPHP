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
	<h1 id="pagename">Schrecktech2(beta) Download:</h1>
</header>

<body>
	<nav>
		<?php linkFilelist($dirlist, "indexTest")?>
	</nav>

	<p>
		Schrecktech2 was supposed to be the big jump from 1.7.10 to newer
		versions. <br> Sadly, not all necessary mods where up to date, so we
		settled for 1.10. <br> we tried ourselves on a skyblock- Gregtech with
		various interconnected mods,<br> centered around a questbook, and
		failed. the task was simply way to hard for us.
	</p>

	<li><a id="Download_Button" href="SchreckTech2(Beta).zip">Download</a></li>

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