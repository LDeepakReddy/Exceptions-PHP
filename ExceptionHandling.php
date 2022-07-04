<?php

class DivisibleZero
{
    static function divisibleByZero($num)
    {
        $division = 0;
        try {
            if ($division > 1)
            echo $num/$division ; 
            else
            throw new Exception("value cannot be zerp");

            // $result = $num / 0;
            // echo $result;
        } catch (Exception $e) {
            echo " exception catch". $e->getMessage(). "\n";
        }
    }
}
echo DivisibleZero::divisibleByZero(1);
