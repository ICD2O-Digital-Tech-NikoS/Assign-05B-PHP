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
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_index/favicon-16x16.png">
    <link rel="manifest" href="./favicon_index/site.webmanifest">
  
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Number Addition</title>
    <!-- references javascript file -->
    <script src="./js/script.js"></script>
  </head>

  <body>
    <!-- title and subheader -->
    <?php echo "<h1>Number Addition</h1>";
    echo "<h3>Enter a minimum, a maximum, and an integer.</h3>";
    ?>
    <!-- form for user input of the min, max, and integer -->
    <form action="results.php" method="post" target="results">
      <label for="userMin">Enter a min:</label>
      <input type="number" id="userMin" name="userMin" step="1" placeholder="Enter a Minimum"><br><br>
      <label for="userMax">Enter a max:</label>
      <input type="number" id="userMax" name="userMax" step="1" placeholder="Enter a Maximum"><br><br>
      <label for="userInt">Enter a number:</label>
      <input type="number" id="userInt" name="userInt" step="1" placeholder="Enter an Integer"><br><br>
      <input type="submit">
    </form>
    <!-- display area -->
    <iframe id="results" name="results">
      
    </iframe>
  </body>

</html>
