<?php
include 'board.php';
session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
  header("Content-Type: text/html; charset=UTF-8");
  echo "<script>alert('로그인 후 댓글쓰기가 가능합니다!');";
  echo "window.location.replace('board.html');</script>";
  exit;
}
else{
  $sess=$_SESSION['user_id'];
  $bNo = $_POST['bno'];
  $coContent = $_POST['coContent'];
  $sql = "INSERT INTO comment(cnum,bnum,name,content) VALUES(null,'$bNo','$sess','$coContent')";
  if($bmysqli->query($sql))
  {
    $coNo = $bmysqli->insert_id;

    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('등록 완료!');";
    echo "window.location.replace('view.php?bno=$bNo');</script>";
    exit;
  }
  else {
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('등록 실패!');";
    echo "window.location.replace('view.php?bno=$bNo');</script>";
    exit;
  }
}


?>
