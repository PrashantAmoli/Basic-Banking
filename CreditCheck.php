<?php
session_start();
//$con=mysqli_connect('localhost','root','','company');
$con=mysqli_connect('localhost','root','','bankdb');

// mysqli_select_db($con,'id8930489_spark');//commented
mysqli_select_db($con,'bank');//commented

$Name1=$_SESSION['Name'];
// $q="select credit from user where name='$name1'";
// $q="select credit from bank where name='$name1'";//test1
$q = "SELECT Credit FROM bank  where Name=$Name1";  //improv


$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['Credit'];
$from=$_SESSION['Name'];
// echo $var;//Commented
// echo $_POST["transfer"];//Commented
// echo $_SESSION['to'];//Commented
$to=$_SESSION['to'];
// echo $_SESSION['Name'];//Commented
// $q1="select credit from user where name='$to'";
$q1="select Credit from bank where Name='$to'";

$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['Credit'];
session_destroy();
if ( $var1 > $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update Name set Credit='$sub' where Name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update Name set Credit='$sum' where Name='$to' ";
    $result=mysqli_query($con,$q);
    
        $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    include 'Index.php';
    
}
else
{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'Index.php';

}
?>