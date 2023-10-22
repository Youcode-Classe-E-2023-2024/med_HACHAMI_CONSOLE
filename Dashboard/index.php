
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style/index.css">
</head>
<body>
    
    <!-- Login/SignUp form -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="includes/signup.inc.php" method="POST">
                <h1>Create Account</h1>
                
                <span>Use your email for registration</span>
                <input type="text" placeholder="User Name" name="uid" />
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="pwd" />
                <input type="password" placeholder="Repeat Password" name="pwdrepeat" />
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="includes/login.inc.php" method="POST">
                <h1>Login in</h1>
                
                <span>Use your account</span>
                <input type="text" placeholder="User Name" name="uid" />
                <input type="password" placeholder="Password"name="pwd" />
                <a href="#">Forgot your password?</a>
                <button name="submit" type="submit">Login In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button name="submit" type="submit" class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>
</html>