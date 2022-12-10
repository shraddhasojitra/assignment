<?php
//Write a PHP program to check Leap years between 1901 to 2016 Using nested if.
for(i=1901,$i<=2016,i++)
{
    if($i % 4 == 0)
    {
        if(i %10 !==0, $ii % 4 == 0)
        echo "$i is a leap year";
    }
    else{
        echo "$i is a not leap year";
    }
}
?>