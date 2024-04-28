<!DOCTYPE html>
<html>

<head>
   <title>Search Database</title>
   <link rel="stylesheet" type="text/css" href="Resources/main.css">
</head>

<body>
    <div id="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="pokedex.php">Pokédex</a>
        <a href="explorer.php">Explorer</a>
        <a href="makeAccount.php">Make an Account</a>
        <a href="users.php">Logbook</a>
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
</body>

</html> 
