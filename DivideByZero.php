<?php
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
$division = new DivisionByZero();
$store = $division->divideByZero();
?>