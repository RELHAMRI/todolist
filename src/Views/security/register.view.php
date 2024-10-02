<?php
require_once(__DIR__ . "/../partials/head.php");
?>
<h1>Inscription</h1>
<form method='POST'>
    <div class="form-container">
        <h2>Inscription</h2>
        <form action="" method="POST">
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" required>
            <?php if (isset($this->arrayError['pseudo'])) {
            ?>
                <p class='text-danger'><?= $this->arrayError['pseudo'] ?></p>
            <?php
            } ?>
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
            <label for="idRole">Role</label>
            <select class="form-select" aria-label="idRole" name="idRole">
                <option value="1">Parent</option>
                <option value="2">Enfant</option>
            </select>
            <?php if (isset($this->arrayError['idRole'])) {
            ?>
                <p class='text-danger'><?= $this->arrayError['idRole'] ?></p>
            <?php
            } ?>
            <button type="submit" class="submit-btn">S'inscrire</button>
        </form>
    </div>
</form>
<?php
require_once(__DIR__ . "/../partials/footer.php");
?>