<?php
$styles = array("main.css", "header.css", "footer.css", "auto.css");
$title = "Reviews";
require "../php/blocks/header.php";
?>
    <header>
    
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="menu"><img src="../img/icons/menu.png" alt="menu" height="25px" width="25px"></label>
    
        <a href="index.php" class="logo">AUTO<span class="lol">&</span><span>MOTO</span></a>
    
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about-us.php">about</a>
            <a href="products.php">products</a>
            <a href="reviews.php">review</a>
            <a href="contacts.php">contact</a>
        </nav>
    
        <div class="icons">
            
            <a href="#"><img src="../img/shopping%20cart.png" alt="shopping-cart" height="45px" width="45px"></a>
            <a href="#"><img src="../img/icons/profile.png" alt="profile" height="45px" width="45px"></a>
            
        </div>
    
    </header>
    
    <!-- шапка -->
    <section class="cars" id="cars">

        <h1 class="heading"> <span> Rolls-Royce </span> Golden </h1>
    
        <div class="row">
    
            <div class="img-container">
                <img src="../img/auto6.1.jpg" alt="">
            </div>
    
            <div class="content">
                <h3>luxury car</h3>
                <p>Rolls-Royce has unveiled its first all-electric vehicle, the Specter super coupe. Its design is inspired by the flowing lines of a yacht and the streamlined fastback design. Even the "Spirit of Ecstasy" figurine, which has graced the hoods of Rolls-Royce cars since 1911, has been made more aerodynamic.</p>
                
                
            </div>
    
        </div>
    
    </section>

    <section class="cars" id="cars">

        
    
        <div class="row">
    
            
    
            <div class="content">
                <h3>style and beauty</h3>
                <p>Firstly, Rolls-Royce is a brand and only for this you need to overpay. And secondly, you need to pay for manual assembly. Here, each bolt is wrapped by a highly professional specialist and everything has a guarantee. One Rolls-Royce model is assembled from 30 days and involved in the assembly of at least 60 people.</p>
                <a href="products.php" class="btn">Back</a>
            </div>
            <div class="img-container">
                <img src="../img/auto6.2.jpg" alt="">
            </div>
    
        </div>
    
    </section>
<?php
require "../php/blocks/footer.php";
?>