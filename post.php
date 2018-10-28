<!DOCTYPE html>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <main>
            <?php
                function getPostDetailsFromDatabase() {
                    // Get the post title
                    $postTitle = rawurldecode($_GET["category"]);

                    // Get the post that matches the postTitle
                    include_once 'db_connect.php';
                    $sql = "SELECT * FROM recipes WHERE category='" . $postTitle . "'";
                    $result = mysqli_query($conn, $sql);

                    // Get the first row from the result as an associative array
                    $postDetails = mysqli_fetch_assoc($result);
                    return $postDetails;
                }
                
                // Post details contains all the data to generate the blog from
                $postDetails = getPostDetailsFromDatabase();
            ?>
            <h2 class="post-category"><?php echo $postDetails["category"]; ?></h2>
            <div class="post-name"><?php echo $postDetails["name"]; ?></div>
            <div class="post-title"><?php echo $postDetails["title"]; ?></div>
            <div class="post-ingredients"><?php echo $postDetails["ingredients"]; ?></div>
            <div class="post-directions"><?php echo $postDetails["directions"]; ?></div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>