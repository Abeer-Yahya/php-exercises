<?php
#Q1 Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. 

/*for($i=1; $i<=10; $i++)
{
 if($i< 10)
 {
 echo "$i-";
 }
 else
  {
 echo "$i"."\n";
  }
}*/

#Q2 Create a script using a for loop to add all the integers between 0 and 30 and display the total. 
/*$sum = 0;
for($y=1; $y<=30; $y++)
{
$sum +=$y;
}
echo "The sum is $sum"."\n";*/

#Q3 Create a script to generate the following pattern, using the nested for loop.  
/*
A A A A A 
A A A B B 
A A C C C 
A D D D D 
E E E E E
*/

/*for ($i=0; $i < 5 ; $i++) { 
  $character = 65 + $i;
  for ($j=4; $j >= 0 ; $j--) { 
    if ($j > $i) {
      echo chr("65") . " " ;
    } else {
      echo chr("$character") . " "  ;
    }    
  }
  echo "<br>";
}
echo "<br>";*/

#Q4 Create a script to generate the following pattern, using the nested for loop. 
 
/* 
1 1 1 1 1 
1 1 1 2 2 
1 1 3 3 3 
1 4 4 4 4 
5 5 5 5 5
*/

/*for ($i=0; $i < 5 ; $i++) { 
  $character = 49 + $i;
  for ($j=4; $j >= 0 ; $j--) { 
    if ($j > $i) {
      echo chr("49") . " " ;
    } else {
      echo chr("$character") . " "  ;
    }    
  }
  echo "<br>";
}
echo "<br>";*/

#Q5 Create a script to generate the following pattern, using the nested for loop. 
 /* 
1 0 0 0 0 
0 2 0 0 0 
0 0 3 0 0 
0 0 0 4 0 
0 0 0 0 5
*/
/*for ($i=0; $i < 5 ; $i++) { 
  $character = 49 + $i;
  for ($j=0; $j < 5 ; $j++) { 
    if ($j == $i) {
      echo chr("$character") . " "  ;
    } else {
      echo chr("48") . " " ;
    }    
  }
  echo "<br>";
}
echo "<br>";*/

#Q6 Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.
/*function factorial($x)
{
  $total =1;
  for ($i=1; $i <= $x ; $i++) { 
    $total *= $i; 
  }
  echo "$total <br>";
}
factorial(5);*/

#Q7 Write a program to calculate and print the Fibonacci sequence using a for loop.
//Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.

/*function fibonacci ($var)
{
  $fibonacci =[0,1];
  echo $sequencePrint = "0 - 1 -";
  for ($i=2; $i < $var; $i++) { 
    $newValue = $fibonacci[$i-1] + $fibonacci[$i-2];
    if ($i < $var-1) {
      echo $newValue . " - " ;
    } else {
      echo $newValue  ;
    }
    array_push($fibonacci , $newValue );
  }
  echo "<br>";
}
fibonacci(10);*/
 
#Q8 Write a program which will count the "c" characters in the text "Orange Coding Academy". 

/*function countChar( $string )
  {
    $countChar = 0;
    for ($i=0; $i < strlen($string) ; $i++) { 
      if ($string[$i] == "c" || $string[$i] == "C") {
        $countChar++;
      } 
    }
    echo " $countChar <br>";
  }
  countChar("Orange Coding Academy");*/

#Q9 Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag. 
/*echo '<table style="border-collapse:collapse; width: 100%;">';
  for ($i=1; $i <= 6 ; $i++) { 
    echo '<tr>';
    for ($j=1; $j <= 5 ; $j++) { 
        echo "<td style=\"padding:8px;\">";
        echo "<td style=\"border: 1px solid black;\">";

        echo "$i * $j =" . ($i * $j) ;
        echo "</td>";
      }
    echo '</tr>';
  }
  echo '</table>';*/

#Q10 Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".

/*for ($i=1; $i <= 50; $i++) { 
  if (($i % 3 ==0) && ($i % 5 ==0)) {
    echo  " FizzBuzz ";
  } else if ($i % 5 ==0) {
    echo  " Buzz ";
  }else if ($i % 3 ==0) {
    echo  " Fizz ";
  } else {
    echo  $i;
  }
}
echo "<br>";*/

#Q11 Write a PHP program to generate and display the first n lines of a Floyd triangle
 
/*According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive numbers, starting with a 1 in the top left corner:
 
Sample output:
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15*/

/*$count = 1;
  for ($i=1; $i <= 5 ; $i++) { 
    for ($j=0; $j < $i ; $j++) { 
      echo $count++ . " ";
    }
  echo "<br>";
  }*/

#Q12 Write a PHP program to print the following pattern. 
   /*
A 
A B 
A B C 
A B C D 
A B C D E 
A B C D 
A B C 
A B 
A
*/




?>