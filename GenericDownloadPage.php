<?php
include 'S.Tablescanner.php';
include 'S.TSDefinition.php';

$dirlist = getFileList(".");
global $PageName;
global $parentFile;

class GenericDownloadPage implements TSDefinition
{

    function GeneratePage($SuperPage, $Header, $pageName, $Description, $File)
    {
        $PageName = $pageName;
        $parentFile = $SuperPage;
        echo '<!DOCTYPE html>
        <html>
        <script src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter/dist/mc-player-counter.min.js"></script>
        <head>
        <link href="style.css" type="text/css" rel="stylesheet">
        <title>', $Header, '</title>
        </head>
        <header>
        <h1 id="pagename">', $PageName, '</h1>
        </header>
        <body>
        <nav>
        <?php linkFilelist(', todo, ')?>
        </nav>
        <p>', $Description, '</p>
        <ul>';
        foreach ($File as $file) {
            echo '<li>
        <a id="Download_Button" href=', $file[0], '>', ($file[1] != null ? $file[1] : "Download"), '</a>
        </li>';
        }
        echo '<?php showFileList($dirlist);?>
        </body>
        <footer>
        <p>
        There are currently <span data-playercounter-ip="------------------">100</span>players playing on Schrecktech Official.
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
