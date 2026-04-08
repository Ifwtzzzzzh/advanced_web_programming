<?php

class Robot {
    public $name;
    public $color;
    public $size;

    function __construct($name, $color, $size) {
        $this->name = $name;
        $this->color = $color;
        $this->size = $size;
    }

    function __destruct()
    {
        echo "Ini adalah isi dari function destruct";
    }
}
?>