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
  <h1>GuestBook</h1>
  <?php
    $filename = "/home/students/accounts/s102061410/cos30020/www/data/lab05/guestbook.txt"; 

    $line = count(file($filename));
    $data = file($filename);
      
    for ($i=0;$i<$line;$i++) {
        echo $data[$i],"<br>";
    }

    //echo "<pre>",readfile($filename),"</pre>";
  
  ?>
</body>
</html>