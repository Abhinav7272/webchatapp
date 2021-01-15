<?php
$con= mysqli_connect("localhost","root","root","mychat");
if(mysqli_connect_errno()){
    echo"connection";
}
else{
    echo"no";
}
?>