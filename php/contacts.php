<?php
    session_start();
    $title = "Contacts";
    $styles = array("main.css", "header.css", "footer.css", "contacts.css");
    require "../php/blocks/header.php";
?>
    <!--Задняя анимация звезд-->
    <link rel="stylesheet" href="../css/BackgrundAnim.css">
    <section class="wrapper">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </section>

<section class="contact" id="contact">
    <h1 class="heading"> <span> contact </span> us </h1>
</section>

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1_HkVaD_CGSPagadpek-BtnwJ9Oj_5aA&ehbc=2E312F" width="100%" height="650"></iframe>
<?php
require "../php/blocks/footer.php";
?>