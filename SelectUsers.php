<?php
// $con=mysqli_connect('localhost','root','','company');
$con=mysqli_connect('localhost','root','','bankdb');

// mysqli_select_db($con,'id8930489_spark');//commented
mysqli_select_db($con,'bank');//commented

// $q="select name from user";
$q="select Name from bank";

$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
       <link rel="stylesheet" href="style.css">
</head>
<body>


<form  action="UserInfo.php" method="post">
    <h1> Select User from list</h1>
    <table class="flat-table flat-table-1">


    <?php 
session_start();
// $con=mysqli_connect('localhost','root','','company');
$con=mysqli_connect('localhost','root','','bankdb');

// $q="select * from user ";
$q = "SELECT * FROM `bank`  \n"

    . "ORDER BY `bank`.`Name`  ASC";

$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
// echo $_SESSION['Name'];//commented

?>




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


    <div class="view">

<table cellspacing=50px style="position: relative; left: 40%;">
  <tr>
      <td> <h2>Select User</h2></td>
   
<td>

<?php
// $con=mysqli_connect('localhost','root','','company');
$con=mysqli_connect('localhost','root','','bankdb');

// mysqli_select_db($con,'id8930489_spark');//commented
mysqli_select_db($con,'bank');//commented

// $q="select name from user";
$q = "SELECT Name FROM `bank`";//Imrovised


$result=mysqli_query($con,$q);
?>


  <select name="Name" onchange="this.form.submit()">
  <!-- name-to-Name -->
      <option>--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['Name']; ?>"> <?php echo $row["Name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
           <td><input type="submit" value="submit"></td><!--Commented-->
    </tr>
        </table>
</div>
    </form> 
</body>
</html>