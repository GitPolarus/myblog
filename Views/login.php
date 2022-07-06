<?php require_once "includes/head_section.php";?>

<?php require_once "includes/navbar.php";?>
<div class="container">
    <div class="full-height">
        <div class="card mx-auto" style="width: 25rem;">
            <div class="card-body">
                <form action="/myblog/auth/login" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once "includes/footer.php";?>