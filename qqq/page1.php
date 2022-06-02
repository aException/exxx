<html>
<body>
<form method='POST' action='pge2.php'>
Enter emp no:
<input type="text" name="t1"> <br>
Enter emp name:
<input type="text" name="t2"> <br>
Enter emp address:
<input type="text" name="t3"> <br>
<input type="submit" value="Next"> 
</form>
</body>
</html>

\\pge2.php

<?php
session_start();
$_SESSION["eno"]=$_POST["t1"];
$_SESSION["ename"]=$_POST["t2"];
$_SESSION["add"]=$_POST["t3"];
?>
<html>
<body>
<form method="POST" action="pge3.php">
basic salary:
<input type="text" name="t1"><br>
DA:
<input type="text" name="t2"><br>
HRA:
<input type="text" name="t3"><br>
<input type="submit" value="Next">
</form>
</body>

\\pge3.php

<?php
session_start();
$empno=$_SESSION["eno"];
$empname=$_SESSION["ename"];
$add=$_SESSION["add"];

$basicsal=$_POST["t1"];
$da=$_POST["t2"];
$hra=$_POST["t3"];
$totalsal=$basicsal+$da+$hra;

echo("<br>Emp no=".$empno);
echo("<br>Emp name=".$empname);
echo("<br>Emp Address=".$add);
echo("<br>Basic Salary=".$basicsal);
echo("<br>DA=".$da);
echo("<br>HRA=".$hra);
echo("<br>Emp total salary=".$totalsal);
?>

