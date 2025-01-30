<?php




include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}




$cheks = implode("','", $_POST['checkbox']);
$sql = "UPDATE FOOD SET `options` = 'DISABLE' WHERE F_ID in ('$cheks')";
$sql1="DELETE from food where options='DISABLE'";

$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
mysqli_query($conn,$sql1);
header('Location: delete_food_items.php');
$conn->close();


?>