<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $maths = $_POST['maths'];
    $gujarati = $_POST['gujarati'];
    $sanskrit = $_POST['sanskrit'];
    $submit = $_POST['submit'];
}
if (isset($submit)) {
    if ($name == '') {
        $error1 = '';
    }
}
if (isset($submit)) {
    if ($physics == '') {
        $error2 = '';
    }
}
if (isset($submit)) {
    if ($chemistry == '') {
        $error3 = '';
    }
}
if (isset($submit)) {
    if ($maths == '') {
        $error4 = '';
    }
}
if (isset($submit)) {
    if ($gujarati == '') {
        $error5 = '';
    }
}
if (isset($submit)) {
    if ($sanskrit == '') {
        $error6 = '';
    }
}
if (isset($submit)) {
    if (isset($error1)) {
        $error1;
    } elseif (isset($error2)) {
        $error2;
    } elseif (isset($error3)) {
        $error3;
    } elseif (isset($error4)) {
        $error4;
    } elseif (isset($error5)) {
        $error5;
    } elseif (isset($error6)) {
        $error6;
    } else {

        if (isset($submit)) {
            $total = ($physics+$chemistry+$maths+$gujarati+$sanskrit);
        $average = ($total) / (5);
        }
              
        if (isset($average)) {
            if ($average >= 90 && $average <= 100) {
                $grade = "<span style='color:green;font-size:22px;'>E</span>";
            } elseif ($average >= 80 && $average <= 90) {
                $grade = "<span style='color:blue;'font-size:22px;'>O</span>";
            } elseif ($average >= 70 && $average <= 80) {
                $grade = "<span style='color:orange;'font-size:22px;'>A</span>";
            } elseif ($average >= 60 && $average <= 70) {
                $grade = "<span style='color:yellow;'font-size:22px;'>B</span>";
            } elseif ($average >= 50 && $average <= 60) {
                $grade = "<span style='color:purple;'font-size:22px;'>C</span>";
            } elseif ($average >= 40 && $average <= 50) {
                $grade = "<span style='color:pink;'font-size:22px;'>D</span>";
            }
            elseif ($average < 40) {
                $grade = "<span style='color:red;'>Fail Back To Home</span>";
            } 
            else {
                $grade = "<span style='color:red;'>invalid input</span>";
            }
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marksheet Calculator</title>
</head>
<br><br><br>
<style>
    table {
        border-collapse: collapse;
        border: 1px solid blue;
        margin: auto;
        width: 50%;
    }

    table td {
        padding: 10px;
    }
</style>

<body>
    <form method="POST">
        <table border="1">
            <tr>
                <td colspan="2">
                    <h1 style="text-align: center; color:crimson">Student Marksheet Calculator</h1>
                </td>
            </tr>
            <tr>
                <th>
                    Name of student
                </th>
                <td><input type="text" placeholder="name of student" name="name">
                    <span style="color: red;"><?php if (isset($error1)) {
                                                    echo $error1 = 'Name cant be blank';
                                                } ?></span>
                </td>
            </tr>
            <tr>
                <th>Physics marks</th>
                <td><input type="text" placeholder="Enter physics marks" name="physics">
                    <span style="color: red;"><?php if (isset($error2)) {
                                                    echo $error2 = 'Marks cant be blank';
                                                } ?></span>
                </td>
            </tr>
            <tr>
                <th>Chemistry marks</th>
                <td><input type="text" placeholder="Enter chemistry marks" name="chemistry">
                    <span style="color: red;"><?php if (isset($error3)) {
                                                    echo $error3 = 'Marks cant be blank';
                                                } ?></span>
                </td>
            </tr>
            <tr>
                <th>Maths marks</th>
                <td><input type="text" placeholder="Enter maths marks" name="maths">
                    <span style="color: red;"><?php if (isset($error4)) {
                                                    echo $error4 = 'Marks cant be blank';
                                                } ?></span>
                </td>
            </tr>
            <tr>
                <th>Gujarati marks</th>
                <td><input type="text" placeholder="Enter gujarati marks" name="gujarati">
                    <span style="color: red;"><?php if (isset($error5)) {
                                                    echo $error5 = 'Marks cant be blank';
                                                } ?></span>
                </td>
            </tr>
            <tr>
                <th>Sanskrit marks</th>
                <td><input type="text" placeholder="Enter sanskrit marks" name="sanskrit">
                    <span style="color: red;"><?php if (isset($error6)) {
                                                    echo $error6 = 'Marks cant be blank';
                                                } ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; margin:auto"><input type="Submit" name="submit"></td>
            </tr>

        </table>
    </form>

    <br><br><br><br><br>
    <?php
    if (isset($submit)) {
        if (isset($error1)) {
            $error1;
        } elseif (isset($error2)) {
            $error2;
        } elseif (isset($error3)) {
            $error3;
        } elseif (isset($error4)) {
            $error4;
        } elseif (isset($error5)) {
            $error5;
        } elseif (isset($error6)) {
            $error6;
        } else {
            if (isset($submit)) {
    ?>

                <table border="1" style="border:1px solid green; text-align:center;">
                    <tr>
                        <td>Total Marks Of Student</td>
                        <td><?php echo $total; ?></td>
                    </tr>
                    <tr>
                        <td>Percentage</td>
                        <td><?php echo $average; ?></td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td><?php echo $grade; ?></td>
                    </tr>


                </table>

    <?php
            }
        }
    }
    ?>

</body>

</html>