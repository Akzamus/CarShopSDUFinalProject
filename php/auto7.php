<?php
    $styles = array("main.css", "header.css", "footer.css", "auto.css");
    $title = "Reviews";
    require "../php/blocks/header.php";
    require "../php/blocks/background.php";
?>
    <section class="cars" id="cars">
        <h1 class="heading"><span> Chevrolet Impala </span> 1967 </h1>
        <div class="row">
            <div class="img-container">
                <img src="../img/auto7.1.jpg" alt="">
            </div>
            <div class="content">
                <h3>fairy tale for connoisseurs</h3>
                <p>All 1967 Impalas also had upgraded door panels along with carpets on the lower portion. Few full-size
                    cars are as luxurious and powerful as the 1967 Chevy Impala, the reason why we call it the best
                    Chevy ever produced.</p>
            </div>
        </div>
    </section>
    <section class="cars" id="cars">
        <div class="row">
            <div class="content">
                <h3>power and luxury</h3>
                <p>Chevrolet Impala is one of the oldest and most popular cars. Since its production, the car has
                    evolved from a luxury car to a low-budget family sedan. Chevrolet Impala 1967 was produced for about
                    10 years, and therefore gained considerable popularity. Currently, this model is very popular among
                    collectors.</p>
                <a href="products.php" class="btn">Back</a>
            </div>
            <div class="img-container">
                <img src="../img/auto7.2.jpg" alt="">
            </div>
        </div>
    </section>
<?php
    require "../php/blocks/footer.php";
?>