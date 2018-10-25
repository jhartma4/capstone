<?php
  include 'nav.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Party Recipes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
  </head>
<body>

<header class="w3-container w3-purple w3-center" style="padding:60px 16px">
  <h1 class="w3-margin w3-jumbo">Entrees</h1>
  <p class="w3-xlarge">Delicious dinners that your guests will love.</p>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Your guests wil be clammoring for this recipe</h1>
      <h5 class="w3-padding-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-apple w3-padding-32 w3-text-red"></i>
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
      <!-- First attempt at linking to list of recipes in database -->
      <p class="w3-text-grey">
      <?php 
        function getPostDetailsFromDatabase() {
          $postDetails = array(
            'Title' => 'Entree Post 1',
            'Author' => 'Jane Doe',
            'Ingredients' => 'Chicken Parmigiana',
            'Directions' => 'Cook it',
            'ID' => 'First'
          );
          return $postDetails;
        }
      ?>

      <?php 
        $postDetails = getPostDetailsFromDatabase();
      ?>

      <h1> <?php echo $postDetails["Title"]; ?> </h1>
      <h2> by: <?php echo $postDetails["Author"]; ?> </h2>
      <h5 class="w3-padding-16">Here's some text for a recipe description. We may wish to add a field for this item in the database.</h5>
      <h5 class="w3-padding-16"><li>Ingredients: <?php echo $postDetails["Ingredients"]; ?> </li></h5>
      <div>Directions: <?php echo $postDetails["Directions"]; ?> </div>

      </p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">We all eat, and it would be a sad waste of opportunity to eat badly. 
      <br />-Anna Thomas</h1>
</div>

<?php
  include 'footer.php';
?>

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
</html>