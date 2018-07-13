<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style1.css">
        <title> 
            Home
        </title>
        <script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </head>
    <body>
       <div class = "largeWindow">
           <h1> Homework Planner </h1>
           <ul>
               <li style = "float:right"><a href="login.php">Log out</a></li>
               <li><a class = "active" href="homePage.php">Home</a></li>
               <li><a href="classes.php">Classes</a></li>
               <li><a href="settings.php">Settings</a></li>
           </ul>
           <div class = "homeButtons">
               <div class="half">
                   <input type="submit" name="addClass" class = "submitButton" value = "Add Class"/> 
               </div>
               <div class="half">
                   <input type="submit" name="addSemester" class = "submitButton" value = "Add Semester"/>  
               </div>
           </div>
           <button id="myBtn">Open Modal</button>
           <div id="myModal" class="modal">
               <!-- Modal content -->
               <div class="modal-content">
                   <div class="modal-header">
                       <span class="close">&times;</span>
                       <h2>Modal Header</h2>

                  </div>
                  <div class="modal-body">
                      <p>Some text in the Modal Body</p>
                      <p>Some other text...</p>
                  </div>
              </div>
          </div>
       </div> 
    </body>
</html>