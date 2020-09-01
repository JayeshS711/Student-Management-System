<?php
    $actionsel=$_POST['action'];
    if($actionsel=='add')
    {
        header("Location: addstudent.html");
    }
    elseif ($actionsel=='search')
    {
      header("Location: searchstudent.html");
    }
    elseif ($actionsel=='display')
     {
       header("Location: showall.php");
    }

 ?>
