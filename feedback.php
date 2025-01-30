<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "foodorder");


$result = mysqli_query($db,"SELECT * from contact");



?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="display.css">
 <title> Retrive data</title>
  <style>
  body{
    background-image: url('images/feedback.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }
 </style>
 <div class="sup">
 <h1>Customer Feedback...</h1>
 </head>
<body>
  
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td style="font-size: 30px;font-style: italic;"> Name </td>
    <td style="font-size: 30px;font-style: italic;">Email</td>
    <td style="font-size: 30px;font-style: italic;">Mobile</td>
    <td style="font-size: 30px;font-style: italic;">Subject</td>
    <td style="font-size: 30px;font-style: italic;">Message</td>
   
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
  $i++;
?>
<tr>
    <td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["Email"]; ?></td>
    <td><?php echo $row["Mobile"]; ?></td>
        <td><?php echo $row["Subject"]; ?></td>
<td><?php echo $row["Message"]; ?></td>
    
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