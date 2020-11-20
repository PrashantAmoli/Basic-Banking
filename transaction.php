<?php
session_start();
// $con=mysqli_connect('localhost','root','','company');
$con=mysqli_connect('localhost','root','','bankdb');

// mysqli_select_db($con,'test');//commented
mysqli_select_db($con,'bank');//

// $q="select name from user";
$q = "SELECT Name FROM `bank`  \n";

$result=mysqli_query($con,$q);
// echo $_POST["transfer"];//commented
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="style.css">
   <style>
     
         input[type=text]
        { 
            margin-top: 5px;
            width:10em;
            height:2em;
            font-size:15px;
           
            font-weight: bold;
        }
         input[type=submit]
        { 
            margin-top: 10px;
            width:6em;
            height:2em;
            font-size:15px;
            background-color: pink;
            font-weight: bold;
        }
       
    </style>
    </head>
    <body>
     <form action="CreditCheck.php" method="post"  style="position: relative; top:20%; ">
          <div class="view">
              <strong>Transfer Amount:</strong>
          <br>
            <br>
          <input type="text" name="transfer"><br>
          <br>
        
          <input type="submit">
        
        </div>
        </form>

        
    </body>
</html>