<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>All Students</title>
  <style>

  .button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #6f4a8e;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #6f4a8e}

.button:active {
  background-color: #6f4a8e;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

#s{
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#s td, #s th {
  border: 1px solid #ddd;
  padding: 8px;
}

#s tr:nth-child(even){background-color: #f2f2f2;}

#s tr:hover {background-color: #ddd;}

#s th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ff5722;
  color: white;
}
</style>
</head>
<body>
      <h3>Database of All Students</h3>
      <?php
      $studentfile=fopen("Students.csv","r");
      $title=fgetcsv($studentfile);
      echo "<table id='s'>";
      echo "<tr>";
      for($s=0;$s<count($title);$s++)
      {
        echo "<th>".$title[$s]."</th>";
      }
      echo "</tr>";
      while(($item=fgetcsv($studentfile))!==false)
      {
          echo "<tr>";
          for($i=0;$i<count($item);$i++)
          {
            echo "<td>".$item[$i]."</td>";
          }
          echo "</tr>";
      }
        echo "</table>"."<br>"."<br>";
       ?>
       <form class="" action="index.html" method="post">
        <button class="button" type="submit" name="backtohome" value="backtohome">Back to Index</button>
       </form>
</body>
</html>
