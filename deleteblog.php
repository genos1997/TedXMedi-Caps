<?php
  session_start();
  require_once("pdo.php");
  if(!isset($_SESSION['user']) )
  {
    header("Location: login.php");
    return;
  }
  $query = $pdo->prepare("DELETE FROM blog WHERE `uid` = :uid");
  $query->execute(array(":uid"=>$_GET['id']));
  die("BLOG DELETED");
?>
