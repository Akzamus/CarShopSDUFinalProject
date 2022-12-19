<?php
    $styles = array("main.css", "header.css", "footer.css", "about-us.css");
    $title = "About";
    require "../php/blocks/header.php";
?>
    <link rel="stylesheet" href="../css/BackgrundAnim.css">
    <section class="wrapper">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </section>

    <section class="about" id="about">
        <h1 class="heading"><span> about </span> us </h1>

        <div class="row">
            <div class="video-container">
                <video src="../img/automoto.mp4" loop autoplay muted></video>
                <h3>Feel like a star!</h3>
            </div>

            <div class="contente">
                <h3>Why choose us?</h3>
                <p>
                    With our experience behind us, we do not just speak, but give guarantees for the fulfillment of all
                    obligations. We consider it our goal, by all means, to leave the best impression about working with
                    our
                    team.
                </p>
                <p>
                    We can offer you a huge selection of reliable equipment, the most efficient and reliable delivery,
                    customs clearance of cargo of any complexity at a bargain price. We will do our best to make the
                    purchase and operation of the car pleasant and enjoyable for you!
                <p>
                <a href="reviews.php" class="btn" style="color: #a8ffc7">learn more</a>
            </div>

        </div>

    </section>
<?php
require "../php/blocks/footer.php";
?>