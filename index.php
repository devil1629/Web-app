<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    
<html>
          
  
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="boot.css" media="screen">
    </head>
    <body>
        
                 <?php 
// Static users to be checked while log in.

                       if($_SERVER['REQUEST_METHOD']== "POST"){     $Users = array("Zain" =>"1234","Zeba"=>"zeba","Fahad"=>"12345","Grant"=>"123");        

         $pass  = $_POST["password"];
         $user = ucwords( $_POST["uname"]);
         $Username;
         $msg;
         
         if($Users[$user] == $pass){
 //redirect if athuntication successful.
         
        header("Location: http://localhost:81/website/Main.php?name=$user" );    
         }

        else{
 //error
            $msg = "Invalid username or password";
            
        }
    
  }
    ?>



        <h1  id="heading">Prof-Hub</h1>
        
        <div id="login">
            <form method="post" action="index.php">
            <table id="table-back">
                
       
                <tr>    <?php   if(!empty($msg)){ echo $msg;}
                                else{echo "Please enter your username & password";} ?>

<!--Enter Username and password-->
                    <td class="lead">  Username:  </td><td>  <input class="form-control" id="inputEmail" type="text" name="uname" size="30"/></td></tr>
                <tr><td class="lead">  Password:  </td> <td>  <input class="form-control" id="inputEmail" type="password" name="password" size="30"/> </td></tr>

           <!--     <td  class="btn btn-primary btn-lg"> <input id="snbutton" type="submit" value="Sign-Up"/></td>   -->

           <tr><td  ><input class="btn btn-primary btn-lg" id="lgbutton" type="submit" value="Log In"/></td></tr>
            
           
            </table>
            </form>
        
        </div>

      

    </body>
</html>
