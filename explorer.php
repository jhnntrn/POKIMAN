<!DOCTYPE html>
<html>

<head>
   <title>Search Database</title>
   <link rel="stylesheet" type="text/css" href="Resources/dark.css">
</head>

<body>
    <div id="navbar">
        <div class="logo">urPokédex</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="pokedex.php">Pokédex</a></li>
            <li><a href="explorer.php">Explorer</a></li>
            <li><a href="makeAccount.php">Make an Account</a></li>
            <li><a href="users.php">Logbook</a></li>
        </ul>
    </div>
   <main>
      <h1>Search By Name</h1>
      <form action="searchname.php" method="post">

      <div id="data">
         <label>Pokémon Name:</label><br>
         <input type="text" name="pName" value="Bulbasaur">
      </div>

      <div id="buttons">
         <input type="submit" value="Search Name">
      </form>

      <h1>Search By Type</h1>


      <form action="searchtype.php" method="post">

      <div id="data">
         <label>Type:</label><br>
         <input type="text" name="type" value="Normal"><br>
         <!--<span class="small">(Search includes multi-type Pokémon with this type)</span>-->
      </div>

      <div id="buttons">
        <input type="submit" value="Search Type">
      </form>
      </div>
   </main>
   
    <div class="footer">
        <p>&copy;<?php echo date("Y"); ?> Aidan Breshears, Chase Caldwell, and Tri Tran</p>
    </div>

    <script>
        let mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            myFunction();
            scrollFunction();
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html> 
