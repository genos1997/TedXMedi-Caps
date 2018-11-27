<?php
  session_start();
  require_once("pdo.php");
  if(!isset($_SESSION['user']) )
  {
    header("Location: login.php");
    return;
  }
  if(isset($_GET['id']))
  {
    $query = $pdo->prepare("DELETE FROM video WHERE `uid` = :uid");
    $query->execute(array(":uid"=>$_GET['id']));
    die("Video Deleted");
    header("Location:deletevideo.php");
  }
  else {
    header("Location:deletevideo.php");
  }
?>
