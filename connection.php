<?php   
   $connection = mysqli_connect('localhost','root','','blosom_delight');
   //checking connection
   if(mysqli_connect_errno())
     {
       die('database connection failed' . mysqli_connect_error());
     }else{
       echo "connection sucessfull";
	 }
   

?>