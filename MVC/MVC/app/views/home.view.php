<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">
</head>

<body>

    <!-- main-login -->
    <div class="main-login">
        <!-- login-contain -->
        <div class="login-contain">
            <!-- left-side -->
            <div class="left-side">
                <!-- img-class -->
                <div class="img-class">
                    <img src="<?= ROOT ?>\assets\images\login.png" class="img-clz" alt="">
                </div>
                <!-- img-class -->

                <!-- form -->
                <form method="POST">

                    <?php if (!empty($errors)) : ?>
                        <div class="alert alert-danger">
                            <?= implode("<br>", $errors) ?>
                        </div>
                    <?php endif; ?>


                    <label class="lbl" for="email">Email</label>
                    <input class="inp" type="email" name="email" id="email" placeholder="example@example.com" />
                    <label class="lbl" for="pwd">Password</label>
                    <input class="inp" type="password" name="password" id="pwd" placeholder="Password" />
                    <button type="submit" class="sub_btn">Login</button>
                    <p class="final">Don't have an account? <a href="<?= ROOT ?>/signup">Sign Up</a></p>
                </form>
                <!-- /form -->


            </div>
            <!-- /left-side -->
            <!-- right-side -->
            <div class="right-side">
                <div class="welcomeNote">
                    <h3>Welcome Back</h3>
                </div>
                <div class="welcomeImg">
                    <img src="<?= ROOT ?>\assets\images\welcome.png" class="wel_img" alt="" srcset="" />
                </div>
            </div>
            <!-- /right-side -->
        </div>
        <!-- /login-contain -->
    </div>
    <!-- /main-login -->


</body>

</html>