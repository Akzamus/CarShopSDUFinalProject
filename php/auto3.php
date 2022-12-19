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

        <h1 class="heading"> <span> McLaren </span> 720s Spider </h1>
    
        <div class="row">
    
            <div class="img-container">
                <img src="../img/auto3.1.jpg" alt="">
            </div>
    
            <div class="content">
                <h3>Fierce Elegance</h3>
                <p>A light and strong supercar shaped by the forces of nature. Honed by the elements. Poised for attack. And ferociously fast. Yet beautifully made, tactile and effortlessly usable, every day.</p>
                
                
            </div>
    
        </div>
    
    </section>

    <section class="cars" id="cars">

        
    
        <div class="row">
    
            
    
            <div class="content">
                <h3>power</h3>
                <p>The McLaren 720S is a force of nature. Its 4.0L twin-turbocharged V8 delivers 720PS and 770Nm of torque. 0-60mph takes just 2.8 seconds. And 124mph arrives in an astonishing 7.8 seconds. But the 720S is all about the way you can use power. The balance. Accessibility. Feedback. Finesse. Breath-taking figures can only tell you so much…</p>
                
                <a href="products.php" class="btn">Back</a>
            </div>
            <div class="img-container">
                <img src="../img/auto3.2.jpg" alt="">
            </div>
    
        </div>
    
    </section>
<?php
require "../php/blocks/footer.php";
?>