<?php
include 'Tablescanner.php';
include 'TSDefinition.php';
include 'ZipFile.php';
include 'Page.php';
include 'Zip.php';

$dirlist = getFileList(".");
global $PageName;
global $parentFile;

class GenericDownloadPage implements TSDefinition
{

    function GeneratePage($SuperPage, $Header, $pageName, $Description, Array $DownloadDirectories)
    {
        $PageName = $pageName;
        $parentFile = $SuperPage;
        echo '<!DOCTYPE html>
        <html>
        <script src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter/dist/mc-player-counter.min.js"></script>
        <head>
        <link href="', Stylesheet, '" type="text/css" rel="stylesheet">
        <title>', $Header, '</title>
        </head>
        <header>
        <h1 id="pagename">', $PageName, '</h1>
        </header>
        <body>
        <nav>';
        GetMenu();
        echo '</nav>
        <p>', $Description, '</p>
        <ul>';
        foreach ($DownloadDirectories as $Downloads) { // split in downloads
            zipDirectory($Downloads);
            echo '<li>
            <a id="Download_Button" href=', $Downloads->getName() . ".zip", '>', $Downloads->getName(), '</a>', '</li>';
        }
        echo '<?php showFileList($dirlist);?>
        </body>
        <footer>
        <p>
        There are currently <span data-playercounter-ip="185.244.195.86">100</span>players playing on Schrecktech Official.
        </p>
        </footer>
        </html>';
    }

    function getInternalFileType()
    {
        if (getParentFile() == "System") {
            return "System";
        } else {
            return "Page";
        }
    }

    public function GetPreferedName()
    {
        return $PageName;
    }

    public function getLevel()
    {
        if ($parentfile != null) {
            return $parentfile . getLevel() + 1;
        } else {
            return 1;
        }
    }

    public function getParentFile()
    {
        return $ParentFile;
    }
}
?>
