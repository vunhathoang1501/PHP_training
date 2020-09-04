<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport"
          content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-sacle=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="topnav">
		<a href="http://localhost/index.php">Home</a>
		<a class="active" href="http://localhost/index.php?controller=admin">Manage</a>
	</div>
    <div class="container mt-3">
        <h1 class = "text-center">Manage</h1>
        <a href="index.php?controller=admin&action=addview" class="btn btn-primary">Add</a>
        <br>
        <br>
        <table class="table table-bodered">
            <thead>
                <th>ID</th>
                <th>Thumb</th>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php
            if (is_array($view) || is_object($view)){
                foreach ($view as $post) {
                ?>
                <tr>
                    <td><?=$post['id']?></td>
                    <td><?=$post['image']?></td>
                    <td><?=$post['title']?></td>
                    <td><?=$post['status']?></td>
                    <td>
                        <a href="index.php?controller=admin&action=show&id=<?=$post['id']?>" class="btn btn-primary">Show</a>
                        <a href="index.php?controller=admin&action=edit&id=<?=$post['id']?>" class="btn btn-primary">Edit</a>
                        <a href="index.php?controller=admin&action=delete&id=<?=$post['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
            }
            }
            ?>
</body>
</html>