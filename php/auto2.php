<?php
    $styles = array("main.css", "header.css", "footer.css", "auto.css");
    $title = "Reviews";
    require "../php/blocks/header.php";
    require "../php/blocks/background.php";
?>
    <section class="cars" id="cars">
        <h1 class="heading"><span> Bugatti </span> La Voiture Noire </h1>
        <div class="row">
            <div class="img-container">
                <img src="../img/auto2.1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Only One</h3>
                <p>9/10 There's Only One Bugatti La Voiture Noire In Existence Exclusivity is one of the ways Bugatti
                    maintains the luxuriousness and integrity of its brand.</p>
            </div>
        </div>
    </section>
    <section class="cars" id="cars">
        <div class="row">
            <div class="content">
                <h3>performance</h3>
                <p>La Voiture Noire wouldn't be a real Bugatti without a powerful powertrain. This exceptional car packs
                    an 8-liter 16-cylinder engine under the hood, which can put out about 1500 horsepower and blast you
                    from 0 to 60 mph in less than 3 seconds.</p>
                <a href="products.php" class="btn">Back</a>
            </div>
            <div class="img-container">
                <img src="../img/auto2.2.jpg" alt="">
            </div>
        </div>
    </section>
<?php
    require "../php/blocks/footer.php";
?>