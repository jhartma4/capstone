<?php
  include 'nav.php';
  include 'header.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Our Favorite Recipes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
  </head>

  <?php
     
    function getPostDetailsFromDatabase() {
    
    $postTitle = rawurldecode($_GET["title"]);
  
    include_once 'db_connect.php';
    $sql = "SELECT * FROM recipes WHERE title='" . $postTitle . "'";
    $result = mysqli_query($conn, $sql);
  
    $postDetails = mysqli_fetch_assoc($result);
    return $postDetails;
  }

?>
<body>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Trending Recipes</h1>
      <h5 class="w3-padding-32">Check out these recipes that are getting the most attention this week.</h5>

      <li>Recipe 1</li>


    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-apple w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>About Our Recipes</h1>
      <h5 class="w3-padding-32">Created by our community of cooks</h5>

      <p class="w3-text-grey">We know the struggle of figuring out what's for dinner and how to please everyone you're cooking for. Whether it's a regular weekday or special occasion, we have a the perfect recipe. Our recipes are a collection or tried-and-true favorites, sure to please your entire family.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Find a recipe. Be inspired.</h1>
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>

<?php
  include 'footer.php';
?>

</html>


