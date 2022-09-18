<?php
#Q1 Write a script to generate the following paragraph:"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon". The words 'red', 'green' and 'white' should come from $colors array.

/*$colors = array('red', 'green', 'white');
echo ("The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$colors[0]. " carpet, the ".$colors[1]." lawn, the ".$colors[2]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon");*/

#Q2 Write a PHP script that will display the colors as unordered list :

/*$color = array('green', 'red', 'white');
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";*/

#Q3 $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); .Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 

/*$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
asort($cities);
foreach ($cities as $country => $capital)
{
  echo nl2br("The capital of $country is $capital.") ;
}*/

#Q4 $color = array (4 => 'white', 6 => 'green', 11=> 'red'); Write a PHP script to display the first element of the above array. 

/*$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo ("$color[4]");*/

#Q5 Write a PHP script that inserts a specific new item in an array in any position.
/*$arr = array( '1','2','3','4','5' );
$new = '$';
array_splice( $arr, 3, 0, $new ); 
foreach ($arr as $x) 
{
  echo "$x ";
}
echo "\n";*/

#Q6 Write a PHP script to sort the following associative array depending on the key value [asc] : 

/*$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
print_r($fruits);*/

#Q7 Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 

/*$reads = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $reads);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}*/

#Q8 Write a PHP program to merge the following two arrays. 

/*$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
print_r(array_merge($array1,$array2));*/

#Q9 Write a PHP function to change the following array's and convert all the strings to upper case.

/*function upper($arr){
  $arr= array_flip($arr);
  $arr = array_change_key_case($arr, CASE_UPPER);
  $arr = array_flip($arr);
  print_r($arr);
}

$arr = array("red","blue", "white","yellow");
upper($arr);*/

#Q10 Write a PHP function to change the following array's and convert all the strings to lower case. 
 /*function upper($arr){
  $arr= array_flip($arr);
  $arr = array_change_key_case($arr, CASE_LOWER);
  $arr = array_flip($arr);
  print_r($arr);
}

$arr = array("RED","BLUE", "WHITE","YELLOW");
upper($arr);*/

#Q11 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

/*echo implode(",",range(200,250,4))."\n";*/

/*$number = range(200,250);
function divisibleBy4($number){
foreach($number as $x){
  if ($x%4 == 0){
    print " $x ";
  };
};
}
divisibleBy4($number);*/

#Q12 Write a PHP script to get the shortest/longest string length from an array. 
/*$words =  array("abcd","abc","de","hjjj","g","wer");
$lengths = array_map('strlen', $words);

echo "The shortest is " . min($lengths) ."  ".
     ". The longest is " . max($lengths);*/

#Q13 Write a PHP script to generate unique random 10 numbers within a specific range.
/*$numbers=range(11,20);
shuffle($numbers);
for ($x=0; $x< 10; $x++)
{
echo $numbers[$x].' ';
}
echo "\n"*/

#Q14 Write a PHP script that returns the lowest integer in the array  that is not 0. 







?>