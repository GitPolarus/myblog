<?php
$title = "Blog | Admin";
require_once "views/includes/head_section.php";?>

<?php require_once "views/includes/navbar.php";?>
<div class="container-fluid">
    <div class="row full-height">
        <?php require_once "views/includes/sidebar.php";?>

        <div class="col-9">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <?php require_once "views/includes/footer.php";?>

</div>