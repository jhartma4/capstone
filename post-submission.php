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
<header class="w3-container w3-yellow w3-center" style="padding:60px 16px">
  <h1 class="w3-margin w3-jumbo">Submit a Recipe</h1>
  <p class="w3-xlarge">Add to the collection of party favorites.</p>
</header>

<form action="/submit-post.php">
  Full Name <input type="text" name="Full Name" value=""><br>
  <label>Category</label>
      <select id = "myList">
        <option value = "1">Drinks</option>
        <option value = "2">Appetizers</option>
        <option value = "3">Entrees</option>
      </select><br>
  Title <input type="text" name="Title" value=""><br>
  Ingredients <textarea rows="4" cols="50"></textarea><br>
  Directions <textarea rows="4" cols="50"></textarea><br>
  <button type="submit" value="Submit">Submit</button>  
  <button type="reset" value="Reset">Reset</button>
</form>

</body>
</html>

<?php
  include 'footer.php';
?>