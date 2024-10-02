<?php
require_once(__DIR__ . '/partials/head.php');
?>

<section class="hero">
    <div class="hero-content">

        <?php
        if (isset($_SESSION['user'])) {
        ?>
            <h1>Bienvenue à toi</h1>
            <p>Tu est maintenant connecté !</p>
        <?php
        } else {
        ?>
            <h1>Bienvenue sur Mon Site</h1>
            <p>Inscrivez-vous dès aujourd'hui et profitez de toutes nos fonctionnalités exclusives !</p>
            <a href="/register" class="cta-btn">Commencez Maintenant</a>
        <?php
        }
        ?>

    </div>
</section>

<section class="features">
    <div class="container">
        <div class="feature">
            <h3>Fonctionnalité 1</h3>
            <p>Profitez d'une expérience utilisateur unique, pensée pour vous.</p>
        </div>
        <div class="feature">
            <h3>Fonctionnalité 2</h3>
            <p>Accédez à du contenu exclusif et à des outils innovants.</p>
        </div>
        <div class="feature">
            <h3>Fonctionnalité 3</h3>
            <p>Rejoignez une communauté grandissante d'utilisateurs satisfaits.</p>
        </div>
    </div>
</section>


<?php
require_once(__DIR__ . '/partials/footer.php');
