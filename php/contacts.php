<?php
    session_start();
    $title = "Contacts";
    $styles = array("main.css", "header.css", "footer.css", "contacts.css");
    require "../php/blocks/header.php";
    require "../php/blocks/background.php";
?>
    <section class="contact">
        <h1 class="heading"><span> contact </span> us </h1>
    </section>
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1_HkVaD_CGSPagadpek-BtnwJ9Oj_5aA&ehbc=2E312F"></iframe>
<?php
    require "../php/blocks/footer.php";
?>