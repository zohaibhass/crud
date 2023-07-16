<?php

 $stu_name= $_POST['sname'];
 $stu_adress= $_POST['saddress'];
 $stu_class= $_POST['class'];
 $stu_phone= $_POST['sphone'];

$conn= mysqli_connect("localhost","root","","crud");
$sql= "INSERT INTO student(sname,sadress,sclass,sphone)
values('{$stu_name}','{$stu_adress}','{$stu_class}','{$stu_phone}')";


$result= mysqli_query($conn,$sql) or die("query unsucessfull");


header("location:http://localhost/crud/index.php");

mysqli_close($conn);




?>