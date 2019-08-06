<?php

function zipDirectory(object $ZipClass)
{
    var_dump($ZipClass);
    // Initialize archive object
    $zip = new ZipArchive();
    $zip->open($ZipClass->getName(), ZipArchive::CREATE | ZipArchive::OVERWRITE);
    foreach ($ZipClass->getSources() as $directory) { // split directories up
        // Create recursive directory iterator
        /** @var SplFileInfo[] $files */

        $rootPath = realpath($directory); // Get real path for our folder}
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($rootPath), RecursiveIteratorIterator::LEAVES_ONLY);
        foreach ($files as $name => $file) {
            // Skip directories (they would be added automatically)
            if (! $file->isDir()) {
                // Get real and relative path for current file
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);

                // Add current file to archive
                $zip->addFile($filePath, $relativePath);
            }
        }
    }
    // Zip archive will be created only after closing object
    $zip->close();
}
?>