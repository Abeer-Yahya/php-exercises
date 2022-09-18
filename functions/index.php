<?php
#Q1 Write a PHP script to check if the inserted number is a prime number 

/*function checkPrime(int $num)
  {
    if (($num % 2 != 0) and ($num % 3 != 0)) {
      echo "$num is a prime number <br>";
    }
  }
  for ($i=0; $i < 10 ; $i++) { 
    checkPrime($i);
  }*/
#Q2 Write a PHP function to swap to variables?

/*function swap ($var1 , $var2)
  {
    $firstValue = $var1;
    $secondValue = $var2;
    $swap =$firstValue;
    $firstValue = $secondValue;
    $secondValue = $swap;
    echo " $firstValue -  $secondValue <br>";
  }
  swap(10,12);*/

#Q3 Write a PHP function to check if a number is an Armstrong number or not ?
//Armstrong number is a number that is equal to the sum of cubes of its digits.

/*function isArmstrong($MyNum)
{
  $y = $MyNum;
  $sum = 0;
  $Order = 0;

  while($y > 0){
    $Order++;
    $y = (int)($y / 10);
  }

  $y = $MyNum;
  while ($y > 0){
    $x = $y % 10;
    $sum = $sum + Pow($x, $Order);
    $y = (int)($y/10);
  }
  
  if ($MyNum == $sum){
    echo $MyNum." is a Armstrong Number.<br>";
  } else {
    echo $MyNum." is not a Armstrong Number.<br>";
  }
}
isArmstrong(371);*/


#Q4 Write a PHP function that checks whether a passed string is a palindrome or not?

/*function str_check(string $var1){
  str_split($var1);
  $varSplit = str_split($var1);
  $condition = 0;
  foreach ($varSplit as $value){
    if (strtoupper($value) ===  $value) {
    $condition++;
    }
  }
  if ( $condition != 0 ) {
    echo "Your String is not Ok";
  } else {
    echo "Your String is Ok";
  }
}
str_check($var);
echo "<br>";*/


#Q5 Write a PHP function to remove duplicates from an array ?

/*function  removeDuplicates( $array )
{
  $withoutDuplicates =[];
  foreach ($array as $value) {
    if (!in_array($value, $withoutDuplicates)) {
      array_push($withoutDuplicates , $value );
    }
  }
  echo "<pre>";
  print_r($withoutDuplicates);
  echo "</pre>";
}
$array1 = array(2, 4, 7, 4, 8, 4);
removeDuplicates($array1);*/


?>