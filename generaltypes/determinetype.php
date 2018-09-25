<?

define('CHECK_CONSTANT', "Yes, I am a constant!");

$intVar = 1234;
$stringVar = "I'm a string";
$boolVar = false;
$floatVar = 12.34;

//echo is_string($stringVar);

//echo is_bool($boolVar);

echo defined('CHECK_CONSTANT');
?>