<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
        <head>
        <title>Prof-Hub</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="boot.css" media="screen">
    </head>
    <body >
        <h1  id="heading">Prof-Hub</h1>
        <form action="logout.php">
        <input class="btn btn-danger" type="submit" id="signOut" value="Sign Out" />
        </form>
        
        
 <div id='container'>  
     <p id="pname"><?php echo $_GET['name'];  ?></p>
     <h2 id="heading"><img src="x.jpeg" alt="browser out of date" width="100" height="100"/> CanXelled</h2>
     
<form name="theform"  method="post" action="Send.php">
            
    <table id="table-back_Main">
        <tr><td class="lead">Select College</td>
            <td><select class="form-control" style="min-width:100px;">
                    
                    <option>Baruch College</option >
                     <option>John Jay College</option>
                     <option>Lehman College</option>
                </select></td>
                
          <tr><td class="lead">Select Time</td>
            <td><select class="form-control" style="min-width:100px;">
                   
                    <option>Mon-Wed(11:00 am)</option>
                     <option>Mon-Wed(6:00 pm)</option>
                     <option>Tue-Thu(2:00 pm)</option>
                </select></td>      
                
          <tr><td class="lead">Send option</td>
              <td class="text-danger"><input type="radio" name="option0" value="Text"/>Text &nbsp;&nbsp; 
              <input type="radio" name="option1" value="Email"/>Email &nbsp;&nbsp;
              <input type="radio" name="option2" value="Both"/>Both </td>
          </tr>    
                
          <tr><td class="lead">Message </td>
            <td> <textarea rows="5" class="form-control" id="text1" name="message" placeholder="Type your message..."></textarea></td>
            
        </tr>     
            
        <tr><td><td ><input class="btn btn-primary btn-lg" id="lgbutton" type="submit" value="send"/> </td></tr>
        
        
        
        
        
    </table>
     

  </form>


</div>

 <?php
      exit();?>      
    </body>
</html>
