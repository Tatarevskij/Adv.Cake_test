<?php


class Words
{
    public function revertCharacters($string) {

        $result = false;
        $strToArr = explode(" ", $string);
        $symbols = array("!", "?", ".", ",");

        foreach ($strToArr as $str){
            foreach ($symbols as $symbol){
                $pos = strpos($str, $symbol);
                if ($pos) {
                    $str = strstr("$str", "$symbol", true);
                    break;
                }
                $symbol = false;
            }

            $string = strrev($str) . "$symbol" . " ";
            if(preg_match('/[А-Я]/', $string)){
                $string = ucfirst(mb_strtolower($string, 'windows-1251'));
            }
            $result = $result . $string;



        }

        return $result;
    }

}
