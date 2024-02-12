<?php
$i1=$_POST['num1'];
$i2=$_POST['num2'];
$sel=$_POST['select'];
$ans=0;
if($sel=="add"){
     $ans=$i1+$i2;
}
else if($sel=="sub"){
     $ans=$i1-$i2;
}
else if($sel=="div"){
    $ans=$i1/$i2;
}
else if($sel=="mul"){
     $ans=$i1*$i2;
}
else{
    echo "Please insert Number Properly";
}

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Simple Calculator with PHP</title>
</head>
<body>
<form action="index.php" method="post">
           <center>
            <table>
                <tr>
                    <td>Ans= <span><?php echo $ans   ?></span></td>
                </tr>
                <tr>
                    <td><input type="number" name="num1"></td>
                    <td><input type="number" name="num2"></td>
                </tr>
                <tr>
                    <td>
                        <select name="select" id="">
                            <option value="null">Select</option>
                            <option value="add">Add</option>
                            <option value="sub">Sub</option>
                            <option value="mul">Mul</option>
                            <option value="div">Divide</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Calculate"></td>
                </tr>
            </table>
           </center>



        </form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>