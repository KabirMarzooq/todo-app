<?php
include __DIR__ . '/db.php';
session_start();
if (isset($_SESSION["logged_in"]) && $_SESSION["status"] === "active") {
    header("location:description.php");
} else {
    session_destroy();
}

$username = $email = $password = $confirm_pass = "";
$username_err = $email_err = $password_err = $confirm_pass_err = "";

if (isset($_POST["register"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //validate username
        if (isset($_POST['username']) && trim($_POST['username'])) {
            $username = trim($_POST['username']);
        } else {
            $username_err = "ENTER A VALID USERNAME";
        }

        //validate email
        if (isset($_POST['email']) && trim($_POST['email'])) {
            $email_input = trim($_POST['email']);

            if (filter_var($email_input, FILTER_VALIDATE_EMAIL)) {
                $email = $email_input;
            } else {
                $email_err = "ENTER A VALID EMAIL ADDRESS";
            }
        } else {
            $email_err = "EMAIL IS REQUIRED";
        }

        // Validate password
        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $password = $_POST['password'];

            $password_errors = [];

            if (strlen($password) <= 8) {
                $password_errors[] = "PASSWORD MUST BE AT LEAST 8 CHARACTERS LONG.";
            }

            if (!preg_match('/[A-Z]/', $password)) {
                $password_errors[] = "PASSWORD MUST CONTAIN AN UPPERCASE LETTER.";
            }

            if (!preg_match('/[\W]/', $password)) {
                $password_errors[] = "PASSWORD MUST CONTAIN A SPECIAL CHARACTER.";
            }

            if (!empty($password_errors)) {
                $password_err = implode("<br>", $password_errors);
            }
        } else {
            $password_err = "ENTER A VALID PASSWORD";
        }

        //confirm password
        if (isset($_POST['confirm_pass'])  && !empty($_POST['confirm_pass'])) {
            $password = $_POST['password'];
            $confirm_pass = $_POST['confirm_pass'];

            if ($confirm_pass !== $password) {
                $confirm_pass_err = "THE PASSWORD DO NOT MATCH";
            }
        } else {
            $confirm_pass_err = "THIS FIELD IS REQUIRED";
        }


        $stmt = $conn->prepare("SELECT * FROM users WHERE email = '$email' ");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $number = $stmt->rowCount();
        if ($number > 0) {
            $email_err = "EMAIL IS UNAVAILABLE";
        }

        if ($username_err == "" && $email_err == "" && $password_err == "" && $confirm_pass_err == "") {
            try {
                $hash = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO users (username, email, password) VALUES (:name, :email, :password)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":name", $username, \PDO::PARAM_STR);
                $stmt->bindValue(":email", $email, \PDO::PARAM_STR);
                $stmt->bindValue(":password", $hash, \PDO::PARAM_STR);
                $stmt->execute();

                if ($stmt->rowCount() === 1) {
                    $id = $conn->lastInsertId();
                    session_start();
                    $_SESSION["status"] = "active";
                    $_SESSION["logged_in"] = true;
                    $_SESSION["user"] = $username;
                    $_SESSION["email"] = $email;
                    $_SESSION["user_id"] = $id;
                    header("location:description.php");
                } else {
                    return ["error" => "unable to create account"];
                }
            } catch (\PDOException $e) {
                $error =  $e->getMessage();
                // throw new Exception($error, 402);
                // return ["error" => "unable to create account"];
            }
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
    <script src="https://kit.fontawesome.com/bdac33f4cb.js" crossorigin="anonymous"></script>
</head>

<body class="text-white" style="background-color: black;">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <main class="form-signin w-100" style="max-width: 400px;">
            <form id="signupForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <h1 class="mb-3 text-center">Sign Up</h1>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control bg-dark text-white" id="nameInput" name="username" placeholder="Enter Name" value="<?php echo $username ?>">
                    <span><?php echo $username_err; ?></span>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control bg-dark text-white" id="emailInput" name="email" placeholder="name@example.com" value="<?php echo $email ?>">
                    <span><?php echo $email_err; ?></span>
                </div>

                <div class="form-floating mb-3">
                    <div style="position: relative;">
                        <input type="password" class="form-control bg-dark text-white" id="passwordInput" name="password" placeholder="Password" value="<?php echo $password ?>"/>
                        <i class="fa-solid fa-eye" id="show-password" style=" position: absolute; bottom: 30%;right: 4%; cursor: pointer; color: lightgray;"></i>
                    </div>
                    <span><?php echo $password_err; ?></span>
                </div>

                <div class="form-floating mb-4">
                    <div style="position: relative;">
                        <input type="password" class="form-control bg-dark text-white" id="confirmPasswordInput" name="confirm_pass" placeholder="Confirm Password"  value="<?php echo $confirm_pass; ?>" />
                        <i class="fa-solid fa-eye" id="show-confirm-password" style=" position: absolute; bottom: 30%;right: 4%; cursor: pointer; color: lightgray;"></i>
                    </div>
                    <span><?php echo $confirm_pass_err; ?></span>
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