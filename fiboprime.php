<html>  
<head>  
<title>Fibonacci Program using loop in PHP</title> 
<style>
#number
{
	width:250px;
	padding-top:10px;
	padding-bottom:10px;
}
#submit {
  background-color:Green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  font-size: 16px;
} 
</style>
</head>  
<body>  
<form method="post" action='#'>  
   <h1> Enter the Number: </h1> 
    <input type="number" name="number" id="number" placeholder='number'>  
    <input type="submit" name="submit" id='submit' value="Submit" />  
</form>  


<?php

function isSquare($n)
{
    $sr = (int)sqrt($n);
    return ($sr * $sr == $n);
}
 function Fibonacci($number){
      
  
    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
      
    
    else
        return (Fibonacci($number-1) + 
                Fibonacci($number-2));
}
  



function fibo($n)
{
   
    $prime = array_fill(0, $n + 1, true);
    for ($p = 2; $p * $p <= $n; $p++)
    {
 
      
        if ($prime[$p] == true)
        {
 
            
            for ($i = $p * 2;
                 $i <= $n; $i += $p)
                $prime[$i] = false;
        }
    }
 
   echo "The prime numbers are:";
    for ($i = 2; $i <= $n; $i++)
    if ($prime[$i] && (isSquare(5 * $i * $i + 4) > 0 ||
                       isSquare(5 * $i * $i - 4) > 0))
        echo  $i . " ";
		echo "</br>";
}
 

if(isset($_POST['number'])){  
	$n=$_POST['number'];
	Fibonacci($n);
fibo($n);


}
echo "</br>";
echo "The fibonacci series is:";
if(!empty($n))

for ($counter = 0; $counter < $n; $counter++){  

    echo  Fibonacci($counter),' ';
	
}

	

 ?>
 </body>
 </html>