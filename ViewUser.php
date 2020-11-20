<?php
session_start();
//$con=mysqli_connect('localhost','root','','company');
$con=mysqli_connect('localhost','root','','bankdb');

// mysqli_select_db($con,'id8930489_spark');
mysqli_select_db($con,'bank');//

// $Name1=$_SESSION['Name'];
$Name1 = false;
if(isset($_SESSION['Name'])){
    $Name1 = $_SESSION['Name'];
 }
// $q="select name from user where not name='$name1'";
$q="select Name from bank where not Name='$Name1'";

$result=mysqli_query($con,$q);
// $var=$_POST['Name'];
$var = false;
if(isset($_POST['Name'])){
    $var = $_POST['Name'];
 }
// echo $_SESSION['Name'];
?>


<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="view">
        <h1>Choose name for credit transfer</h1>
        <form action="transaction.php" method="post" style="position: relative; left: 40%;">
       <table>
           <th><h2>Name</h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["Name"]; ?>"><?php echo $row["Name"]; ?></td>
      
   </tr>
<?php }
  ?>
       <tr>
          
           <td><input type="submit" value="Credit"></td><!--C-->
           </tr>
        </table>
        </form>
        </div>
    </body>
</html>