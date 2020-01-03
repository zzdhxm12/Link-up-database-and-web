<?php
include 'board.php';
session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
  header("Content-Type: text/html; charset=UTF-8");
  echo "<script>alert('로그인 후 글쓰기가 가능합니다!');";
  echo "window.location.replace('board.html');</script>";
  exit;
}
else {
  $sess=$_SESSION['user_id'];
  $bPassword = $_POST['bPassword'];
  $bTitle = $_POST['bTitle'];
  $bContent = $_POST['bContent'];
  $date = date('Y-m-d');
  $sql = "INSERT INTO board(num,title,content,day,name,pass) VALUES(null,'$bTitle','$bContent','$date','$sess','$bPassword')";
  if($bmysqli->query($sql))
  {
    $bNo = $bmysqli->insert_id;
    $replaceURL = './view.php?bno='.$bNo;
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('등록 완료!');";
    echo "window.location.replace('board.html');</script>";
    exit;
  }
  else {
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('등록 실패!');";
    echo "window.location.replace('board.html');</script>";
    exit;
  }
}
?>
