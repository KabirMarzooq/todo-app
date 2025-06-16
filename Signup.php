<?php
session_start();
$username = $email = $password = "";
$username_err = $email_err = $password_err = "";

if (isset($_POST["register"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //validate username
        if (isset($_POST['username']) && trim($_POST['username'])) {
            $username = trim($_POST['username']);
        } else {
            $username_err = "ENTER A VALID USERNAME";
        }

        //validate email
        if (isset($_POST['email']) && trim($_POST['email'])){
            $email_input = trim($_POST['email']);

            if(filter_var($email_input, FILTER_VALIDATE_EMAIL)){
                $email = $email_input;
            } else {
            $email_err = "ENTER A VALID EMAIL ADDRESS";
            } 

        } else {
            $email_err = "EMAIL IS REQUIRED";
        }

        //validate password
        if (isset($_POST['password']) && trim($_POST['password'])){
            $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
        } else {
            $password_err = "ENTER A VALID PASSWORD";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body class="text-white" style="background-color: black;">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <main class="form-signin w-100" style="max-width: 400px;">
            <form id="signupForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <h1 class="mb-3 text-center">Sign Up</h1>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control bg-dark text-white" id="nameInput" name="username" placeholder="Enter Name" required value="<?php echo $username ?>">
                    <span><?php echo $username_err; ?></span>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control bg-dark text-white" id="emailInput" name="email" placeholder="name@example.com" required value="<?php echo $email ?>">
                    <span><?php echo $email_err; ?></span>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control bg-dark text-white" id="passwordInput" name="password" placeholder="Password" required value="<?php echo $password ?>">
                    <span><?php echo $password_err; ?></span>
                </div>

                <div class="form-floating mb-4">
                    <input type="password" class="form-control bg-dark text-white" id="confirmPasswordInput" placeholder="Confirm Password" required>
                </div>

                <p>Already Have An Account?<a href="./Login.php"> LogIn</a></p>

                <button class="btn btn-primary w-100 py-2" type="submit" name="register">Register</button>
            </form>
        </main>
    </div>

    <script src="./js/signup.js" type="text/javascript"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>