<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Page</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body class="text-white" style="background-color: black;">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <main class="form-signin w-100" style="max-width: 400px;">
            <form id="LoginForm">
                <h1 class="mb-3 fw-normal text-center">Log In</h1>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control bg-dark text-white" id="emailInput" placeholder="name@example.com" required>
                </div>

                <div class="form-floating mb-4">
                    <input type="password" class="form-control bg-dark text-white" id="passwordInput" placeholder="Password" required>
                </div>

                <p>Don't Have An Account?<a href="./Signup.php"> SignUp</a></p>

                <button class="btn btn-primary w-100 py-2" type="submit">LogIn</button>
            </form>
        </main>
    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>
