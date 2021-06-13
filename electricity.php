<html>  
<head>  
<title> Program using loop in PHP</title> 
<style>
#submit {
  background-color:Green
  color: white;
  padding: 15px 32px;
  text-align: center;
  font-size: 16px;
}

#text1, #text2
{
	width:250px;
	padding-top:10px;
	padding-bottom:10px;
} 
</style>
</head>  
<body> 
<h1> The electricity bill generator</h1> 
<form method="post" action='#'>  
     
  Previous reading:  <input type="text" name="text1" id="text1">  <br><br>
  Current reading:  <input type="text" name="text2" id="text2">  <br><br>
    <input type="submit" name="submit" value="calculate" id='submit' />  
</form> 
<?php
if(isset($_POST['submit']))
{
if(isset($_POST['text1']) && isset($_POST['text2']))
{
	if($_POST['text2'] > $_POST['text1'])
	{
$units=	$_POST['text2']-$_POST['text1'];
$res= calculate_bill($units);
echo "The total amount of units are:";
echo  $res;
	}
}
	
}

function calculate_bill($units) {
    $unit_cost_first = 3;
    $unit_cost_second = 4;
    $unit_cost_third = 5;
    $unit_cost_fourth = 6;

    if($units <= 100) {
        $bill = $units * $unit_cost_first;
    }
    else if($units >100 && $units <=200) {
        $temp = 100 * $unit_cost_first;
        $remaining_units = $units - 100 ;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 200 && $units <= 300) {
        $temp = (100 * 3) + (100 * $unit_cost_second);
        $remaining_units = $units - 200;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (100 * 3) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 300;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return   $bill;
}
?>
 
</body>
</html>