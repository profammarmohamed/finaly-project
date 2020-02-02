<?php
include('config.php');
   if (isset($_GET['delete'])){
   $delete=$_GET['delete'];
  

 $query="DELETE FROM booking Where booking_id ='$delete'";
 $run=mysqli_query($conn,$query);
 	header('Location:view_booking.php');
 
   }
	 ?>