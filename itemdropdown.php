<!DOCTYPE html>
<html>
<head>
	<title>Programs</title>
	
	<style>
#customers {
  font-family: Arial;
  width: 100%;
}

#customers td, #customers th 
{
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
#submit {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
}
select
{
	width:200px;
}
</style>
	</head>
	<body><h1>Please select your item:</h1>
	<form method='post' action='#'>
	<select name="stationery">
	<option value='select an item;'>select</option>
  <option value="pencil">Pencils</option>
  <option value="colors">Colors</option>
  <option value="books">Books</option>
  <option value="A4 sheets">A4 sheets</option>
</select>
<input type="submit" name="submit" id='submit' value="Get Selected Values" /><br><br>
</form>

<?php 

if(isset($_POST['stationery']) && $_POST['stationery']  === 'pencil' ){
   ?>
		<table border='1' id='customers'>
  <tr>
    <th>Description</th>
    <th>Value</th>
    
  </tr>
  <tr>
    <td>Sno</td>
    <td>1</td>
    
  </tr>
  <tr>
    <td>Name</td>
    <td>pencil</td>
    
  </tr>
  <tr>
    <td>Price</td>
    <td>10</td>
   
  </tr>
  <tr>
    <td>quantity</td>
    <td><input type="number" name="number" id="number"/></td>

  </tr>
 
</table><br><br>
<form method='post' action='#'>
<input type="submit" name="submit1" id='submit' value="Bill" />
</form>

<?php
}
       
        
	else if(isset($_POST['stationery']) && $_POST['stationery']  === 'colors' ){
   ?>
		<table border='1' id='customers'>
		
  <tr>
    <th>Description</th>
    <th>Value</th>
    
  </tr>
  <tr>
    <td>Sno</td>
    <td>2</td>
    
  </tr>
  <tr>
    <td>Name</td>
    <td>colors</td>
    
  </tr>
  <tr>
    <td>Price</td>
    <td>150</td>
   
  </tr>
  <tr>
    <td>quantity</td>
    <td><input type="number" name="number" id="number"/></td>

  </tr>
 
</table><br><br>
<form method='post' action='#'>
<input type="submit" name="submit2" id='submit'  value="Bill" />
</form>
<?php
}
	else if(isset($_POST['stationery']) &&  $_POST['stationery'] === 'books' ){
   ?>
		
		<table border='1' id='customers'>
		
  <tr>
    <th>Description</th>
    <th>Value</th>
    
  </tr>
  <tr>
    <td>Sno</td>
    <td>4</td>
    
  </tr>
  <tr>
    <td>Name</td>
    <td>books</td>
    
  </tr>
  <tr>
    <td>Price</td>
    <td>15</td>
   
  </tr>
  <tr>
    <td>quantity</td>
    <td><input type="number" name="number" id="number"/></td>

  </tr>
 
</table><br><br>
<form method='post' action='#'>
<input type="submit" name="submit3" id='submit' value="Bill" />
</form>
<?php 
	}
else if(isset($_POST['stationery']) && $_POST['stationery']  === 'A4 sheets' ){
   ?>
		
		<table border='1' id='customers'>
  <tr>
    <th>Description</th>
    <th>Value</th>
    
  </tr>
  <tr>
    <td>Sno</td>
    <td>3</td>
    
  </tr>
  <tr>
    <td>Name</td>
    <td>A4 sheets</td>
    
  </tr>
  <tr>
    <td>Price</td>
    <td>2</td>
   
  </tr>
  <tr>
    <td>quantity</td>
    <td>1<input type="number" name="number" id="number"/></td>

  </tr>
 
</table><br><br>
<form method='post' action='#'>
<input type="submit" name="submit4" id='submit' value="Bill" />
</form>



<?php
}
if(isset($_POST['submit1']))
{
	?>
	<table border='1' id='customers'>
  <tr>
   <th>Name</th>
    <th>Price </th>
	<th>Discount </th>
	<th>quantity </th>
	<th>Date of Purchase </th>
	<th>Total bill</th>
	
    
  </tr>
  <tr>
    <td>pencils</td>
    <td>10</td>
	<td>2</td>
	<td>1</td>
	<td>12-02-2018</td>
	<td>8</td>
    
  </tr>
  </table><br><br>
  <h1> Thanks for shopping with Us</h1>
  <?php
}
else if(isset($_POST['submit2']))
{
	?>
	<table border='1' id='customers'>
   <tr>
   <th>Name</th>
    <th>Price </th>
	<th>Discount </th>
	<th>quantity </th>
	<th>Date of Purchase </th>
	<th>Total bill</th>
	
    
  </tr>
  <tr>
    <td>colors</td>
    <td>150</td>
	<td>10</td>
	<td></td>
	<td>11-02-2019</td>
	<td>140</td>
    
  </tr>
  </table><br><br><h1> Thanks for shopping with Us</h1>
  <?php
}
else if(isset($_POST['submit3']))
{
	?>
	<table border='1' id='customers'>
  <tr>
   <th>Name</th>
    <th>Price </th>
	<th>Discount </th>
	<th>quantity </th>
	<th>Date of Purchase </th>
	<th>Total bill</th>
	
    
  </tr>
  <tr>
    <td>books</td>
    <td>15</td>
	<td>2</td>
	<td>2</td>
	<td>28-01-2019</td>
	<td>28</td>
    
  </tr>
  </table><br><br><h1> Thanks for shopping with Us</h1>
  <?php
}
else if(isset($_POST['submit4']))
{
	?>
	<table border='1' id='customers'>
  <tr>
   <th>Name</th>
    <th>Price </th>
	<th>Discount </th>
	<th>quantity </th>
	<th>Date of Purchase </th>
	<th>Total bill</th>
	
    
  </tr>
  <tr>
    <td>A4 sheets</td>
    <td>2</td>
	<td>0</td>
	<td>10</td>
	<td>24-05-2020</td>
	<td>20</td>
    
  </tr>
  </table><br><br><h1> Thanks for shopping with Us</h1>
  <?php
}
?>	
	</body>
</html>