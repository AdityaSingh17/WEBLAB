<!--
    Write a PHP program named states.py that declares a variable states with value "Mississippi Alabama Texas Massachusetts Kansas". Write a PHP program that does the following:
      a. Search for a word in variable states that ends in xas. Store this word in element 0 of a list named statesList.
      b. Search for a word in states that begins with k and ends in s. Perform a case-insensitive comparison. [Note: Passing re.Ias a second parameter to method compile performs a case-insensitive comparison.] Store this word in element1 of statesList.
      c. Search for a word in states that begins with M and ends in s. Store this word in element 2 of the list.
      d. Search for a word in states that ends in a. Store this word in element 3 of the list.
-->

<?php
$states = "Mississippi Alabama Texas Massachusetts
Kansas";
$statesArray = [];
$states1 = explode(' ', $states);
echo "Original Array :<br>";
foreach ($states1 as $i => $value) print ("STATES[$i]=$value<br>");
foreach ($states1 as $state)
{
    if (preg_match('/xas$/', ($state))) $statesArray[0] = ($state);
}
foreach ($states1 as $state)
{
    if (preg_match('/^k.*s$/i', ($state))) $statesArray[1] = ($state);
}
foreach ($states1 as $state)
{
    if (preg_match('/^M.*s$/', ($state))) $statesArray[2] = ($state);
}
foreach ($states1 as $state)
{
    if (preg_match('/a$/', ($state))) $statesArray[3] = ($state);
}
echo "<br><br>Resultant Array :<br>";
foreach ($statesArray as $array => $value) print ("STATES[$array]=$value<br>");
?>
