<?php
  include 'nav.php';
?>

<!DOCTYPE html>
<html>
<body>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
  </head>
<body>
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-large">Submit a Recipe</h1>
</header>

<form action="/submit-post.php">
  First name: <input type="text" name="FirstName" value=""><br>
  Last name: <input type="text" name="LastName" value=""><br>
  Title: <input type="text" name="Title" value=""><br>
  Ingredients: <input type="longtext" name="Ingredients" value=""><br>
  <textarea rows="4" cols="50"></textarea><br>
  Directions: <input type="longtext" name="Directions" value=""><br>
  <textarea rows="4" cols="50"></textarea><br>
  <button type="submit" value="Submit">Submit</button>  
  <button type="reset" value="Reset">Reset</button>
</form>

</body>
</html>

<?php
  include 'footer.php';
?>