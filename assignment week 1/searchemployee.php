<!--start of the program by "Shruti Gupta" -->
<?php
$empid=$_POST['empid'];
$sql="SELECT * FROM employee WHERE empid='$empid'";
$cn=mysqli_connect("localhost","root","","demodb");
$result = mysqli_query($cn,$sql);
$count = mysqli_num_rows($result);
if($count==0){
    echo "Sorry! Invalid employee ID, could not find the employee";
}
else{
    $row=mysqli_fetch_array($result);
    echo "$row[1],$row[2],$row[3]s";
}
mysqli_close($cn);
?>
<!--end of the program by "Shruti Gupta" -->