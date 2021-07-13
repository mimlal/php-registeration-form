<?php
$con =new mysqli('localhost','root','','crudeoperation');
if($con){
    echo "connection succesfull";
}else{
    die(mysqli_error($con));
}
?>