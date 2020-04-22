<?php
namespace App\Helpers;

class ColorChanger{
    public static function color($string){
        return str_replace(array('[',']'), array('<span class="color_helper">','</span>'),$string);
    }

}