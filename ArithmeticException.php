<?php
function divide($dividend,$divisor)
{
    try
    {
        if($divisor == 0)
        {
            echo "Before\n";
           // throw new DivisionByZeroError();
            echo "After";   
        }
        echo "Hi\n";
        return $dividend / $divisor;

    }
    catch(DivisionByZeroError $e)
    {
        echo "CAught Exception : ",$e -> getMessage()."\n";
    }
    finally
    {
        echo "Execution Completed";
    }
}

echo $store = divide(10,0);
?>