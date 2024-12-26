<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">
</head>

<body>
    <!-- main-Register -->
    <div class="main-Register">
        <!-- left-side-re -->
        <div class="left-side-re">
            <h1>Create Account</h1>
            <div class="body">
                <img src="<?= ROOT ?>/assets/images/signup.png" class="reg-img">
            </div>
        </div>
        <!-- /left-side-re -->
        <!-- right-side-re -->
        <div class="right-side-re">
            <!-- top-right -->
            <div class="top-right">
                <h5>Already have an account?</h5>
                <a class="links-signin" href="<?= ROOT ?>">Sign In</a>
            </div>
            <!-- /top-right -->
            <!-- body-right -->
            <div class="body-right">
                <!-- container-re -->
                <div class="container-re">
                    <!-- input-group -->
                    <div class="input-group">
                        <form method="POST">

                            <?php if (!empty($errors)) : ?>
                                <div class="alert alert-danger">
                                    <?= implode("<br>", $errors) ?>
                                </div>
                            <?php endif; ?>
                            <h6 class="main-ipt">Name</h6>
                            <input type="text" name="name" id="name" class="ipt-re" placeholder="Enter your name">
                    </div>
                    <div class="input-group">
                        <h6 class="main-ipt">Mobile number</h6>
                        <input type="text" name="mobile" id="mobile" class="ipt-re" placeholder="Enter Mobile number">
                    </div>
                    <div class="input-group">
                        <h6 class="main-ipt">Email Address</h6>
                        <input type="text" name="email" id="email" class="ipt-re" placeholder="Enter email Address">
                    </div>
                    <div class="input-group">
                        <h6 class="main-ipt">Password</h6>
                        <input type="password" name="password" id="password" class="ipt-re" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn-re">Sign Up</button>
                    </form>
                    <!-- /input-group -->
                </div>
                <!-- /container-re -->
            </div>
            <!-- /body-right -->
        </div>
        <!-- /right-side-re -->
    </div>
    <!-- /main-Register -->
</body>

</html>