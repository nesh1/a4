<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) 
{
    $units = $_POST['units'];
    if (!empty($units))
    {
        $result = calculate_bill($units);
        $final = 'Total electricity bill of ' . $units . 'units is' . $result;
    }
}
function calculate_bill($units)
{
    $first = 3;
    $second = 4;
    $third = 5;
    $fourth = 6;

    if($units < 100)
    {
        $bill = $units * $first;
    }
    else if($units >=100 && $units < 200) 
    {
        $bill = $units * $second;
        
    }
    else if($units > 100 && $units <= 200)
    {
        $bill = $units * $third;
    }
    else {
        $bill = $units * $fourth;
    }
    return $bill;
}

?>
<html>
<body>
		<form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units"/>
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $final; ?>
		</div>
</body>
</html>