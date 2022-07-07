<?php require_once "includes/head_section.php";?>

<?php require_once "includes/navbar.php";?>
<div class="container">
    <div class="full-height">
        <div class="card mx-auto" style="width: 25rem;">
            <div class="card-body">
                <form action="/myblog/auth/addUser" method="POST">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" minlength="2" require>
                    </div>
                    <div class="mb-3">
                        <label for="pseudo" class="form-label">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo">
                    </div>
                    <div class="mb-3">
                        <label for="birthDate" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="birthDate" name="birthDate">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once "includes/footer.php";?>