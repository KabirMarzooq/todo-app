<?php
include __DIR__ . '/db.php';
session_start();
if (isset($_SESSION["logged_in"]) && $_SESSION["status"] === "active") {
} else {
    header("location:signup.php");
}

$user_id = $_SESSION["user_id"];

if (!isset($_SESSION["user_id"])) {
    header("location: signup.php");
    exit();
}

$sql2 = "SELECT * FROM todos WHERE user_id = :user_id ";
$stmt = $conn->prepare($sql2);
$stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$stmt->execute();
$todos = $stmt->fetchAll();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['delete']) && isset($_POST['delete_id'])) {
        $delete_id = $_POST['delete_id'];
        $sql = "DELETE FROM todos WHERE id = :id AND user_id = :user_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $delete_id, PDO::PARAM_INT);
        $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    if (isset($_POST["textarea"])  && !empty($_POST['textarea'])) {

        $textarea = $_POST["textarea"];

        try {
            $sql = "INSERT INTO todos (user_id, description) VALUES (:user_id, :description)";
            $stmt = $conn->prepare($sql);
            $stmt->bindvalue(":description", $textarea, \PDO::PARAM_STR);
            $stmt->bindvalue(":user_id", $user_id, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                // echo "<script> alert('A new todo has been added successfully'); </script>";
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            }
        } catch (\PDOException $e) {
            $error = $e->getMessage();
            throw new Exception($error, 502);
        }
    } else {
        echo "<script> alert('Nothing has been written in the textarea');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/effects.css">
    <script src="https://kit.fontawesome.com/bdac33f4cb.js" crossorigin="anonymous"></script>
</head>

<body class="text-gray bg-info">
    <section class="vh-100">
        <div class="d-flex justify-content-between p-3">
            <div>
                <p class="text-white h3 font-weight-bold" id="ptag"> <?php echo "WELCOME " . ucwords(strtok($_SESSION["user"], " ")) . "."; ?></p>
            </div>

            <a href="logout.php">
                <button class="btn btn-light btn-outline-dark">Log Out</button>
            </a>
        </div>

        <div class="container py-5">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col col-xl-8">
                    <div class="card bg-dark" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <p class="h1 text-center text-primary mb-4">
                                <i class="fa-solid fa-square-check" style="color: #74C0FC;"></i>
                                <u>My Todo's</u>
                            </p>

                            <form class="d-flex justify-content-center align-items-center mb-4 " method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                <div class="form-outline flex-fill">
                                    <textarea id="form3" class="form-control form-control-lg bg-transparent border border-white text-white" placeholder="What do you need to do today?" name="textarea"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg ml-2" name="add">Add</button>
                            </form>

                            <ul class="list-group mb-0">
                                <?php foreach ($todos as $todo): ?>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center  border-right-0 border-left-0 border-top-0 border-white rounded-0 mb-2 bg-transparent text-white">
                                        <div class="d-flex align-items-center text-lg">
                                            <span><?php echo htmlspecialchars($todo['description']); ?></span>
                                        </div>
                                        <small class="text-muted ml-2"><?php echo $todo['created_date']; ?></small>

                                        <form action="" method="POST" style="margin: 0;">
                                            <input type="hidden" name="delete_id" value="<?php echo $todo['id']; ?>">
                                            <button type="submit" name="delete" class="btn btn-sm text-primary border-0 bg-transparent">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </form>

                                    </li>
                                <?php endforeach; ?>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>