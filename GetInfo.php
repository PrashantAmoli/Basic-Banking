<?php 
session_start();
//$con=mysqli_connect('localhost','root','','company');
$con=mysqli_connect('localhost','root','','bankdb');

// $q="select * from user ";
// $q="select * from bank ";//Test1
$q = "SELECT * FROM `bank`  \n"

    . "ORDER BY `bank`.`Name`  ASC";

$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['Name'];//Commented

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <h1>User Information</h1>
        <table class="flat-table flat-table-1">
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</thead>
	<tbody>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

		</tr>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

        </tr>
        
	</tbody>
</table>
         

           

        <br><br>
        <div class="css-button" >
                  <p class="css-button-text">Home</p>
                  <div class="css-button-inner">
                  <a href="Index.php" >
                  <div class="reset-skew">
                  <p class="css-button-inner-text">Home</p>
                </div></a>
                </div>
                </div>
        
    </body>
</html>