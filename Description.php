<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/bdac33f4cb.js" crossorigin="anonymous"></script>
</head>

<body class="text-white">
    <section class="vh-100 bg-info">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col col-xl-8">
                    <div class="card bg-dark" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <p class="h1 text-center text-primary mb-4">
                                <i class="fa-solid fa-square-check" style="color: #74C0FC;"></i>
                                <u>My Todo's</u>
                            </p>

                            <form class="d-flex justify-content-center align-items-center mb-4 ">
                                <div class="form-outline flex-fill">
                                    <textarea id="form3" class="form-control form-control-lg bg-transparent border border-white text-white" placeholder="What do you need to do today?"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg ml-2">Add</button>
                            </form>

                            <ul class="list-group mb-0">
                                <li 
                                    class="list-group-item d-flex justify-content-between align-items-center  border-right-0 border-left-0 border-top-0 border-white rounded-0 mb-2 bg-transparent text-white">
                                    <div class="d-flex align-items-center text-lg">
                                        <span>Creata a ToDo list.</span>
                                    </div>
                                    <a href="#!">
                                        <i class="fas fa-times text-primary"></i>
                                    </a>
                                </li>
                                 <li 
                                    class="list-group-item d-flex justify-content-between align-items-center  border-right-0 border-left-0 border-top-0 border-white rounded-0 mb-2 bg-transparent text-white">
                                    <div class="d-flex align-items-center text-lg">
                                        <span>Creata a ToDo list.</span>
                                    </div>
                                    <a href="#!">
                                        <i class="fas fa-times text-primary"></i>
                                    </a>
                                </li>
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