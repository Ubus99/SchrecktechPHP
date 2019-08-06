<?PHP

function getFileList($dir)
{
    if (function_exists('mime_content_type')) {
        $finfo = FALSE;
    } else {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
    }

    // array to hold return value
    $retval = [];

    // add trailing slash if missing
    if (substr($dir, - 1) != "/") {
        $dir .= "/";
    }

    // open pointer to directory and read list of files
    $d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
    while (FALSE !== ($entry = $d->read())) {
        // skip hidden files
        if ($entry{0} == ".")
            continue;
        if (is_dir("{$dir}{$entry}")) {
            $retval[] = [
                'name' => "{$dir}{$entry}/",
                'type' => filetype("{$dir}{$entry}"),
                'size' => 0,
                'lastmod' => filemtime("{$dir}{$entry}")
            ];
        } elseif (is_readable("{$dir}{$entry}")) {
            $retval[] = [
                'name' => "{$dir}{$entry}",
                'type' => ($finfo) ? finfo_file($finfo, "{$dir}{$entry}") : mime_content_type("{$dir}{$entry}"),
                'size' => filesize("{$dir}{$entry}"),
                'lastmod' => filemtime("{$dir}{$entry}")
            ];
        }
    }
    $d->close();

    return $retval;
}

function showFileList($dirlist)
{
    echo '<h3>mods:</h3>
    <ul>\n';
    foreach ($dirlist as $file) {
        echo "<li>\n";
        echo "{$file['name']}";
        echo "{$file['type']}";
        echo "{$file['size']}";
        echo "", date('r', $file['lastmod']), "\n";
        echo "</li>\n";
        echo "</ul>\n";
    }
}

function linkFileList($dirList) // todo
{
    $StackTrace = debug_backtrace();
    var_dump($StackTrace);
    echo '<ul>', $StackTrace[0]['file'];
    foreach ($dirList as $file) { // iterate
        $isCurrent = false;
        try { // test for page
            $type = $file->getInternalFileType();
            if ($type = "Page") {
                echo "<li";
                $name = $file->getPreferedName();
                $temp = explode('/', $StackTrace[0]['name']);
                $tempLength = sizeof($temp);
                $name = substr($temp[$tempLength], 0, $tempLength - 4);
                if ($file['name'] == $name) { // test for current page
                    echo " class=current";
                    $isCurrent = true;
                    if ($file->getLevel() == 2) { // current and secondary
                        echo ", sec";
                    }
                } elseif ($file->getLevel() == 2) { // only Secondary
                    echo "class=sec";
                }
                echo ">
                <a href= ", substr($temp[$tempLength], 4, strlen($temp[$tempLength]) - 8), '>', $name, '</a>'; // P1=Filename, P2=Displayname
                echo '</li>';
            }
        } catch (Exception $e) {}
    }
}
?>