<?php
include 'S.Tablescanner.php';
include 'S.TSDefinition.php';

global $dirlist;
global $PageName;
global $parentFile;

class GenericHomePage implements TSDefinition
{

    public function GeneratePage($SuperPage, $Header, $pageName, $Description)
    {
        $PageName = $pageName;
        $parentFile = $SuperPage;
        echo '<!DOCTYPE html>';
        echo '<html>';
        echo '<script src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter/dist/mc-player-counter.min.js"></script>';
        echo '<head>';
        echo '<link href="style.css" type="text/css" rel="stylesheet">';
        echo '<title>', $Header, '</title>';
        echo '</head>';
        echo '<header>';
        echo '<h1 id="pagename"', $PageName, '</h1>';
        echo '</header>';
        echo '<body id="withWidget">';
        echo '<nav>';
        linkFilelist(getFileList("."));
        echo '</nav>';
        echo '<p>';
        echo $Description;
        echo '</p>';
        echo '<iframe src="https://discordapp.com/widget?id=---------------","width=500px height=400px allowtransparency= "true" frameborder="0"></iframe >';
        echo '</body>';
        echo '<footer>';
        echo '<p>';
        echo 'There are currently <span data-playercounter-ip="-----------------">100</span> players playing on Schrecktech Official.';
        echo '</p>';
        echo '</footer>';
        echo '</html>';
    }

    public function GetPreferedName()
    {
        return $PageName;
    }

    public function getLevel()
    {
        if ($parentFile != null) {
            return $parentFile . getLevel() + 1;
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
