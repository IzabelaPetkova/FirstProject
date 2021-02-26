<?php

class Printer{
    //static - за да може да я извикаме по по-лесен начин ред 12
    public static function parse($array) {
        //pre - за подреждане на масив
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

$array =["ssff","ssff","ssff","ssff","ssff","ssff"];
//викаме функцията от класа
Printer::parse($array);