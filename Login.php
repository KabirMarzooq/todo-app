<?php
include __DIR__ . '/db.php';
session_start();
if (isset($_SESSION["logged_in"]) && $_SESSION["status"] === "active") {
    header("location:description.php");
} else {
    session_destroy();
}


$email = $password = "";
$email_err = $password_err = "";

if (isset($_POST["login"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['email']) && trim($_POST['email'])) {
            $email =  trim($_POST['email']);
        } else {
            $email_err = "EMAIL IS REQUIRED";
        }

        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $password = $_POST['password'];
        } else {
            $password_err = "PASSWORD IS REQUIRED";
        }

        if ($email_err == "" && $password_err == "") {
            try {

                $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");

                $stmt->bindvalue(":email", $email, \PDO::PARAM_STR);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {

                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    $hash = $user['password'];
                    $username = $user['username'];

                    if (password_verify($password, $hash)) {

                        $id = $user['id'];
                        session_start();
                        $_SESSION["status"] = "active";
                        $_SESSION["logged_in"] = true;
                        $_SESSION["user"] = $username;
                        $_SESSION["email"] = $email;
                        $_SESSION["user_id"] = $id;

                        header("location:description.php");
                    } else {
                        $password_err = "Invalid PASSWORD";
                    }
                } else {
                    $email_err = "THIS ACCOUNT IS UNAVAILABLE";
                }
            } catch (\PDOException $e) {
                echo "Database Error: " . $e->getMessage();
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
    <title>Dev Mode | LogIn</title>
    <link rel="icon" type="image/png" href="css/shadow.png">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/bdac33f4cb.js" crossorigin="anonymous"></script>
</head>

<body class="text-white mx-2" style="background-color: black;">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <main class="form-signin w-100" style="max-width: 400px;">
            <a href="index.php" style="color: #ffffff;"><i class="fas fa-times float-right h4"></i></a>
            <form id="LoginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <h1 class="mb-3 fw-normal text-center">Log In</h1>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control bg-dark text-white" id="emailInput" placeholder="name@example.com" name="email" value="<?php echo $email ?>">
                    <span><?php echo $email_err; ?></span>
                </div>

                <div class="form-floating mb-4">
                    <div style="position: relative;">
                        <input type="password" class="form-control bg-dark text-white" id="passwordInput" placeholder="Password" name="password" value="<?php echo $password ?>">
                        <i class="fa-solid fa-eye" id="show-password" style=" position: absolute; bottom: 30%;right: 4%; cursor: pointer; color: lightgray;"></i>
                    </div>
                    <span><?php echo $password_err; ?></span>
                </div>

                <p>Don't Have An Account?<a href="./Signup.php"> SignUp</a></p>

                <button class="btn btn-primary w-100 py-2" type="submit" name="login">LogIn</button>
            </form>
        </main>
    </div>

    <script src="./js/signup.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>