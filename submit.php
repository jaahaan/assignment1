<?php

$dbserver="localhost";
$dbuser="root";
$dbpass="";
$dbname="s_register";

$conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
//Check Exception
if(!$conn){
die('Connection Fail' .mysql_error());
}
else{
echo 'Connection Successfull. ';
}

$vsname = $_POST['sname'];
$vsemail =$_POST['semail'];
$vinstitute =$_POST['institute'];

$query = "INSERT INTO registration_table(sno,sname,semail,institute) VALUES('','$vsname','$vsemail','$vinstitute')";
$vresult = mysqli_query($conn,$query);

if($vresult){
echo "Recorded Successfully";
}
else{
echo mysqli_error($conn);
}

mysqli_error($conn);

?>