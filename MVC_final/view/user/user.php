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
		<a class="active" href="http://localhost/index.php">Home</a>
		<a href="http://localhost/index.php?controller=admin">Manage</a>
	</div>
    <div class="container mt-3">
        <h1 class = "text-center">User View</h1>
        <br>
        <br>
        <table class="table table-bodered">
            <thead>
                <th>ID</th>
                <th>Thumb</th>
                <th>Title</th>
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
                </tr>
                <?php
            }
            }
            ?>  
            </tbody>
        </table>
    </div>
</body>
</html>

