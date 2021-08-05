<?php

class Motto
{
    static $mottoText = "Foo Bar";

    public static function getText()
    {
        return Motto::$mottoText;
    }
}
