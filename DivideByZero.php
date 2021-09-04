<?php
/**
 * contains functions and performing 
 * predefined Exception using try catch.
 */
class DivisionByZero
{
    function divideByZero() 
    {
        $a = 2;
        $b = 0;
        try{
            $c = $a / $b;
            return $c;
        }
        catch(DivisionByZeroError $e)
        {
            echo $e -> getmessage();
        }
    }
}
//creating object
$division = new DivisionByZero();
$store = $division->divideByZero();
?>