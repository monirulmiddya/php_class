<?php


// PHP has the following functions to check if the type of a variable is integer:

//     is_int()
//     is_integer() - alias of is_int()
//     is_long() - alias of is_int()



// $x = 5;
// var_dump(is_long($x));

// echo "<br>";

// $y = 5.10; // double/float
// var_dump(is_long($y));


// PHP has the following functions to check if the type of a variable is float:

//     is_float()
//     is_double() - alias of is_float()

// $x = 10.365;
// var_dump(is_float($x));
// var_dump(is_double($x));


// A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

// PHP has the following functions to check if a numeric value is finite or infinite:

// is_finite()
// is_infinite()

// $x = 1.9e411;
// var_dump(is_finite($x));
// var_dump(is_infinite($x));


// NaN stands for Not a Number.

// NaN is used for impossible mathematical operations.

// PHP has the following functions to check if a value is not a number:

// is_nan()

// $x = acos(8);
// var_dump(is_nan($x));





// The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.



// $x = 5985;
// echo "A : " .var_dump(is_numeric($x)); // true

// echo "<br>";

// $x = "5985";
// echo "B : " .var_dump(is_numeric($x)); // true

// echo "<br>";

// $x = "59.85" + 100;
// echo "C : " .var_dump(is_numeric($x)); // true

// echo "<br>";

// $x = "Hello";
// echo "D : " .var_dump(is_numeric($x)); // false



// PHP Casting Strings and Floats to Integers
// Sometimes you need to cast a numerical value into another data type.

// The (int), (integer), or intval() function are often used to convert a value to an integer.

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465";
$int_cast = (int)$x;
echo $int_cast;








?>