<html>
<body>
<?php
echo "THE NUMBER IS :";
$n=rand(1,1000);
echo $n;
echo"<br>";
    {
function reverse($n)
{
    $reverse = 0;
    $n;
    while ($n > 0)
      {
        $reverse = $reverse * 10;
        $reverse = $reverse + $n % 10;
        $n = (int)($n/10);
      }
     return $reverse;
}
echo"THE REVERSED NUMBER IS :";
print_r(reverse($n)."\n");
    }
echo"<br>";
    {
function Palindrome($number){ 
    $temp = $number; 
    $new = 0; 
    while (floor($temp)) { 
        $d = $temp % 10; 
        $new = $new * 10 + $d; 
        $temp = $temp/10; 
    } 
    if ($new == $number){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
$original = $n;
if (Palindrome($original)){ 
    echo "THE NUMBER IS PALINDROME"; 
}
else { 
echo "THE GIVEN NUMBER IS NOT PALINDROME"; 
}
    }
echo"<br>";
    {
function sum($n)
    {
    $sum = 0;
    for ($i = 0; $i < strlen($n); $i++)
    {
        $sum += $n[$i];
    }
    return $sum;
    }
    $num = "$n";
echo "THE SUM OF DIGITS IS : ";
echo sum($num);
    }
?>
    </body>
</html>
