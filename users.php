<?php
$connie=mysqli_connect('localhost','root','','review');

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$emailid=$_POST['email'];
$comments=$_POST['comment'];

$sql="Insert into `users`(`First_Name`,`Last_Name`,`Email`,`Comments`) values('$firstname','$lastname','$emailid','$comments')";
$rs=mysqli_query($connie,$sql);

if($rs)
{
    echo 'success';
}

?>