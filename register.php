<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account($con);
    

    include("includes/handlers/registerHandler.php");
    include("includes/handlers/loginHandler.php");

    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome To Notify!</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php 

    if(isset($_POST['registerButton'])) {
        echo '<script>
                $(document).ready(function() {
                    $("#loginForm").hide();
                    $("#registerForm").show();
            });
            </script>';
        }
        else {
            echo '<script>
                $(document).ready(function() {
                    $("#loginForm").show();
                    $("#registerForm").hide();
            });
            </script>';
        }

        ?>

<div id="background">
    <div id="loginContainer">
            <div id="inputContainer">
                <form id="loginForm" action="register.php" method="POST">
                    <h2>Login To Notify</h2>
                    <p>
                    <?php echo $account->getError(Constants::$loginFailed); ?>
                    <label for="loginUsername">Username</label>
                    <input id="loginUsername" name="loginUsername" type="text" placeholder="Username" value="<?php getInputValue('loginUsername') ?>" required>
                    </p>
                    <p>
                    <label for="loginPassword">Password</label>
                    <input id="loginPassword" name="loginPassword" type="password" placeholder="Password" required>
                    </p>
                    <button type="submit" name="loginButton">Log In</button>
                    <div class="hasAccountText">
                        <span id="hideLogin">Don't have an account yet? Sign up here.</span>
                    </div>
                    </form>
            
                    <form id="registerForm" action="register.php" method="POST">
                    <h2>Create An Account</h2>
                    <p>   
                    <?php echo $account->getError(Constants::$usernameCharacters); ?>
                    <?php echo $account->getError(Constants::$usernameTaken); ?>
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="Username" value="<?php getInputValue('username') ?>" required>
                    </p>
                    <p>
                    <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                    <label for="firstName">First Name</label>
                    <input id="firstName" name="firstName" type="text" placeholder="First" value="<?php getInputValue('firstName') ?>" required>
                    </p>
                    <p>
                    <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                    <label for="lastName">Last Name</label>
                    <input id="lastName" name="lastName" type="text" placeholder="Last" value="<?php getInputValue('lastName') ?>" required>
                    </p>
                    <p>
                    <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                    <?php echo $account->getError(Constants::$emailInvalid); ?>   
                    <?php echo $account->getError(Constants::$emailTaken); ?>   
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="Email" value="<?php getInputValue('email') ?>" required>
                    </p>
                    <p>   
                    <label for="email2">Confirm Email</label>
                    <input id="email2" name="email2" type="email" placeholder="Confirm Email" value="<?php getInputValue('email2') ?>" required>
                    </p>
                    <p>
                    <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
                    <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?> 
                    <?php echo $account->getError(Constants::$passwordCharacters); ?>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password" required>
                    </p>
                    <p>
                    <label for="password2">Confirm Password</label>
                    <input id="password2" name="password2" type="password" placeholder="Confirm Password" required>
                    </p> 
                    <button type="submit" name="registerButton">Sign Up</button>
                    <div class="hasAccountText">
                        <span id="hideRegister">Already have an account? Log in here.</span>
                    </div>
                </form>
            </div>
            <div id="loginText">
                <h1>Get great music, right now.</h1>
                <h2>Listen to tons of songs for free.</h2>
                <ul>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Discover music you'll fall in love with</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Create your own playlists</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Follow artists to keep up to date</li>
                </ul>
            </div>
        </div>
</div>

</body>
</html>