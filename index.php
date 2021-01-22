<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do list</title>
    <style>
        .container {
            background-color: #001335;
        }
    </style>
    <!-- import bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="container col-6">
    <!-- Header of page -->
    <header class="bg-info shadow p-4 text-uppercase text-white text-center mt-5">
        <!-- title -->
        <h1>To-do List</h1>
    </header>
    <main class="card mt-2 shadow  ">
        <!-- Management of tasks -->
        <div id="todo" class="row col-11 mx-auto p-4">
            <!-- Add new task -->
            <form method="POST" action="saveData.php">
                <div class="input-group ">
                    <input id="txtNewTask" name="txtNewTask" type="text" class="form-control" placeholder="New task" />
                    <div class="input-group-append">
                        <button id="addTask" class="btn btn-success " type="submit">ADD</button>
                    </div>
            </form>
            <!-- List of task -->
            <div id="tasks" class="input-group mt-2 border row ">
                <!-- template of task -->
            </div>
        </div>
        </div>
    </main>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

</body>

</html>