<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

<style>

   
.container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 25px !important;
      border: 20px solid black;
        margin-top: 10px;
        margin-bottom: 10px;
       padding-top: 50px;
      padding-right: 10px;
      padding-bottom: 2px;
      padding-left: 110px;
      align-content: center;
    }
    .button {
  padding: 15px 32px;
  align-content: left;
  color: white;
background-color:black;
    }
#number {
  overflow: hidden;
  width: 600px;
}
input[type=number]{
    width: 250px;
} 
  </style>


  </script>
</head>
<body>
  <h1><center><b><img src="https://img.icons8.com/bubbles/80/000000/bus.png"/>Bus Ticket Booking &nbsp <img src="https://img.icons8.com/officel/54/000000/road.png"/></center></b></h1>
 <form method='post' action ='busaction.php' align='center'>






<div class="container">
<section id="form" class="formborder">
<div class="container2">
       <form>
        


       <div class="form-row row justify-content-around" name="source">
  &nbsp

       <div class="form-group col-md-5" name="source">
       <label for="inputEmail4">SOURCE BUS-STOP :</label>    
       <select id="inputState" class="form-control" name="source">
  <option>Hadapsar</option>
   <option>Camp</option>
   <option>Loni Station</option>
   <option>Warje</option>
   <option>Wakad</option>
   <option>Kondhwa</option>
   <option>Baner</option>
   <option>Kothrud</option>
   <option>Viman Nagar</option>
   <option>MANAPA</option> 
   <option>Pune Cantonment</option>
   <option>Swargate</option> 
   <option>Poolgate</option>
   <option>Wanawadi</option> 
   <option>Pimpri Chinchwad</option> 
   <option>Nigdi</option>
   <option>Hinjewadi</option> 
   <option>Dapodi</option> 
   <option>Koregaon Park</option>
   </select>

     <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
    </div>             


   



          <div class="form-group col-md-5" name="dest">
      <label for="inputPassword4"> 
FINAL BUS-STOP :</label>
      <select id="inputState" class="form-control" name="dest">
   
      <option>Hadapsar</option>
   <option>Camp</option>
   <option>Loni Station</option>
   <option>Warje</option>
   <option>Wakad</option>
   <option>Kondhwa</option>
   <option>Baner</option>
   <option>Kothrud</option>
   <option>Viman Nagar</option>
   <option>MANAPA</option> 
   <option>Pune Cantonment</option>
   <option>Swargate</option> 
   <option>Poolgate</option>
   <option>Wanawadi</option> 
   <option>Pimpri Chinchwad</option> 
   <option>Nigdi</option>
   <option>Hinjewadi</option> 
   <option>Dapodi</option> 
   <option>Koregaon Park</option>
   </select> 

      <!--<input type="password" class="form-control" id="inputPassword4" placeholder="TO">-->
  </div>
  

    <div class="form-row row justify-content-aroundd">
       <div class="form-group col-md-16" >
      <center><label for="inputState"><h8>NO OF PASSENGERS :</h8></label></center>
      <center> <input type="number" name="number" required  min="1" max="10"  ></center>
       </div>
      
<br>
    

    <div>   
     <button type="submit"    class="button" name="login_submit" >Proceed</button>
    
 </div>
</form>
</div>

</section>
</div>
  




</body>

<?php include 'footer.php';
?> 
</html>