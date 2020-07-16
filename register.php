<?php
// the database information was stored in the .env file that is
// accessed via autoload
// include "autoload.php";
   //setting CONSTANTS for host, user, password
$email = filter_input(INPUT_POST, 'email');

if ( !empty($email)) {
   $DB_HOST = 'localhost'; 
   $DB_USER = 'root'; 
   $DB_PASS = '';
   $DB_NAME = 'emails';

   $conn = new mysqli ($DB_HOST, $DB_USER, $DB_PASS , $DB_NAME);
echo "database connected";


if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}

else {
    $sql = "INSERT INTO subcribers (emails) 
    values ('$email') ";
    if ($conn-> query($sql)){
        echo "<h1 style='color:white; margin-top: 50vh;text-align:center'>new record in the database</h1><a href='index.html' style='color:white; text-decoration: none; margin-left: 50px'>Take me back</a>" ;
    }
    else{
        echo "Error :". $sql ."<br>". $conn->error;
    }
    $conn->close();
}
}
else{
    echo "please input email"; 
    die();
}
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title></title>
     </head>
     <body>
         <style>
             body{
                 height: 100vh;
                 background: url('./assets/ezgif.com-optimize.gif')
             }
         </style>
     </body>
     </html>