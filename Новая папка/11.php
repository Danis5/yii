<?php if (!empty($_POST['data'])){ 
echo 'Forma otpraki'; 
} 


?> 
<html> 
<head> 
<title> zasas </title> 
</head> 
<body> 
<form method = "POST" action = " <?php echo $_SERVER['PHP_SELF']; ?>" > 
<input type = "text" name ="data" placeholder = "Vvod"/> 
<button type ="submit"> Nazmi</button> 

</form> 



</body> 
</html> 