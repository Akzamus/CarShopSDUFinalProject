<?php
    $styles = array("main.css", "header.css", "footer.css", "auto.css");
    $title = "Reviews";
    require "../php/blocks/header.php";
    require "../php/blocks/background.php";
?>
    <section class="cars" id="cars">
        <h1 class="heading"><span> Harley Davidson </span> Cosmic Starship </h1>
        <div class="row">
            <div class="img-container">
                <img src="../img/auto4.1.jpg" alt="">
            </div>
            <div class="content">
                <h3>in a single copy</h3>
                <p>This Harley-Davidson is pretty much the same as it was when it left the factory, but coated with a
                    new layer of paint. Make that more than 37 of them. This is the Harley-Davidson Cosmic Starship,
                    also known as the Million Dollar Harley-Davidson or artists Jack Armstrong's bike.</p>
            </div>
        </div>
    </section>
    <section class="cars" id="cars">
        <div class="row">
            <div class="content">
                <h3>The best models</h3>
                <p>The most expensive Harley Davidson bike is Road Glide Special priced at Rs 36.99 Lakh. Most popular
                    models for Harley Davidson includes Iron 883 (Rs 11.99 Lakh), Forty Eight (Rs 13.49 Lakh), Fat Boy
                    114 (Rs 21.99 Lakh).</p>
                <a href="products.php" class="btn">Back</a>
            </div>
            <div class="img-container">
                <img src="../img/auto4.2.jpg" alt="">
            </div>
        </div>
    </section>
<?php
    require "../php/blocks/footer.php";
?>