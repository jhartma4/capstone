<?php
  include 'nav.php';
?>

<<!DOCTYPE html>
<html>
    <?php
        // get the data to insert into the db
        $category = $_POST["category"];
        $name = $_POST["name"];
        $title = $_POST["title"];
        $ingredients = $_POST["ingredients"];
        $directions = $_POST["directions"];

        // insert the data with the sql query
        include_once 'db_connect.php';
        $sql="INSERT INTO recipes (category, name, title, ingredients, directions) VALUES ('" .     
            $category . "','" .  $name . "','" . $title . "','" . $ingredients . "','" . $directions . "')";
        $result = mysqli_query($conn, $sql);

        // redirect to homepage
        header("Location: index.php");
    ?>
</html>

<?php
  include 'footer.php';
?>