<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:adminindex.php");
}
include 'adminheader.php';
?>

<br>
<br>

<style >
	.container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 50px;
        margin-bottom: 200px;
       padding-top: 50px;
      padding-right: 120px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;
    }
</style>

<html>
<head>
<link rel='stylesheet' href='index.css'>
<br><br>
  <h1><center><b> Admins Data Base <img src="https://img.icons8.com/clouds/100/000000/lock-database-.png"/> </center></b></h1>

<div class="container">

  <td><a href='admintraindb.php'><button style="background-color: black ; border-color:black "  >View Train Bookings </button></a></td>
 </tr> 
<br> <br> 

<tr>

<td><a href='adminbusdb.php'><button style="background-color: black ; border-color:black  ">View Bus Bookings</button></a></td></td>
</tr>
</table>
</tr>
</div>

<?php include 'footer.php';
?> 
</html>
<style >  .table{  font-family: Montserrat, sans-serif;
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="index.css">
<?php
include 'connect.php' ;
include 'head2.php';

$email = $_POST['email'];
$password = $_POST['password'];
$sql_admindatabase = "Select * from admindatabase where email = '$email' and password='$password' ";
$result_admindatabase = mysqli_query($connect, $sql_admindatabase);
if(mysqli_num_rows($result_admindatabase) <= 0)
{
			echo "<center><h1><b>Something went wrong please sign in again<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="adminindex.php"><button style="background-color:black; border-color:black"><span style="color:white">Sign In ! &nbsp&nbspAgain</span></button></a></td></tr></table></center>';
}

else
{
	
	header("location:admin.php");
	$row_admindatabase = mysqli_fetch_array($result_admindatabase);
	session_start();
	$_SESSION['email']=$email;
	$_SESSION['name']=$row_admindatabase['Name'];
	$_SESSION['userid']=$row_admindatabase['UserID'];
	$_SESSION['log']= '1' ;
}
?>
<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'adminheader.php';
?>
 <!DOCTYPE html>  
 <html>  
 <link rel='stylesheet' href='index.css'>

<style>

table#data {
    font-size:16px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
}

#data td, #data th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#data tr:nth-child(even){background-color: #f2f2f2}

#data th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: black;
    color: white;
}

</style>

      <head>  
           <title>BUS PASSENGERS DATABASE</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">BUS PASSENGERS DATABASE</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <th> Date & Time</th>
                                    <th> Booking ID  </th>
                                    <th> Name </th>
                                    <th> Source </th>
                                    <th> Destination </th>
                                    <th> Amount Paid</th>
                               </tr>  
                          </thead>  
                          <tbody>
  <?php 
   $result = mysqli_query($connect , "select * From bustransactions");
  while ($row = mysqli_fetch_assoc($result)): 
    
  ?>
  <tr>
    <td><?php echo $row['Date']; ?></td>
    <td><?php echo $row['T_No.']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['source']; ?></td>
    <td><?php echo $row['dest']; ?></td>
    <td><?php echo $row['Amt']; ?></td>

    </tr>
  
  <?php endwhile; ?>

    
</tbody>

                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#data').DataTable({
        "order": [[ 1, "desc" ]]
    } );
} ); 
 </script>  


<table align='center'>
<tr><!--<td><a href='pay.php'><button>Proceed</button></a></td>-->
  <td><a href='admin.php'><button style="background-color: black ; border-color:black "  ><span style="color:white">Go Back </span> </button></a></td>
 </tr> 
 