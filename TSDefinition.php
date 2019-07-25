<?php

interface TSDefinition
{

    public function getPreferedName();

    public function getLevel();

    public function getParentFile();
}

function getInternalFileType()
{
    if (getParentFile() == "System") {
        return "System";
    } else {
        return "Page";
    }
}
?>
