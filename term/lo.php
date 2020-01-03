<?php
 session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
  $lo="LOGIN";
} else {
  $lo="LOGOUT";
} ?>
