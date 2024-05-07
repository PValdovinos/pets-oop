<?php

// 328/pets/pet.php
// Note that class name does not
// need to match file name
class Pet
{
    // Fields
    private $_name;
    private $_color;

    /**
     * Set the pet's name
     */
    function setName($name)
    {
        $this->_name = $name;
    }

    /** Get the pet's name */
    function getName()
    {
        return $this->_name;
    }

    function setColor($color)
    {
        $this->_color = $color;
    }

    /** Get the pet's name */
    function getColor()
    {
        return $this->_name;
    }

    // Default constructor
    function __construct($name="unknown", $color="???")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo "<p>$this->_name is eating</p>";
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