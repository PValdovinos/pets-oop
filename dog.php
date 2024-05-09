<?php

class Dog extends Pet
{
    private $_breed;

    function __construct($name="unknown", $color="???", $breed="mutt")
    {
    parent::__construct($name, $color);
    $this->_breed = $breed;
    }

    function fetch()
    {
        echo "<p>" . $this->getName() . " is fetching.</p>";
    }


}