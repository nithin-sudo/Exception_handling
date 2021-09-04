<?php
class WindowException extends Exception{}

function testString($data)
{
    try
    {
        if($data == "Window")
        {
            echo "Close the window";
        }
        else if($data == "Door")
        {
            throw new WindowException("\nDoor is Repaired");
        }
    }
    catch(WindowException $window)
    {
        echo "\nException Message :".$window -> getMessage();
    }
}

echo "String Test";
testString("Door");
?>