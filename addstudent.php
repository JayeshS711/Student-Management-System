
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
    </head>
    <body>
      <?php
       //formout($_POST);
         //$title=  array_keys($_POST);
        // pre_r($title);

        // $studentfile = fopen("Students.csv","w");
        //fputcsv($title,$studentfile);
         //fclose($studentfile);
         //
       echo "Starting uploading of data";
        if(isset($_POST['submit']))
            {
                $studentdata = array_values($_POST);
                array_pop($studentdata);
                $studentfile=fopen("Students.csv","a");
                fputcsv($studentfile,$studentdata);
                fclose($studentfile);

            }
       ?>
       <h3 style="font-famliy:sans-serif">Your Form has been Submitted Successfully</h3>
       <form class="" action="index.html" method="post">
        <button type="submit" name="backtohome" value="backtohome">Back to Index</button>
       </form>
      
    </body>
    </html>
