<?php

         $m_name=$_POST['member_name'];
         $m_birth=$_POST['member_birth'];
         $m_mail=$_POST['member_mail'];
         $m_age=$_POST['member_age'];
         $m_pass=$_POST['member_pass'];
         $m_class="일반회원";

         $hash = password_hash($m_pass, PASSWORD_DEFAULT); //암호화

         $mysqli=mysqli_connect("localhost","root","titzns2917","term");

         $fsql="SELECT * FROM member WHERE mail='$m_mail'";
         $res=$mysqli->query($fsql);

         if($res->num_rows==1)
         {
           header("Content-Type: text/html; charset=UTF-8");
           echo "<script>alert('이미 등록된 고객입니다.');";
           echo "window.location.replace('../term/index.html');</script>";
           exit;
         }
         else
         {
           $sql2 = "INSERT INTO member(name,age,birth,mail,password,class) VALUES ('$m_name','$m_age','$m_birth','$m_mail','$hash','$m_class')";

           if($mysqli->query($sql2))
           {
             header("Content-Type: text/html; charset=UTF-8");
             echo "<script>alert('등록 완료!');";
             echo "window.location.replace('../term/index.html');</script>";
             exit;
           }
           else {
             header("Content-Type: text/html; charset=UTF-8");
             echo "<script>alert('등록 실패!');";
             echo "window.location.replace('../term/index.html');</script>";
             exit;
           }
         }

         mysqli_close($mysqli);

 ?>
