
<?php
if( isset($_POST['save'])){
    
    $principal=$_POST['principal'];
    $roi=$_POST['roi'];
    $time=$_POST['time'];
    $save =$_POST['save'];
}


if(isset($save)){
    if($principal == ''){
        $error1 = '';
}
}

if(isset($save)){
    if($roi == ''){
        $error2 = '';
}
}

if(isset($save)){
    if($time == ''){
        $error3 = '';
}
}

if(isset($save)){
    if(isset($error1 ) ){
        $error1;
    }
    else if(isset($error2 ) ){
        $error2;
    }
    else if(isset($error3 ) ){
        $error3;
    }
    else{
        $amount =  ( $principal * $time * $roi  ) / ((100) * (12));
        $total =  $amount  + $principal ;
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
    <style>
        span{
            color:red;

        }
        table{
            width:40vw;
            margin:auto;
            border-collapse:collapse;
            border:3px solid blue;
        }
        table td{
            padding :10px;
            border:1px solid black;
            
        }
    </style>
</head>
<body>
<br>
    <form action="" method="post">
       <table> 
       <tr>
        <td style="text-align:center;font-size:25px" colspan="2">Interest Calculator</td>
       </tr>
        <tr>
            <td>Principle Value:</td>
            <td> <input type="text" name="principal" placeholder="enter in Rupees" >
           <span>
            <?php 
                if(isset($error1)){
                   echo $error1 = "Enter Value PRINCIPLE";
                }
            ?>
            </span></td> 
        </tr>
       <tr>
            <td>Rate Of Interest:</td>
            <td><input type="text" name="roi" placeholder="enter in Percentage">
            <span>
            <?php 
                if(isset($error2)){
                   echo $error2 = "Enter Value ROI";
                }
            ?>
            </span>
            </td> 
            
       </tr>
       <tr>
            <td>Tenure:</td>
            <td><input type="text" name="time" placeholder="enter in Month">
            <span>
            <?php 

                if(isset($error3)){
                   echo $error3 = "Enter Value TENURE";
                }
            ?>
            </span>
            </td> 
       </tr>
           
       <tr><td style="text-align:center" colspan="2"><input type="submit" name="save"></td>
       </tr>
       
    </form>
    </table> 
 <br><br>
<?php
    if (isset($save)){
        
        if(isset($error1)){
            $error1;
        }
        else if(isset($error2)){
            $error2;
        }
        else if(isset($error3)){
            $error3;
        }
        else{
            if(isset($save)){
                ?>
                <table style="width:30vw">
                <tr>
                    <td style="text-align:center;" colspan="2">Your Interest Summery</td>
                </tr>
                <tr>
                    <td>Your  Amount :</td>
                    <td><?php echo $principal; ?></td>
                </tr>
                <tr>
                    <td>Your Rate Of Interest</td>
                    <td><?php echo $roi; ?></td>
                </tr>
                <tr>
                    <td>Tenuree</td>
                    <td><?php echo $time; ?></td>
                </tr>


                    <tr>
                        <td>interest :</td>
                        <td> <?php echo $amount; ?> </td>
                    </tr>
    
                    <tr>
                    <td>total :</td>
                    <td><?php echo $total; ?></td>
                    </tr>
                </table> 
                <?php
            }
        }
    }
?>


</body>
</html>