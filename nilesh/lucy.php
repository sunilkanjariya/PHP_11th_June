<?php
if (isset($_POST['save'])) {
   $principal = $_POST['principal'];
   $roi = $_POST['roi'];
   $time = $_POST['time'];
   $save = $_POST['save'];

}

if (isset($save)) {
    if ($principal == '') {
        $error1 = '';
    }
}
if (isset($save)) {
    if ($roi == '') {
        $error2 = '';
    }
}
if (isset($save)) {
    if ($time == '') {
        $error3 = '';
    }
}


 if (isset($save)) {
    if (isset($error1)) {
        $error1;
     }
else if (isset($error2)) {
        $error2;
     }

     else  if (isset($error3)) {
        $error3;
     }
     else{
        $iamount =  ( $principal * $time * $roi  ) / ((100) * (12));
        $totalamount =  $iamount  + $principal ; 
     }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interest Calculator</title>
</head>
<style>
    table{
        border: 1px solid green;
        border-collapse: collapse;
        margin: auto;
        width: 50%;
    }
    table td{
        padding: 10px;
        margin: 10px;
    }
</style>
<body>
    <br><br>
<form method="POST">
    <table border="1">
<tr><td colspan="2" style="text-align: center; color: darkblue;"><h1>Interest Calculator</h1></td></tr>
<tr>
    <td>
        Principal:
    </td>
    <td><input type="text" name="principal" placeholder="Enter in rupees">
<span style="color: red;"><?php if (isset($error1)) {
   echo $error1 = 'enter value of principal';
}?></span></td>
</tr>
<tr>
    <td>
        ROI:
    </td>
    <td><input type="text" name="roi" placeholder="enter in percentage out of 100">
    <span style="color: red;"><?php if (isset($error2)) {
             echo $error2 = 'enter value of roi';
    }?></span></td>
</tr>
<tr>
   <td>time:</td>
<td><input type="text" placeholder="Enter in month" name="time">
<span style="color: red;"><?php if (isset($error3)) {
    echo $error3 = 'enter value in month or year';
    }?></span></td></tr>
<tr>
    <td colspan="2" style="text-align: center; color:green"><input type="Submit" name="save"></td>
</tr>
</table>
</form><br><br><br><br><br>
<?php
if (isset($save)) {
  if (isset($error1)) {
      $error1;
      }
    else if(isset($error2)){
      $error2;
    }
    else if(isset($error3)){
        $error3;
    }
    else {
        if (isset($save)) {
            ?>
    <table border="1">

    <tr><td><h2 style="color: blue;">Total Payable Interest</h2></td>
        <td><?php echo $iamount; ?></td></tr>
    <tr>
        <td><h2 style="color: orange;">Final Amount</h2></td>
       <td><?php echo $totalamount; ?></td></tr>
</table>
<?php
}
        }

    }

?>

</body>
</html>