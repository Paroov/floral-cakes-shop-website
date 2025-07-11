<?php require_once('connection.php')?>

<?php
 
$order_id = $_POST["order_id"];
$product_name = $_POST["product_name"];
$price = $_POST["price"];
$delivery_charge = $_POST["delivery_charge"];
$customer_name = $_POST["customer_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$order_date= $_POST["order_date"];
 
 
 $query = "INSERT INTO `order`(`order_id`, `product_name`, `price`, `delivery_charge`, `customer_name`, `email`, `phone`, `order_date`) VALUES ({$order_id},'{$product_name}',{$price},{$delivery_charge},'{$customer_name }','{$email}',{$phone},'{$order_date}')";
          // INSERT INTO `order`(`order_id`, `product_name`, `price`, `delivery_charge`, `customer_name`, `email`, `phone`, `order_date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
 
 $result = mysqli_query($connection,$query);
 if($result){
	 echo "record added";
 }else{
	 echo "database query failed...";
 }
 
?>


<?php mysqli_close($connection);?>