<?php
namespace App\Helpers;

class AppHelper{
    public static function parseDomain($content){
        $domain = asset('/');
        return str_replace('[domain]',$domain,$content);
    }
}