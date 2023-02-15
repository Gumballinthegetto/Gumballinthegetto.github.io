<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- metas -->
        <meta charset="utf-8" />
        <meta name="author" content="Japon" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="keywords" content="PHP, Laravel" />
        <meta name="description" content="Web and Cloud Technology 2" />
        <!-- Title -->
        <title>Learning PHP</title>
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/b0af6b3ef1.js" crossorigin="anonymous"></script>
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Sans+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
        <!-- webpage icon -->
        <link rel="icon" type="image/png" href="images/FE_logo.jpeg" />
        <!-- stylesheet -->
        <link rel="stylesheet" href="styles/login.css">
    </head>
    <body>
        <div class="grid">
            <!-- LOGIN FORM -->
            <div class="left">
                <header>
                    <h5>Login Form</h5>
                </header>
                <main class="center">
                    <div class="middle">
                        <form action="login.php" method="post">
                            <div class="form-title">
                                <h1 class="title">Hello, <span class="M2">M2</span></h2>
                                <p class="secondary">Login to your account</p>
                            </div>
                            <input 
                                type="text" 
                                name="username" 
                                class="form-input" 
                                placeholder="Enter your email/username">
                            <input 
                                type="password" 
                                name="password" 
                                class="form-input" 
                                placeholder="Enter your password">
                            <div class="separator"></div>
                            <div class="flex">
                                <div class="flex-item">
                                    <input type="checkbox" name="remember-me" id="remember-me"></input>
                                    <label for="remember-me">Remember me</label>
                                </div>
                                <div class="flex-item">
                                    <span>
                                        <a href="#">Forgot password</a>
                                    </span>
                                </div>
                            </div>
                            <div class="sign-in">
                                <button type="submit">
                                    <span class="top-key"></span>
                                    <span class="text">Sign in</span>
                                    <span class="bottom-key-1"></span>
                                    <span class="bottom-key-2"></span>
                                </button>
                            </div>
                            <div class="sign-up">
                                <span>Don't have an account?</span>
                                <a href="#">Sign up</a>
                            </div>
                        </form>
                    </div>
                </main>
                <footer>
                    <span>created by P.Japon</span>
                </footer>
            </div>
            <!-- PAGE COVER -->
            <div class="right">
                <header>
                    <h5>Faculty of Engineering</h5>
                </header>
                <figure>
                    <img 
                        src="images/FE_logo.jpeg"
                        width="250px">
                </figure>
            </div>
        </div>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST') {
                $username=$_POST["username"];
                $password=$_POST["password"];
                if($username=="Dara" && $password=="123") {
                    $_SESSION["username"] = $username;
                    header("Location: welcome.php");
                    die();
                }
            }
        ?>
    </body>
</html>