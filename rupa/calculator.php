<?php
  if(isset($_POST['Submit'])){

  	$Number1 = $_POST['Number1'];
  	$Number2 = $_POST['Number2'];
  	$operator= $_POST['subb'];

  	if ($Number1!='') {
  		
  		if(!is_numeric($Number1)){

  			$error = "<span style='color:red;'>It must be in number</span>";

  		}else{
  			$valid1 = true;

  		}
  	}else{
  		$error ="<span style='color:red;'>It cannot be blank</span>";
  	}


    if ($Number2!='') {
  		
  		if(!is_numeric($Number2)){

  			$error1 = "<span style='color:red;'>It must be in number</span>";

  		}else{
  			$valid2 = true;

  		}
  	}else{
  		$error1 ="<span style='color:red;'>It cannotbe blank</span>";
  	}



  	
    }

  

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post" >

		<label>Enter Number 1:</label>
		<input type="text" name="Number1">
		<?php 
		if (isset($error)) {
			echo $error;
		}

		?>
		<br><br>
		<label>Enter Number 2:</label>
		<input type="text" name="Number2">
		<?php 
		if (isset($error1)) {
			echo $error1;
		}

		?>
		<br><br>
		<?php
		  if (($valid1 && $valid2)==true) {
		  
		  	switch ($operator) {
        case "Addition":
           $Result = $Number1 + $Number2;
            break;
        case "Subtract":
           $Result = $Number1 - $Number2;
            break;
        case "Multiply":
            $Result = $Number1 * $Number2;
            break;
        case "Divide":
            $Result = $Number1 / $Number2;

    }
}
    ?>
		<label>Result</label>
		<input type="text" name="Result">
		<?php 
		if(isset($Result)){
			echo $Result;
		}
		?>
		
		<label>Select Operator</label>
		<select name="subb">
			<option value="">operator</option>
			<option value="Addition">+</option>
			<option value="Subract">-</option>
			<option value="Multiply">*</option>
			<option value="Divide">/</option>
		</select>
		<input type="submit" name="Submit" style="margin-left: 30px;">
		
		
    </form>
</body>
</html>