<?php
include("Config.php");

class Class1
{
    public static function meghiv()
    {
        $res = Config::get('teszt');

        return $res;
    }
}
