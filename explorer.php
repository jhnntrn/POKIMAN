<!DOCTYPE html>
<html>

<head>
   <title>Search Database</title>
   <link rel="stylesheet" type="text/css" href="Resources/main.css">
</head>

<body>
   <main>
      <h1>Search By Name</h1>
      <form action="searchname.php" method="post">

      <div id="data">
         <label>Pokémon Name</label><br>
         <input type="text" name="pName" value="Bulbasaur">
      </div>

      <div id="buttons">
         <br><input type="submit" value="Search Name">
      </form>

      <h1>Search By Type</h1>


      <form action="searchtype.php" method="post">

      <div id="data">
         <label>Type</label><br>
         <input type="text" name="type" value="Normal">
      </div>

      <div id="buttons">
         <br><input type="submit" value="Search Type">
      </form>
      </div>
   </main>
</body>

</html> 
