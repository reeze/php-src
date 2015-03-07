--TEST--
Test count() function : basic functionality - for non-scalar type(array)
--FILE--
<?php
/* Prototype  : int count(mixed $var[, int $mode] )
 * Description: Counts an elements in an array. If Standard PHP library is 
 *              installed, it will return the properties of an object.
 * Source code: ext/standard/basic_functions.c
 */

/* Testing the count() for non-scalar type(array) value 
 * in default, COUNT_NORMAL and COUNT_RECURSIVE modes.
 * Sizeof() has been tested for simple integer, string,
 * indexed and mixed arrays.
 */ 

echo "*** Testing count() : basic functionality ***\n";

$int_array = array(1, 2, 3, 4);
$string_array = array("Saffron", "White", "Green");
$indexed_array = array("Aggression" => "Saffron", "Peace" => "White", "Growth" => "Green");
$mixed_array = array(1, 2, "Aggression" => "Saffron", 10 => "Ten", "Ten" => 10);

echo "-- Testing count() with integer array in default, COUNT_NORMAL, COUNT_RECURSIVE modes --\n";
echo "default mode: ";
var_dump( count($int_array) );
echo "\n";
echo "COUNT_NORMAL mode: ";
var_dump( count($int_array, COUNT_NORMAL) );
echo "\n";
echo "COUNT_RECURSIVE mode: ";
var_dump( count($int_array, COUNT_RECURSIVE) );
echo "\n";

echo "-- Testing count() with string array in default, COUNT_NORMAL, COUNT_RECURSIVE modes --\n";
echo "default mode: ";
var_dump( count($string_array) );
echo "\n";
echo "COUNT_NORMAL mode: ";
var_dump( count($string_array, COUNT_NORMAL) );
echo "\n";
echo "COUNT_RECURSIVE mode: ";
var_dump( count($string_array, COUNT_RECURSIVE) );
echo "\n";

echo "-- Testing count() with indexed array in default, COUNT_NORMAL, COUNT_RECURSIVE modes --\n";
echo "default mode: ";
var_dump( count($indexed_array) );
echo "\n";
echo "COUNT_NORMAL mode: ";
var_dump( count($indexed_array, COUNT_NORMAL) );
echo "\n";
echo "COUNT_RECURSIVE mode: ";
var_dump( count($indexed_array, COUNT_RECURSIVE) );
echo "\n";

echo "-- Testing count() with mixed array in default, COUNT_NORMAL, COUNT_RECURSIVE modes --\n";
echo "default mode: ";
var_dump( count($mixed_array) );
echo "\n";
echo "COUNT_NORMAL mode: ";
var_dump( count($mixed_array, COUNT_NORMAL) );
echo "\n";
echo "COUNT_RECURSIVE mode: ";
var_dump( count($mixed_array, COUNT_RECURSIVE) );

echo "Done";
?>
--EXPECTF--
*** Testing count() : basic functionality ***
-- Testing count() with integer array in default, COUNT_NORMAL, COUNT_RECURSIVE modes --
default mode: int(4)

COUNT_NORMAL mode: int(4)

COUNT_RECURSIVE mode: int(4)

-- Testing count() with string array in default, COUNT_NORMAL, COUNT_RECURSIVE modes --
default mode: int(3)

COUNT_NORMAL mode: int(3)

COUNT_RECURSIVE mode: int(3)

-- Testing count() with indexed array in default, COUNT_NORMAL, COUNT_RECURSIVE modes --
default mode: int(3)

COUNT_NORMAL mode: int(3)

COUNT_RECURSIVE mode: int(3)

-- Testing count() with mixed array in default, COUNT_NORMAL, COUNT_RECURSIVE modes --
default mode: int(5)

COUNT_NORMAL mode: int(5)

COUNT_RECURSIVE mode: int(5)
Done
