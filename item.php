
<html>  
<head>  
<title> Program using loop in PHP</title> 
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
#submit {
  background-color: gray; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-left:5px;
}

#text1, #text2
{
	width:250px;
	padding-top:10px;
	padding-bottom:10px;
} 
.items
{
	text-align:center;
	width:350px;
	padding-top:10px;
	padding-bottom:10px;
	background-color: black; /* Green */
  border: none;
  color: white;
}
</style>
</head>  
<body> 
 
<form method="post" action='#'>  
   <h3 class='items'>Item Store</h3>  
 Enter the Names:  <input type="text" name="name" id="text1">  <br><br>
 Enter the Price:  <input type="text" name="price" id="text2">  <br><br>
    <input type="submit" name="submit" value="calculate" id='submit' />  
	 <input type="reset" name="reset" value="reset" id='submit' />  
</form> 

<?php 
if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	//echo $name;
	$name1 = explode(",",$name);
	$price = $_POST['price'];
	$price1 = explode(",",$price);
	$max=max($price1);
	$min=min($price1);
	//echo $max;
	//echo $min;
	?>
	<table id='customers'>
	<th>Item name</th>
	<th>Item cost</th>
	<?php
for($x = 0; $x < count($name1); $x++ )
    {
		?>
		
		<tr>
		<td>
		<?php
        echo $name1[$x];
		?></td>
		<td>
		<?php
        echo $price1[$x];
		?>
		</td>
		</tr>
	</table><br>
	<?php
	foreach($name1  as $key => $content){
		$contentb = $price1[$key];
		if($contentb == $max)
		{
			
			echo "The Costiest Item Is:".$content;
			echo "<br>";
		}
		if($contentb == $min)
		{
			echo "The Cheapest Item Is:".$content;
			echo "<br>";
		}
  
}
	$sum=array_sum($price1);
	echo "The total bill of all the items is:".$sum;
}
	?>
</body>
</html>



