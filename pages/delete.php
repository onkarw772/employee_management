<?php
include('db.php');
$did = $_GET['did'];
$query = mysqli_query($con, "DELETE FROM `registere_emp` WHERE `id`='$did'");
if ($query) {
    echo " <script>alert('deleted sucessfully')</script>";
    echo " <script>document.location='../record.php'</script>";
} else {
    echo "somthing went wrong";
}


$ddid = $_GET['ddid'];
$query = mysqli_query($con, "DELETE FROM `registere_emp` WHERE `id`='$ddid'");
if ($query) {
    echo " <script>alert('deleted sucessfully')</script>";
    echo " <script>document.location='../record.php'</script>";
} else {
    echo "somthing went wrong";
}
