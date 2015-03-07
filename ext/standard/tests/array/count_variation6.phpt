--TEST--
Test count() function : usage variations - checking for infinite recursion in COUNT_RECURSIVE mode 
--FILE--
<?php
/* Prototype  : int count($mixed var[, int $mode])
 * Description: Counts an elements in an array. If Standard PHP library is installed,
 * it will return the properties of an object.
 * Source code: ext/standard/basic_functions.c
 */

echo "*** Testing count() : usage variations ***\n";

echo "-- Testing count() for infinite recursion with arrays as argument in COUNT_RECURSIVE mode --\n";

$array2 = array ( "Hi", "Hello",@$a);
$array3 = array( 'hi', 'hello');
$a = array ( 1, @$array1, $array2, $array3);
$array1 = array( array(1, 2), $a);
$array4 = array( 100, @$array4);

var_dump( count($array1, COUNT_RECURSIVE) );
echo "\n";
var_dump( count($array4, COUNT_RECURSIVE) );

echo "Done";
?>
--EXPECTF--
*** Testing count() : usage variations ***
-- Testing count() for infinite recursion with arrays as argument in COUNT_RECURSIVE mode --
int(13)

int(2)
Done
