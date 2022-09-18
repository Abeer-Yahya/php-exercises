<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logical Statements and Operators</title>
</head>
<body>
<?php
#Q1 Write a PHP script to see if the specified year is a leap year or not.
   /*
   function year_check($my_year){
      if ($my_year % 400 == 0)
         print("It is a leap year");
      else if ($my_year % 100 == 0)
         print("It is not a leap year");
      else if ($my_year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
   }
   $my_year = 2013;
   year_check($my_year);
*/

#Q2 Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
/*function temp_check($temp){
  If ($temp <=20)
  print (“It is wintertime!”);
  else
  print (“It is summertime!”)
  }
  $temp = 27;
  temp_check($temp);*/

#Q3 Write a PHP script to calculate the sum of the two integers. If the two values ​​are the same, then calculate the triple of their sum.
/*function output ($firstInteger, $secondInteger){
  If ($firstInteger == $secondInteger)
  Print ( $firstInteger*=6);
  else
  print ( $firstInteger += $secondInteger);
  }
  $firstInteger = 2;
  $secondInteger =2;
  output($firstInteger,$secondInteger);*/

#Q4 Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false

/*
function sum($num1,$num2) {
  $x=$num1+$num2;
If ($x==30)
print ($num1+=$num2);
else
print ("false");
}
$num1 = 10;
$num2 = 10;
sum($num1,$num2);
 */

#Q5 Write in PHP script to check if the given positive number is a multiple of 3.
/*function check_num($num){
  if ($num%3 !==0)
  print (“false”);
  else
  print (“true”);
  }
  $num = 20;
  check_num($num);*/
  
#Q6 Write a PHP script to check if the integer value ​​is in the range of [20-50] inclusive.
/*
function check_range($int){
If ($int >=20 && $int<=50)
print (“true”);
else
print (“false”);
}
$int = 50;
check_range($int);
 */

#Q7 Write PHP script to find the largest number between the three integers
/*
function largest($num1, $num2, $num3) {
  $max = $num1;

  if ($num1 >= $num2 && $num1 >= $num3)
    $max = $num1;
  if ($num2 >= $num1 && $num2 >= $num3)
    $max = $num2;
  if ($num3 >= $num1 && $num3 >= $num2)
    $max = $num3;
  echo " $max";
}
largest(1, 5, 9);
*/

#Q8 Write PHP script to calculate the monthly electricity bill according to these rules: 1.For first 50 units – 2.50 JOD/Unit.2.For next 100 units – 5.00 JOD/Unit.3.For next 100 units – 6.20 JOD/Unit.4.For units above 250 – 7.50 JOD/Unit.
/*
function bill($p) {
$total =0;
  if ($p <= “50”)
    $total = $p*2.5;
  else if ($p > “50” && $p <= “150”)
    $total = $p*5;
else  if ($p >”150” && $p <= 250)
    $total = $p*6.2;
else 
$total=$p*7.5;
  
  echo " $total";
}
 
bill(200);

*/

#Q9 Write php script to make a calculator, the calculator should contain the four main operations 

#Q10 Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
/*
function check_age($age){
if ($age <18)
print (“not eligible to vote”);
else
print (“eligible to vote”);
}
check_age(15);
*/

#Q11 Write php script  to check whether a number is positive, negative or zero
/*
function checkNumber($z)
 {
 if ($z > 0) 
$message = "Positive number";
else if ($z==0)
$message = "Zero"; 
else
 $message = "Negative number";
 echo $message;
}
checkNumber(0);
 */

#Q12 Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

/*function grade($s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9) {
  $sum= $s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9;
  $av= $sum/9;
  if ($av >=90)
  print “Your grade is A”;
  else if ($av > 80 && $av<90)
  print “Your grade is B”;
  else if ($av>70 && $av<=80)
  print “Your grade is C”;
  else if ($av>60 && $av<=70)
  print “Your grade is D”;
  else
  print “Your grade is F”;
  }
  grade(60,86,95,63,55,74,79,62,50);*/
  



?>

</body>
</html>