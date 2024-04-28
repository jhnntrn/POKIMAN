<!DOCTYPE html>
<html>

<head>
   <title>Make Account</title>
   <link rel="stylesheet" type="text/css" href="Resources/dark.css">
</head>

<body>
   <div id="navbar">
        <div class="logo">urPokédex</div>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="pokedex.php">Pokédex</a></li>
            <li><a href="explorer.php">Explorer</a></li>
            <li><a href="makeAccount.php">Make an Account</a></li>
            <li><a href="users.php">Logbook</a></li>
        </ul>
    </div>
   <main>
      <h1>Create an account</h1>

      <form action="makeUser.php" method="post">

      <div id="data">
         <label>User Name</label><br>
         <input type="text" name="uName" value="">

         <label>Password</label><br>
         <input type="text" name="pWord" value="">
      </div>

      <div id="buttons">
         <br><input type="submit" value="Make Account">
      </div>
      </form>
   </main>
</body>

</html> 
