<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login || Instagram</title>
<link rel="stylesheet" href="public/assets/images/favicon/instagramclone.jpg" type="image/x-icon">
<link rel="stylesheet" href="public/assets/images/css/register.css">
</head>
<body>
<section class="pageContainer">
    <main class="pageContainer__feature">
        <div class="col-1">
            <div class="heroImg"></div>
        </div>
        <article class="col-2">
            <form action="" class="form">
                <div class="siteLogoContainer">
                 <img src="public/assets/images/logo/i11.jpg" alt="Instagram Logo">
                 </div>
                 <input type="text" placeholder="Email or username" class="form-input" name="email_username">
                <br>
                <div class="passwordContainer"><input type="password" placeholder="Enter password" class="form-input" name="password" id="password">
                <span class="show_hide_text cursor_pointer" id="show_hide_password">Show</span>

            </div>
            <button class="button cursor-pointer" type="submit" name="submitButton">Log In</button>
            <span class="separator">OR</span>
            <a href="#" class="password_reset">Forgot password</a>
            </form>
            <footer class="form-footer">Don't have an account?<a href="register.php">Sign Up</a></footer>
        </article>
    </main>
</section>
</body>
</html>
