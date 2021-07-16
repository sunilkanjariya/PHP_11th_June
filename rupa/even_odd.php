<?php
   
  if (isset($_POST['submit'])) {  
    $number=$_POST['number'];
    if ($number%2==0) {
    	$n1 = " this number is even";
    }else{
    	$n2 = "this number is odd";

    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table tr th,td {
			padding: 10px;
		}

		table  {
			margin: auto;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center; color: blue;">User Details</h1>
	<form method="post" enctype="multipart/form-data">
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<th>Number</th>
				<td>
					<input type="text" name="number">
					<span style="color:red;">
						<?php 
								if (isset($n1)) {
									echo $n1;
								}
						?>
					</span>
					<span style="color:green;">
						<?php 
								if (isset($n2)) {
									echo $n2;
								}
						?>
					</span>
				</td>
			</tr>

			<tr>
				<th colspan="2"><input type="submit" name="submit"></th>
			</tr>
		</table>
	</form>
