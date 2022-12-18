<?php
    $styles = array("main.css", "header.css", "footer.css", "products.css", "auto.css");
    $title = "Products";
    require "../php/blocks/header.php";
?>
 <!-- машины  -->
 <section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>
   
    <!-- витрина  -->
    <div class="box-container">

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="../img/bmw%20s1000rr.jpg" alt="" height="150px" width="300px">
                <div class="icons">
                    <a href="auto1.php" class="info">INFO</a>
                </div>
            </div>
            <div class="content">
                <h3>BMW s1000rr</h3>
                <div class="price"> $43.199 <span>$47.999</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="../img/Bugatti%20La%20Voiture%20Noire.jpg" alt="" height="150px" width="300px">
                <div class="icons">
                    <a href="auto2.php" class="info">INFO</a>
                </div>
            </div>
            <div class="content">
                <h3>Bugatti La Voiture Noire</h3>
                <div class="price"> $11.399.999 <span>$11.999.999</span> </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../img/McLaren%20720s%20Spider.jpg" alt="" height="150px" width="300px">
                <div class="icons">
                    <a href="auto3.php" class="info">INFO</a>
                </div>
            </div>
            <div class="content">
                <h3>McLaren 720s Spider</h3>
                <div class="price"> $544.999 </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../img/Harley%20Davidson%20Cosmic%20Starship.jpg" alt="" height="150px" width="400px">
                <div class="icons">
                    <a href="auto4.php" class="info">INFO</a>
                </div>
            </div>
            <div class="content">
                <h3>Harley Davidson Cosmic Starship</h3>
                <div class="price"> $359.999 </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../img/Ecosse%20Founder%20is%20Edition%20Ti%20XX.jpg" alt="" height="150px" width="400px">
                <div class="icons">
                    <a href="auto5.php" class="info">INFO</a>
                </div>
            </div>
            <div class="content">
                <h3>Ecosse Founder is Edition Ti XX</h3>
                <div class="price"> $320.599</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../img/Rolls-Royce%20Silver%20Spur.jpg" alt="" height="150px" width="450px">
                <div class="icons">
                    <a href="auto6.php" class="info">INFO</a>
                </div>
            </div>
            <div class="content">
                <h3>Golden Rolls-Royce</h3>
                <div class="price"> $599.999 </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">1/2 LEFT</span>
            <div class="image">
                <img src="../img/Chevrolet%2067.jpg" alt="" height="150px" width="450px">
                <div class="icons">
                    <a href="auto7.php" class="info">INFO</a>
                </div>
            </div>
            <div class="content">
                <h3>Chevrolet Impala 1967</h3>
                <div class="price"> $320.599</div>
            </div>
        </div>
    </div>
  </section>
 <?php
 require "../php/blocks/footer.php";
 ?>