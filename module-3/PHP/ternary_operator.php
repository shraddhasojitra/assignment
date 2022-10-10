<?php
// Write a PHP program to find the largest of three numbers using ternary
// Operator. 
if (isset($_POST['submit'])) 
{
    $a = $_POST['num1']; //10
    $b = $_POST['num2']; //20
    $c = $_POST['num3']; //30
    $max = ($a > $b && $a > $c) ? $a : ($b > $a && $b > $c ? $b : $c);
    echo $max;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td>enter a number1</td>
                <td><input type="text" name="num1" placeholder="enter number1"></td>
            </tr>
            <tr>
                <td>enter a number2</td>
                <td><input type="text" name="num2" placeholder="enter number2"></td>
            </tr>
            <tr>
                <td>enter a number3</td>
                <td><input type="text" name="num3" placeholder="enter number3"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>