<?php require_once "includes/head_section.php";?>

<?php require_once "includes/navbar.php";?>

<h1>Hello <?= $user->getFirstName()." ".$user->getLastName()  ?></h1>

<?php require_once "includes/footer.php";?>