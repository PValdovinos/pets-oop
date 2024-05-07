<?php

// 328/pets/pet.php
// Note that class name does not
// need to match file name
class Pet
{
    // Fields
    private $_name;
    private $_color;

    function eat()
    {
        echo "<p>" . $this->_name . " is eating</p>";
    }

    function talk()
    {
        echo "<p>Pet is talking</p>";
    }

    function sleep()
    {
        echo "<p>Pet is sleeping</p>";
    }
}