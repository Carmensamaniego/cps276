<?php
/*require_once "Calculator.php";
$Calculator = new Calculator();
echo $Calculator->calc("/", 10, 0); //will output Cannot divide by zero
echo $Calculator->calc("*", 10, 2); //will output The product of the numbers is 20
echo $Calculator->calc("/", 10, 2); //will output The division of the numbers is 5
echo $Calculator->calc("-", 10, 2); //will output The difference of the numbers is 8
echo $Calculator->calc("+", 10, 2); //will output The sum of the numbers is 12
echo $Calculator->calc("*", 10); //will output You must enter a string and two numbers
echo $Calculator->calc(10); //will output You must enter a string and two <numbers></numbers>
*/


class Calculator{

function calc($operator, $var1 = null, $var2 = null) {
    if ($operator = "/" && $var2 == 0) {
       /* if($var2 == 0){
            return "Cannot divide by zero <br>";
        }
        else if ($operator = "/"){
            return "The product of the numbers is " . $var1 / $var2 . "<br>";
            
        }*/
        return "Cannot divide by zero <br>";
    }
    else if ($operator = "/"){
        return "The division of the numbers is " . $var1 / $var2 . "<br>";
    }
    else if($operator = "*"){
        return "The product of the numbers is " . $var1 * $var2 . "<br>";
    }
    else if($operator = "+"){
        return "The sum of the numbers is " . $var1 + $var2 . "<br>";
    }
    else if($operator = "-"){
        return "The difference of the numbers is " . $var1 - $var2 . "<br>";
    }

    if ($var1 = null){
        return "You must enter a string and two numbers. <br>";
    }
    else if ($var2 = null){
        return "You must enter a string and two <numbers></numbers> <br>";
    }


}
}

?>