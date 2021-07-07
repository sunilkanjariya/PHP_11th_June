<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greater Than Less Than</title>
    <style>
        table{
            margin:auto;
            width:40vw;
            border:1px solid blue;
            
        }
        table td{
            padding:10px;
            text-align:left;
            border:1px solid black;
        }
        h1{
            text-align:center;
        }
    </style>

</head>
<body>
   
   <form action="" method="post">
    <table>
        <tr>
            <th style="text-align:center;"colspan="2">Number Tracker</th>
        </tr>

        <tr>
              <td> ENTER FIRST NUMBER :</td>
              <td><input type="text" name="number1" id=""></td>
        </tr>
        <tr>
                <td>ENTER SECOND NUMBER :</td>
                <td><input type="text" name="number2" id=""></td>
        </tr>
        <tr><td style="text-align:center;" colspan="2"><input type="submit" name="submit" id=""></td></tr>
    </table>
   </form>

<?php

        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
?>
<?php
    if(isset($_POST['submit'])){
        if($num1 > $num2){
            ?>  
            <h1 style="color:blue"> <?php  echo "First Nember $num1 is greater than Second Number $num2" ;  ?> </h1>
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
    if($num1 ==0){
        ?>
             <h1 style="color:green">  <?php echo "First Number  $num1 is zero"; ?></h1>
    <?php
    }
    else {
        if($num1 %2==0){
            ?>
             <h1 style="color:green">  <?php echo "First Number  $num1 is Even"; ?></h1>
             <?php
         }
         else if($num1 %2 !=0){
             ?>
             <h1 style="color:green"> <?php echo "First Number  $num1 is odd"; ?></h1>
             <?php
         }
    }
?>


<?php
    if($num2 ==0){
        ?>
             <h1 style="color:red">  <?php echo "Second Number $num2 is zero"; ?></h1>
    <?php
    }
    else {
        if($num2 %2==0){
            ?>
             <h1 style="color:red">  <?php echo "Second Number $num2 is Even"; ?></h1>
             <?php
         }
         else if($num2 %2 !=0){
             ?>
             <h1 style="color:red"> <?php echo "Second Number $num2 is odd"; ?></h1>
             <?php
         }
    }
?>





</body>
</html>