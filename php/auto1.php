<?php
    $styles = array("main.css", "header.css", "footer.css", "auto.css");
    $title = "Reviews";
    require "../php/blocks/header.php";
    require "../php/blocks/background.php";
?>
    <section class="cars" id="">
        <h1 class="heading"> <span> BMW </span> S1000rr </h1>
        <div class="row">
            <div class="img-container">
                <img src="../img/auto1.1.jpg" alt="">
            </div>
    
            <div class="content">
                <h3>History</h3>
                <p>RR is a race oriented sport bike initially made by BMW Motorrad to compete in the 2009 Superbike World Championship, that is now in commercial production. It was introduced in Munich in April 2008, and is powered by a 999 cc four-cylinder engine redlined at 14,200 rpm</p>
            </div>
        </div>
        <div class="row">
            <div class="content">
                <h3>Is RR good for beginners?</h3>
                <p>But why ride a 25-year-old beginner bike when you could instead have what, until this year, was the fastest motorcycle ever? Yeah, that sounds like a much better idea. Here's why the BMW S1000RR would be a great choice for your first motorcycle. It's extraordinarily fast.</p>
                <a href="products.php" class="btn">Back</a>
            </div>
            <div class="img-container">
                <img src="../img/auto1.2.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="cars" id="cars">
    </section>
<?php
    require "../php/blocks/footer.php";
?>