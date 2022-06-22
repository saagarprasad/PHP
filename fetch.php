<?php

$connie=mysqli_connect('localhost','root','','review');

$sql="Select * from users";
$rs=mysqli_query($connie,$sql);

$row=mysqli_fetch_assoc($rs);

echo $row['type'];


?>