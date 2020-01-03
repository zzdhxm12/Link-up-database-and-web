<?php
$mname=$_POST['macaronname'];
$mysqli=mysqli_connect("localhost","root","titzns2917","term");
$fsql="SELECT * FROM macaron WHERE name='$mname'";
$res=$mysqli->query($fsql);
if($res->num_rows==1)
{
  $row=mysqli_fetch_assoc($res);
  $good=$row['good']+1;
  mysqli_query($mysqli,"UPDATE macaron SET good='$good'
  WHERE name='$mname'");

  header("Content-Type: text/html; charset=UTF-8");
  echo "<script>alert('추천 완료!');";
  echo "window.location.replace('index.html');</script>";
  exit;
}
else
{
  header("Content-Type: text/html; charset=UTF-8");
  echo "<script>alert('등록되지 않은 가게입니다.');";
  echo "window.location.replace('index.html');</script>";
  exit;
}
?>
