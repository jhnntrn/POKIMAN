<!DOCTYPE html>
<html>
   <head>
    <title>urPokédex - Create your account</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Resources/main.css">
    <link rel="icon" href="Resources/Images/pokeball.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
   <div id="navbar">
        <div class="logo">urPokédex</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pokedex.php">Pokédex</a></li>
            <li><a class="active" href="makeAccount.php">Make an Account</a></li>
            <li><a href="users.php">Logbook</a></li>
        </ul>
    </div>

      <div class="content">
         <h1>Create an account</h1>
         <form action="makeUser.php" method="post">
            <div id="data">
               <label>User Name</label><br>
               <input type="text" name="uName" value=""><br>
               <label>Password</label><br>
               <input type="password" name="pWord" value="">
            </div>
            <div id="buttons">
               <br><input type="submit" value="Make Account">
            </div>
         </form>
</div>
      <div class="footer">
         <p>&copy;<?php echo date("Y"); ?> Aidan Breshears, Chase Caldwell, and Tri Tran</p>
      </div>
      <script>
        window.onscroll = function() {stickyNav()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function stickyNav() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
   </body>
</html>
