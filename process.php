<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
       
            
   <?php
         $Users = array("Zain" =>"1234","Zeba"=>"zeba","Fahad"=>"12345","Grant"=>"123");        

        $pass  = $_POST["password"];
         $user = ucwords( $_POST["uname"]);
      

       
if($Users[$user] == $pass){
    echo  'Welcome'. " ". "$user";
    
    //If user log in add his user name to the log.
    $myFile= fopen("Users-Log.txt","w+") or die("Not created");
    fwrite($myFile,"$user\n");
    fclose($myFile);

    $sql = "INSERT INTO myguests(fname,lname) values('$user','khan')";
  
}

  /*
$connection = mysqli_connect("localhost","root","Zain","employees");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if(mysqli_query($connection, $sql)){
echo "<br>" ."Updated";
}

else{ 
echo "<br>" ."error". mysqli_error($connection);
}

$connection->close();

*/
//	exit();
?>

       
    </body>
</html>
