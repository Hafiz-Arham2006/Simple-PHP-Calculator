<?php
$i1=$_GET['num1'];
$i2=$_GET['num2'];
$sel=$_GET['select'];
if($sel=="null"){
    echo("Please Select Operator Properly");
}
else if($sel=="+"){
            $ans=$i1+$i2;
}
else if($sel=="-"){
            $ans=$i1-$i2;
}
else if($sel=="x"){
            $ans=$i1*$i2;
}
else if($sel=="/"){
            $ans=$i1/$i2;
}
else{
        echo("Insert Number Properly");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form action="index.php" method="get">    
<table>
        <tr>
            <td>Answer = <span><?php echo($ans) ?></span></td>
        </tr>
        <tr>
            <td><input type="number" name="num1"></td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td><select name="select">
                        <option value="null">Select</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="x">X</option>
                        <option value="/">&divide; </option>
            </select></td>
        </tr>
        <tr>
            <td><button type="submit">Calculate</button></td>
        </tr>
    </table>
    </form>   
    </center> 
</body>
</html>