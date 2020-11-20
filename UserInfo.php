<?php 
session_start();
// $con=mysqli_connect('localhost','root','','company');
$con=mysqli_connect('localhost','root','','bankdb');

$Name=$_POST['Name'];
// $q="select * from user where name='$name'";
$q="select * from bank where Name='$Name'";

$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['Name'] = $Name;
// echo $_SESSION['Name'];//commented

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
        <h2>User Information</h2>
       <table class="flat-table flat-table-1">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>
        <div class="css-button" >
                 <p class="css-button-text">Transfer To</p>
                 <div class="css-button-inner">
                 <a href="ViewUser.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Transfer To</p>
               </div></a>
               </div>
               </div>


               <br> <br> <br> <br> <br>
               
               


    </body>
</html>