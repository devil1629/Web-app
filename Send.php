<html>
<body>
    
<?php
// import the Twilio api
    require('/twilio-php/Services/Twilio.php');

   
if( $_SERVER['REQUEST_METHOD']== 'POST'){

//Custom user message
$message = $_POST['message'];

//Turn off SSL certificate verification(Issue with the api version).
 $http = new Services_Twilio_TinyHttp('https://api.twilio.com', array('curlopts' => array(
    CURLOPT_SSL_VERIFYPEER => false
)));

$account_sid = 'ACfa5a532073c835aeb8b602a8cefa2076'; 
$auth_token = '0df022b50f4e256a6df3bf0eaf314abc'; 

//Make connection with a cell tower through the api.
$client = new Services_Twilio($account_sid, $auth_token,'3.12.8',$http); 


 

try{
//Try sending the message
$client->account->messages->sendMessage(
	 "+15168304525", 
     "+13478379966", 
	 $message); 
    
    echo "Message is sent </br>";
    
    echo "You will be redirected to the main page shortly";

// after message is sent redirect user back to index page.
    header("refresh:5 ,url=http://localhost:81/website");
    }
    
     
// catch exceptions
    catch(Exception $e){
        echo 'cauth exception'.$e->getMessage();
    }

    
}
?>



</body>
</html>