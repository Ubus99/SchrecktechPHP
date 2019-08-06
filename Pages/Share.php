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
	<h1 id="pagename">Shared Download:</h1>
</header>

<body>
	<nav>
		<?php linkFilelist($dirlist, "indexTest")?>
	</nav>

	<p>This Page is meant for our members to share files.</p>

	<!--insert link here-->

</body>

<footer>
	<p>
		There are currently <span data-playercounter-ip="185.244.195.86">100</span>
		players playing on Schrecktech Official.
	</p>
</footer>
</html>