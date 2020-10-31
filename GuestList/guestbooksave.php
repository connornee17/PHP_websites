<!DOCTYPE html> 
<html lang="en"> 
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Web application development" /> 
  <meta name="keywords" content="PHP" />
  <meta name="author" content="Your Name" />
  <title>Guestbook</title>
</head>
<body>
  <h1>Lab05 task 2 - Guestbook</h1>
  <?php
    if (isset ($_POST["firstname"]) && isset ($_POST["lastname"])) {
      $fname = $_POST["firstname"];
      $lname = $_POST["lastname"];
      if (empty($fname)) {
          echo "<p>Please go back and enter first and last name in the input form.</p>";
      } else if (empty ($lname)) {
          echo "<p>Please go back and enter first and last name in the input form.</p>";
      } else {
          $filename = "/home/students/accounts/s102061410/cos30020/www/data/lab05/guestbook.txt"; 
          $handle = fopen($filename, "a") or die ("Cannot create new file");
          $data = $lname.", ".$fname."\n";
          fwrite($handle, $data); 
          fclose($handle);

          $search = "";
          $search2 = "";
          $searh3 =  "";
          $search4 = "";
          $search5 = "Poop";

          if(empty($search)) {
            $search = '"';
          }
          if(empty($search2)) {
            $search2 = '"';
          }
          if(empty($search3)) {
            $search3 = '"';
          }
          if(empty($search4)) {
            $search4 = '"';
          }
          if(empty($search5)) {
            $search5 = '"';
          }


          $lines = file("/home/students/accounts/s102061410/cos30020/www/data/lab05/guestbook.txt");
          $handle = fopen($filename, "r");
          $numlines = count($lines);

          foreach($lines as $line) {
            if(stristr($line, $search) && stristr($line, $search2) && stristr($line, $search3) && stristr($line, $search4) && stristr($line, $search5)) {
              $test = preg_split('/["]+/', $line);
              echo $test[1],"--",$test[2],"--",$test[3],"--",$test[4],"--",$test[5],"<br>";
            }
          }
                 
      }
    } else {
      echo "<p>Please go back and enter first and last name in the input form.</p>";
    } 
  ?>
</body>
</html>

                    