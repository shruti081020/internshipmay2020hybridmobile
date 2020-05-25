<!--start of the program by "Shruti Gupta" -->
<?php
$empid=$_POST['empid'];
$name=$_POST['name'];
$designation=$_POST['designation'];
$salary=$_POST['salary'];
$sql="INSERT INTO employee VALUES('$empid','$name','$designation','$salary')";
$cn=mysqli_connect("localhost","root","","demodb") or die("unable to connect");
mysqli_query($cn,$sql) or die("unable to insert record");
mysqli_close($cn);
echo "done";
?>
<!--end of the program by "Shruti Gupta" -->