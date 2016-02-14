<?php

namespace models;

class User
{
    public function __construct()
    {
        echo "User2";
    }

    public function add($x, $y)
    {
        return $x + $y;
    }
}
