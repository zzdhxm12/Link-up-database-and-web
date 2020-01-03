<?php
    if ( !isset($_POST['user_id']) || !isset($_POST['user_pw']) ) {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호가 빠졌거나 잘못된 접근입니다.');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }
    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];
    $user_sname;
    $mysqli=mysqli_connect("localhost","root","titzns2917","term");

    $members="SELECT * FROM member WHERE mail='$user_id'";
    $result=$mysqli->query($members);
    if($result->num_rows==1)
    {
      $row=$result->fetch_array(MYSQLI_ASSOC);
      if(password_verify($user_pw, $row['password']))//비번일치
      {
        $_SESSION['name']=$user_id;
        $user_sname=$row['name'];
        if(isset($_SESSION['name']))
        {
          header('Location: ./index.html');
        }
        else {
            echo "세션 저장실패";
        }
        }
        else{
          header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다!');";
        echo "window.location.replace('/web6/login.html');</script>";
        exit;
        }
      }
      else{
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
        echo "window.location.replace('/web6/login.html');</script>";
        exit;
      }
      session_start();
    $_SESSION['user_ssname']=$user_sname;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_name'] = $members[$user_id]['name'];
?>
