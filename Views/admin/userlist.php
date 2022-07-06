<?php
$title = "Blog | Admin";
require_once "views/includes/head_section.php";?>

<?php require_once "views/includes/navbar.php";?>
<div class="container-fluid ">
    <div class="row full-height ">
        <?php require_once "views/includes/sidebar.php";?>

        <div class="col-9">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Users</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <a href="/myblog/admin/adduser" type="button" class="btn btn-sm btn-outline-secondary">New
                            User</a>
                    </div>

                </div>
            </div>
            <div class="card mx-auto">
                <div class="card-body">
                    <div class="card-header">
                        <h1>User List</h1>
                    </div>
                    <table class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Id </th>
                                <th>First Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user):?>
                            <tr>
                                <td><?=$user['id']?></td>
                                <td><?=$user['first_name']?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <?php require_once "views/includes/footer.php";?>

</div>