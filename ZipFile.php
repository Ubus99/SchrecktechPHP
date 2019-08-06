<?php

class ZipFile
{

    private $Sources;

    private $Name;

    function __construct(Array $Sources, String $Name)
    {
        $this->Sources = $Sources;
        $this->Name = $Name;
    }

    function getSources()
    {
        return $this->Sources;
    }

    function getName()
    {
        return $this->Name;
    }
}
?>