<?php
$mname=$_POST['macaronname'];
$mlocation=$_POST['mlocation'];

$mday=$_POST['mday'];
$mtime=$_POST['mtime'];
$mkinds=$_POST['mkinds'];

$mysqli=mysqli_connect("localhost","root","titzns2917","term");
$imgs= addslashes(file_get_contents($_FILES['imgs']['tmp_name']));

    $fsql="SELECT * FROM macaron WHERE name='$mname'";
    $res=$mysqli->query($fsql);
    if($res->num_rows==1)
    {
      header("Content-Type: text/html; charset=UTF-8");
      echo "<script>alert('이미 등록된 가게입니다.');";
      echo "window.location.replace('index.html');</script>";
      exit;
    }
    else
    {
      $sql = "INSERT INTO macaron(name,location,good,day,timee,kinds,img) VALUES('$mname','$mlocation','0','$mday','$mtime','$mkinds','$imgs')";

      if($mysqli->query($sql))
      {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('등록 완료!');";
        echo "window.location.replace('index.html');</script>";
        exit;
      }
      else{
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('등록 실패!');";
        echo "window.location.replace('index.html');</script>";
        exit;
      }
    }

mysqli_close($mysqli);
 ?>
