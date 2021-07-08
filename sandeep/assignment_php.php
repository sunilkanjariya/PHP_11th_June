<?php
$num1 = $_POST['number1'];
$num2=$_POST['number2'];
$submit = $_POST['submit'];
?>

<?php
    if(isset($submit)){
        $num1;
        if( $num1 == ''){
            $error1 =" ";
       }
    }
?>

<?php
    if(isset($submit)){
        $num2;
        if( $num2 == ''){
            $error2 =" ";
       }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd-Even-Table</title>
    <style>
        table{
            border:1px solid blue;
            width:50vw;
            margin:auto;
        }
        table td,th{
            padding:10px;
            border:1px solid black
        }
        h1{
            text-align:center;
        }
        h3{
            text-align:center;
            color:blue;
        }
        span{
            color:red;
            font-size:15px;

        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <th colspan="2">Number Analyzer</th>
            </tr>
            <tr>
                <td>Enter First Number:</td>
                <td><input type="text" name="number1">
                 <span>
                    <?php
                        if(isset($error1)){
                        echo $error1 ="Enter First Number";
                        }
                    ?>
                </span>
                
                </td>
            </tr>
            <tr>
                <td>Enter Second number:</td>
                <td><input type="text" name="number2">
                 <span>
                    <?php
                        if(isset($error2)){
                        echo $error2 ="Enter Second Number";
                        }
                    ?>
                </span>
                
                </td>
            </tr>
            <tr>
                <td style="text-align:center" colspan="2"><input type="submit" name="submit">
                
               
                
                </td>
            </tr>
        </table>
    </form>

<?php
    if(isset($submit)){
        if($num1 > $num2){
            ?>  
            <h1 style="color:blue"> <?php  echo "First Number $num1 is greater than Second Number $num2" ;  ?> </h1>
            <?php
        }
        else if($num1 < $num2){
            ?>
            <h1 style="color:blue"><?php   echo "Second Number $num2 is greater than First Nember $num1"  ; ?>  </h1>
            <?php
        }
        else {
            ?>
            <h1 style="color:blue"><?php   echo "Both Nunbers Are Same"  ; ?>  </h1>
            <?php
        }
    }
?>



    <?php
    if(isset($submit)){

        if($num1 == 0){
            echo "<h1 style=color:blue>". "Your Number Is Zero"."</h1>";
        }
        else{
            if($num1 %2 == 0 ){
                echo "<h1 style=color:green>"."$num1 is even"."</h1>";
            }
            else if($num1 %2 != 0){
                echo "<h1 style=color:red>"."$num1 is odd"."</h1>";
            }
        }
    }
?>


<?php
    if(isset($submit)){

        if($num2 == 0){
            echo "<h1 style=color:blue>"."Your Number Is Zero"."</h1>";
        }
        else{
            if($num2 %2 == 0 ){
                echo "<h1 style=color:green>"."$num2 is even"."</h1>";
            }
            else if($num2 %2 != 0){
                echo "<h1 style=color:red>"."$num2 is odd"."</h1>";
            }
        }
    }
?>

<?php
    if(isset($submit)){
        if($num1 == 0){
            $error;
        }
        else{
        for($i=1;$i<=10;$i++){
            echo "<h3>"."$num1 * $i =".$i*$num1. "</h3>";
        }
    }
    }
?>


<?php
    if(isset($submit)){
        if($num2 == 0){
            $error;
        }
        else{

        
        for($i=1;$i<=10;$i++){
            echo "<h3>"."$num2 * $i =".$i*$num2. "</h3>";
        }
    }
    }
?>




</body>
</html>