<?php
    $styles = array("main.css", "header.css", "footer.css", "reviews.css");
    $title = "Reviews";
    require "../php/blocks/header.php";
    require "../php/blocks/background.php";
    require_once "security/database-connection.php";
?>

<section class="review" id="review">
    <h1 class="heading"> best <span> customer's </span></h1>
    <div class="box-container">
        <?php
            $reviews = mysqli_query($connect, "SELECT * FROM reviews");
            foreach ($reviews as $review) {
                $score = "";
                for ($i = 0; $i < 5; $i++) {
                    if ($i < $review["score"]) $score .= '<i class="bi bi-star-fill"></i>'.PHP_EOL;
                    else                       $score .= '<i class="bi bi-star"></i>'.PHP_EOL;
                }

                echo '<div class="box">
                          <div class="stars">'
                              .$score.
                         '</div>
                          <p>'.$review["comment"].'</p>
                          <div class="user">
                              <img src="..'.$review["avatar"].'">
                              <div class="user-info">
                                  <h3>'.$review["login"].'</h3>
                                  <span>'.$review["description"].'</span>
                              </div>
                          </div>
                      </div>';
            }
        ?>
    </div>
</section>
<?php
    require "../php/blocks/footer.php";
?>
