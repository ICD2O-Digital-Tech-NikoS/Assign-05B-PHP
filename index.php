<!DOCTYPE html>
<html>

  <head>
    <!-- Meta data section -->
    <meta charset="utf-8">
    <meta name="description" content="Number Addition, Using Javascript">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Niko Shivkumar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- mdl script file -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- Title -->
    <title>Number Addition</title>
  </head>

  <body>
    <!-- title and subheader -->
    <?php echo "<h1>Number Addition</h1>";
    echo "<h3>Enter a minimum, a maximum, and an integer.</h3>";
    ?>
    <!-- form for user input of the min, max, and integer -->
    <form action="results.php" method="post" target="results">
      <label for="userMin">Enter a min:</label>
      <input type="number" id="userMin" name="userMin" min="0" step="1" placeholder="Enter a Minimum"><br><br>
      <label for="userMax">Enter a max:</label>
      <input type="number" id="userMax" name="userMax" min="0" step="1" placeholder="Enter a Maximum"><br><br>
      <label for="userInt">Enter a number:</label>
      <input type="number" id="userInt" name="userInt" min="0" step="1" placeholder="Enter an Integer"><br><br>
      <input type="submit">
    </form>
    <!-- display area -->
    <iframe id="results" name="results">
      
    </iframe>
    <!-- image -->
    <center><img src="./images/blueMonkey.webp" alt="blue monkey" width="500" height="300"></center>
  </body>

</html>
