<?php
if (!isset($_SESSION['admin'])) {
    ?>
    <meta http-equiv="refresh": Content="1;url=../index.php?page=accueil.php"/>
    <?php
    exit();
}
