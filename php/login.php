<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style1.css">
        <title> 
            Login
        </title>
    </head>
    <body>
       <div class = "window">
           <h1> Homework Planner </h1><hr>
           <h2> Login </h2> 
           <form action = "login.php" method = "post"> 
               <div class = "overall">
                   <div class = "input"> 
                       <label for = "username"> Username: </label><input type = "text" name = "username" id = "username"/> <br/>
                       <label for = "password"> Password: </label><input type="password" name="password" id = "password"/> <br/>
                   </div>
                   <div class = "center">
                       <input type="submit" name="Login" class = "submitButton" value = "Login"/> <br/>
                   </div>
                   <div class="links">
                       <a href="register.php"> Register </a> <br/>
                       <a href="forgotPass.php"> Forgot Password? </a>
                   </div>
               </div>
           </form>
       </div> 
    </body>
</html>