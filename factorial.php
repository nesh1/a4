<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
<style>
#number
{
	width:250px;
	padding-top:10px;
	padding-bottom:10px;
}
#submit {
  background-color: green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  font-size: 16px;
}
</style>
</head>  
<body>  
<form method="post" action='#'>  
<h1>   Factorial of a given number </h1>
    <input type="number" name="number" id="number" placeholder='Enter number'>  
    <input type="submit" name="submit" id='submit' value="Submit" />  
</form>  
<?php   
    
function fact ($a)  
{  
    if($a <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $a * fact($a - 1);  
    }  
}  
	if(isset($_POST['number']) && $_POST['number']>1 ){  
	$n=$_POST['number'];
 
echo "Factorial  is " .fact($n);
	} 
else{
 echo '';
} 
?>  
   
</body>  
</html>  