<?php
include '../System/GenericDownloadPage.php';
$page = new GenericDownloadPage();
$page->GeneratePage("", "SchreckTech Official", "Schrecktech3 Download:", "Schrecktech3 is our latest installment in the gregtech series, and
  runs great so far.<br> there are still some bugs to solve, but early
  and mid-game are very fun. <br> to get the full experience, please
  download the configs.<br> they are suspect to regular change and
  contain all integration features.", [
    new ZipFile([
        "TestFolder"
    ], "Test1")
    /*
 * new ZipFile([
 * "TestFolder",
 * "TestFolder"
 * ], "Test2")
 */
]);
?>