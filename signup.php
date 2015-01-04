<html>
<body>

<?php
 $pass  = $_POST["password"];
 $user = ucwords( $_POST["uname"]);
 $email = $_POST["email"];
 
 //Connect to the sql database
 $connection =  mysqli_connect("localhost","root","Zain","employees");
 if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

else {
    echo "yes"."<br>";}

//Create the querry and the result set.
$sql = "SELECT * FROM users where UserName='$user'";   
$result = mysqli_query($connection,$sql); 



if(mysqli_num_rows($result) > 0) 
{
    //If user already exists
    echo "Username already exists";
} 
  
else {
//Add the user to the database    
$addUser = "Insert Into users(UserName,passwd,email) values('$user','$pass','$email')";   
$result = mysqli_query($connection,$addUser);

if($result){
// After user is sucessfully added. redirect him to the main page.
header("Location: http://localhost:81/website/Main.php?name=$user" );;
}
    
}


?>



</body>
</html>