<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Searching Student</title>
  <style>
  #s{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #s td {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #s tr:nth-child(even){background-color: #f2f2f2;}

  #s tr:hover {background-color: #ddd;}


  </style>
</head>
<body>
    <?php

      if(isset($_POST['submit']))
      {
        $studentfile=fopen("Students.csv","r");
        $title=fgetcsv($studentfile);
        $idsearch=$_POST['studentid'];
        $set=false;
        while(($studentdata=fgetcsv($studentfile))!==false)
        {
          if($studentdata[0]==$idsearch)
          {
            $set=true;
            break;
          }
        }
        if($set)
        {
          echo "<table border='1' id='s'>";
          for($i=0;$i<count($title);$i++)
          {
            echo "<tr>";
            echo "<td>".$title[$i]."</td>";        // key
            echo "<td>".$studentdata[$i]."</td>";    // value
            echo "</tr>";
          }
          echo "</table>"."<br>";
        }
        else {
            echo "Record Not Found";
        }
        fclose($studentfile);
      }
     ?>
     <form class="" action="index.html" method="post">
      <button type="submit" name="backtohome" value="backtohome">Back to Index</button>
     </form>
</body>
</html>
