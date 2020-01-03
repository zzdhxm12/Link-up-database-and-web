<?php

$bpass=$_POST['bpass'];
$bnumm=$_POST['bnumm'];

$mysqli=mysqli_connect("localhost","root","titzns2917","term");

$fsql="SELECT * FROM board WHERE num='$bnumm'";
$res=$mysqli->query($fsql);
if($res->num_rows==1)
{
  $row=mysqli_fetch_assoc($res);
  if($row['pass']==$bpass){
    $sql="DELETE FROM board WHERE num='$bnumm'";
    mysqli_query($mysqli,"DELETE FROM board WHERE num='$bnumm'");

    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('삭제 완료!');";
    echo "window.location.replace('index.html');</script>";
    exit;
  }
  else
  {
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('비밀번호가 틀렸습니다!');";
    echo "window.location.replace('index.html');</script>";
    exit;
  }
}
else{
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('존재X');";
    echo "window.location.replace('index.html');</script>";
    exit;
}

mysqli_close($mysqli);
 ?>
