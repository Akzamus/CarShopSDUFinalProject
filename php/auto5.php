<?php
$styles = array("main.css", "header.css", "footer.css", "auto.css");
$title = "Reviews";
require "../php/blocks/header.php";
?>
    <!--Задняя анимация звезд-->
    <link rel="stylesheet" href="../css/BackgrundAnim.css">
    <section class="wrapper">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </section>

    <section class="cars" id="cars">

        <h1 class="heading"> <span> Ecosse Founder </span> Is Edition Ti XX </h1>
    
        <div class="row">
    
            <div class="img-container">
                <img src="../img/auto5.1.jpg" alt="">
            </div>
    
            <div class="content">
                <h3>In the words of Ecosse</h3>
                <p>The unmistakable look, sound and feel of an exclusive ECOSSE machine. Thoughtfully engineered. Handcrafted by artisans. Designed for discerning enthusiasts. Each a study in contrasts: Fierce yet agile. Wicked yet refined. Aggressive with ideal ergonomics. Luxury and performance finally unite.</p>
                
                
            </div>
    
        </div>
    
    </section>

    <section class="cars" id="cars">

        
    
        <div class="row">
    
            
    
            <div class="content">
                <h3>SuperStar</h3>
                <p>Atchison, who built this bike as his personal ride to commemorate Ecosse’s 10-year anniversary, told Ultimate Motorcycling Magazine he wanted to set it up as a “no holds barred, ready to rocket, serious [machine] – no noise restrictions, no turn signals, no mirrors.” As such, this machine has a “race” designation on its alloy and anodized VIN plate on the head tube, which makes it a pretty special scoot.</p>
                <a href="products.php" class="btn">Back</a>
            </div>
            <div class="img-container">
                <img src="../img/auto5.2.jpg" alt="">
            </div>
    
        </div>
    
    </section>
<?php
require "../php/blocks/footer.php";
?>