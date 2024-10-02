<?php
require_once(__DIR__ . "/../partials/head.php");
?>
<h1>Connexion</h1>

<div class="form-container">
    <h2>Connexion</h2>
    <form action="" method="POST">
        <label for="mail">Email :</label>
        <input type="email" id="mail" name="mail" placeholder="Entrez votre email" required>
        <?php if (isset($this->arrayError['mail'])) {
        ?>
            <p class='text-danger'><?= $this->arrayError['mail'] ?></p>
        <?php
        } ?>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
        <?php if (isset($this->arrayError['password'])) {
        ?>
            <p class='text-danger'><?= $this->arrayError['password'] ?></p>
        <?php
        } ?>
        <button type="submit" class="submit-btn">Se connecter</button>
    </form>
</div>
<?php
if (isset($error)) {
    echo "<p class='text-danger'>" . $error . "<p>";
}
require_once(__DIR__ . "/../partials/footer.php");
?>