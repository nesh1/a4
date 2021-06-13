<html>  
<head>  
<title></title>
<style>

#submit {
  background-color:Green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  font-size: 16px;
}
select{
	width:200px;
	padding-top:10px;
	padding-bottom:10px;
}
#text
{
	width:250px;
	padding-top:10px;
	padding-bottom:10px;
}

</style>  
</head>  
<body> 
 
<br><br>
<form method="post" action='#'>  
    Enter string: 
    <input type="text" name="text" id="text">  <br><br>
	<select name="operation">
	<option value='select'>select operation</option>
  <option value="reverse">Reversing the string</option>
  <option value="length">Finding length of a string</option>
 
  <option value="upper">Uppercase</option>
  <option value="lower">Lowercase</option>
  <option value="count">count words</option>
</select><br><br>
    <input type="submit" name="submit" value="Submit" id='submit' />  
</form>
  
<?php
if(isset($_POST['operation']))
{
	$array1=$_POST['text'];
	//echo $array1;
	switch($_POST['operation'])
	{
	case 'reverse':
		$array=strrev($array1);
		echo "The reverse of the give given string is:"; 
		echo $array;
		break;
	case 'count':	
		$array= str_word_count($array1);
		echo "The count of words in a given string is:";
		echo $array;
		break;
	case 'length':
	
		$array=  strlen($array1);
		echo "The length of the string is:";
		echo $array;
		break;
	case 'upper':	
		$array= strtoupper($array1);
		echo "The upper case letter conversion of a give string is:";
		echo $array;
		break;
	case 'lower':	
		$array= strtolower($array1);
		echo "The lower case letter conversion of a give string is:";
		echo $array;
		break;
	
		
		
	}
}

?>


</body>
</html>
