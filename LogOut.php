<?php
    session_start();
    include 'connection.php';
    $name = $_SESSION['name'];
    $id = $_GET["id"];
    $res = updateLoggedStatusBy0($id);
   
    if($res)
    {
    redirect("index.php");
    }
    /*
      LoggedInStatus = 1
      logged
      LoggedInStatus = 0
      logged out
      if(logged out)
         index.php
     */
 ?>
