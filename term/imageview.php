<?php
header('Content-Type: image/jpg');
?>
<?php
$mysqli = mysqli_connect("localhost","root","titzns2917","term");

$id=$_GET['name'];
$query="SELECT img FROM macaron WHERE name='$id'";
$result=$mysqli->query($query);

$row=mysqli_fetch_assoc($result);
echo $row['img'];

 ?>
