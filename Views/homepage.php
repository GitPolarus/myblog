<?php
$title = "Blog | Home";
require_once "includes/head_section.php";?>

<?php require_once "includes/navbar.php";?>
<div class=" container full-height">


    <h1>Hello <?= $user->getFirstName()." ".$user->getLastName()  ?></h1>
</div>
<?php require_once "includes/footer.php";?>