<?php
$sno = $_GET['sno'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$con = new mysqli("localhost","amank","1234","form_1");
if($con->connect_error){
    die($con->connect_error);
} /*else {
    echo "Connection sucessful!";
} */
$sql = "INSERT into p_details(sno, fname, lname) values('$sno','$fname','$lname')";
if($con->query($sql)== true)
{
    echo "Your data is successfully submitted.";
}
else{
    echo $con->error;
}
