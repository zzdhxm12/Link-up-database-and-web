<?php
$macaron=$_GET['mac'];
$mysqli = mysqli_connect("localhost","root","titzns2917","term");
$macar = "SELECT * FROM macaron WHERE name='$macaron'";
$result=$mysqli->query($macar);
if($result->num_rows==1)
{
  $row=mysqli_fetch_assoc($result);


  echo "가게명 : ";
  echo $row['name'];
  echo "&#10;";
  echo "위치 : ";
  echo $row['location'];
  echo "&#10;";
  echo "영업 요일 : ";
  echo $row['day'];
  echo "&#10;";
  echo "영업 시간 : ";
  echo $row['timee'];
  echo "&#10;";
  echo "판매 종류 : ";
  echo $row['kinds'];
  echo "&#10;";
  echo "추천수 : ";
  echo $row['good'];
}
else{
  echo "등록되지 않은 가게입니다.";
}
?>
