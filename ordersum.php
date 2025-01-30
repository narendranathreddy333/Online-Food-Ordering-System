<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "foodorder");


$result = mysqli_query($db,"SELECT order_ID,foodname,price,quantity,order_date,username from orders");



?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="display.css">
 <title> Retrive data</title>
  <style>
  body{
    background-image: url('images/cntactus.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }
 </style>
 <div class="sup">
 <h1>Order Summaries...!!</h1>
 </head>
<body>
  
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td style="font-size: 30px;font-style: italic;"> Order ID</td>
    <td style="font-size: 30px;font-style: italic;">Food Name</td>

    <td style="font-size: 30px;font-style: italic;">Price</td>
    <td style="font-size: 30px;font-style: italic;">Quantity</td>
    <td style="font-size: 30px;font-style: italic;">Order Date</td>
<td style="font-size: 30px;font-style: italic;">Username</td>
   
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
  $i++;
?>
<tr>
    <td><?php echo $row["order_ID"]; ?></td>
    <td><?php echo $row["foodname"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
        <td><?php echo $row["quantity"]; ?></td>
<td><?php echo $row["order_date"]; ?></td>
<td><?php echo $row["username"]; ?></td>
    
</tr>
 <?php
}
}
?>
</table>
 <button onclick="window.location.href='view_food_items.php';">
      Back
    </button>
 </body>
 </div>
</html>