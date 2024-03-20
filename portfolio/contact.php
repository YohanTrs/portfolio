<?php
include('header.php');
?>
    <main class="contact flex pd2">
        <div class="flex column align-center justify-center">
            <h3 class="text-center">Me contacter</h3>
            <form class="flex column" action="traitement_reception.php" method="post">
                <input type="text" placeholder="Nom" name="name" required>
                <input type="text" placeholder="Société" name="company" required>
                <input type="email" placeholder="Email" name="mail" required>
                <input type="text" placeholder="Objet" name="object" required>
                <textarea name="message" cols="30" rows="5" placeholder="Message" required></textarea>
                <input class="contact-submit" type="submit" value="Envoyer">
                <p><?= isset($_SESSION['message']) ? $_SESSION['message'] : '' ?></p>
            </form>
        </div>
        <div class="main-right flex column align-center justify-around">
            <div class="flex align-center gap25">
                <img class="icon" src="./media/img/contact/square-phone-solid(1).svg" alt="icône téléphone">
                <h3 class="contact-text"><a href="tel:0684542635">06 84 54 26 35</a></h3>
            </div>
            <div class="flex align-center gap25">
                <img class="icon" src="./media/img/contact/envelope-solid(1).svg" alt="icône enveloppe">
                <h3 class="contact-text"><a href="mailto:ins60@hotmail.fr">ins60@hotmail.fr</a></h3>
            </div>
            <div class="flex align-center gap25">
                <img class="icon" src="./media/img/contact/youtube(1).svg" alt="icône youtube">
                <h3 class="contact-text"><a href="https://www.youtube.com/channel/UCXalz2wHvlN3yBKbTaN1DVA">@yohantors</a></h3>
            </div>
            <div class="flex align-center gap25">
                <img class="icon" src="./media/img/contact/linkedin(1).svg" alt="icône linkedin">
                <h3 class="contact-text"><a href="https://www.linkedin.com/in/yohan-tors-201047267/">Yohan Tors</a></h3>
            </div>
            <div class="flex align-center gap25">
                <img class="icon" src="./media/img/contact/github.svg" alt="icône github">
                <h3 class="contact-text"><a href="https://github.com/YohanTrs">YohanTrs</a></h3>
            </div>
          
        </div>
    </main>
    <?php
    include('footer.php');
    ?>