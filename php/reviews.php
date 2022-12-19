<?php
$styles = array("main.css", "header.css", "footer.css", "reviews.css");
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

<section class="review" id="review">

    <h1 class="heading"> best <span> customer's </span></h1>

    <div class="box-container">

        <div class="box">
            <div class="stars">
                <?php
                    for ($i = 0; $i < 5; $i++)
                        echo '<i class="star"><img src="../img/icons/yellow%20star.png" alt="star" height="28px" width="28px"></i>';
                ?>
            </div>
            <p>bought a brand-new impala, it's a pity that the latter is stuck in hell. I am not disappointed with the
                purchase, it is convenient that the store is located in the Netherlands, as I was hunting there.</p>
            <div class="user">
                <img src="../img/customers/customer%201.jpg" alt="">
                <div class="user-info">
                    <h3>Dean Winchester</h3>
                    <span>Hunter of the Night</span>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="stars">
                <?php
                    for ($i = 0; $i < 5; $i++)
                        echo '<i class="star"><img src="../img/icons/yellow%20star.png" alt="star" height="28px" width="28px"></i>';
                ?>
            </div>
            <p>I want to talk about my SUV Mercedes-Benz G-Klass 6x6. Not a car, but just a beast, just like me, hardy
                and indestructible, great for driving on snow and ice as if behind a wall. remember winter is coming</p>
            <div class="user">
                <img src="../img/customers/customer%202.jpeg" alt="">
                <div class="user-info">
                    <h3>John Snow</h3>
                    <span>King in the North</span>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="stars">
                <?php
                    for ($i = 0; $i < 5; $i++)
                        echo '<i class="star"><img src="../img/icons/yellow%20star.png" alt="star" height="28px" width="28px"></i>';
                ?>
            </div>
            <p>I bought a very powerful jeep here, Hummer H-1 is perfect for my expeditions. he passes any obstacle, and
                it is simply impossible to stop him. also pleased with bulletproof glass. Dream for every woman</p>
            <div class="user">
                <img src="../img/customers/customer%203.jpg" alt="">
                <div class="user-info">
                    <h3>Lara Croft</h3>
                    <span>Tomb Raider</span>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="stars">
                <i class="star"><img src="../img/icons/yellow%20star.png" alt="star" height="28px" width="28px"></i>
                <?php
                    for ($i = 0; $i < 4; $i++)
                        echo '<i class="star"><img src="../img/icons/star.png" alt="star" height="25px" width="25px"></i>';
                ?>
            </div>
            <p>I was upset that they didn’t sell horses here, they slipped some kind of iron donkey on two wheels.
                "Roach" does not respond to its name, although it is fast, but I'm tired of looking for gasoline. I was
                scammed.</p>
            <div class="user">
                <img src="../img/customers/customer%204.jpg" alt="">
                <div class="user-info">
                    <h3>Geralt of Rivia</h3>
                    <span>The Wither</span>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="stars">
                <?php
                    for ($i = 0; $i < 5; $i++)
                        echo '<i class="star"><img src="../img/icons/yellow%20star.png" alt="star" height="28px" width="28px"></i>';
                ?>
            </div>
            <p>Bought a cool motorbike here, very happy with the purchase. Works and looks perfect. Very fast, easy to
                maneuver and avoid zombies, just what I need.</p>
            <div class="user">
                <img src="../img/customers/customer%205.jpg" alt="">
                <div class="user-info">
                    <h3>Claire Redfield</h3>
                    <span>Terra-Save Agent</span>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="stars">
                <?php
                    for ($i = 0; $i < 4; $i++)
                        echo '<i class="star"><img src="../img/icons/yellow%20star.png" alt="star" height="28px" width="28px"></i>';
                ?>
                <i class="star"><img src="../img/icons/star.png" alt="star" height="25px" width="25px"></i>
            </div>
            <p>I bought a good jaguar XF, the car is frisky and durable, it's a pity that you had the latest model, my
                boss is interested in acquiring the same one.</p>
            <div class="user">
                <img src="../img/customers/customer%206.jpg" alt="">
                <div class="user-info">
                    <h3>Ada Wong</h3>
                    <span>Umbrella Corporation Spy</span>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="stars">
                <?php
                    for ($i = 0; $i < 5; $i++)
                        echo '<i class="star"><img src="../img/icons/yellow%20star.png" alt="star" height="28px" width="28px"></i>';
                ?>
            </div>
            <p>i'm happy with the purchase of the motorcycle, it's very cool that it can be easily disassembled, it's
                terribly fun to beat the demons right and left with them</p>
            <div class="user">
                <img src="../img/customers/customer%207.jpg" alt="">
                <div class="user-info">
                    <h3>Dante</h3>
                    <span>"Devil May Cry" shop owner</span>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
    require "../php/blocks/footer.php";
?>
