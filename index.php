<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>To Do List</title>
</head>
<body class="bg-secondary">
    

<form action="insert.php" method="POST">
<div class="container">
    <div class="row justify-content-center bg-white m-auto shadow mt-3 py-3 col-md-6">
        <h3 class="text-center text-warning font-monospace">TODO LIST</h3>
        <div class="col-8">
            <input type="text" name="list" class="form-control shadow">
        </div>
        <div class="col-2">
            <button class="btn btn-primary">Add</button>
        </div>
    </div>
</div>
</form>


</body>
</html>