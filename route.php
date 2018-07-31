<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_close($conn);'
         $sql = 'CREATE DATABASE TUTORIALS';
         $retval = mysql_query( $sql, $conn );
         if(! $retval ) {
            die('Could not create database: ' . mysql_error());
         }
         echo "Database TUTORIALS created successfully\n";
         mysql_close($conn);
      ?>
   </body>
</html>
