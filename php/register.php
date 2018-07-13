<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style1.css">
        <title> 
            Register
        </title>
    </head>
    <body>
       <div class = "window">
           <h1> Homework Planner </h1><hr>
           <h2> Register </h2> 
           <form action = "login.php" method = "post"> 
               <div class = "overall">
                   <div class = "input"> 
                       <label for = "firstname">First Name: </label><input type = "text" name = "firstname" id = "firstname"/> <br/>
                       <label for = "lastname"> Last Name: </label><input type = "text" name = "lastname" id = "lastname"/> <br/>
                       <label for = "username"> Username: </label><input type = "text" name = "username" id = "username"/> <br/>
                       <label for = "email"> Email: </label><input type = "text" name = "email" id = "email"/> <br/> 
                       <label for = "password"> Password: </label><input type="password" name="password" id = "password"/> <br/>
                       <label for = "confpassword"> Confirm Password: </label><input type="password" name="confpassword" id = "confpassword"/> <br/>
                   </div>
                   <div class = "center">
                       <input type="submit" name="Login" class = "submitButton" value = "Create Account"/> <br/>
                   </div>
                   <div class="links">
                       <a href="login.php"> login page </a> <br/>
                   </div>
               </div>
           </form>
       </div> 
    </body>
</html>