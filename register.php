<?php
// the database information was stored in the .env file that is
// accessed via autoload
// include "autoload.php";
   //setting CONSTANTS for host, user, password
$email = filter_input(INPUT_POST, 'email');

if ( !empty($email)) {
   $DB_HOST = 'x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'; 
   $DB_USER = 'o5yf8swj86v1ntyj'; 
   $DB_PASS = 'ofai251skrxndni0';
   $DB_NAME = 'e3mtfkarspatmyg7';

   $conn = new mysqli ($DB_HOST, $DB_USER, $DB_PASS , $DB_NAME);
echo "database connected";


if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}

else {
    $sql = "INSERT INTO subcribers (emails) 
    values ('$email') ";
    if ($conn-> query($sql)){
        echo "<h1 style='color:white; margin-top: 50vh;text-align:center'>new record in the database</h1><a href='index.html' style='color:white; text-decoration: none; margin-left: 50vw'>Take me back</a>" ;
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
                 background: url('./assets/ezgif.com-optimize.gif');
                 background-repeat: no-repeat;
                 background-size: cover;

             }
         </style>
     </body>
     </html>