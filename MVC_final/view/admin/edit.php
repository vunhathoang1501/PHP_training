<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport"
          content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-sacle=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h2 class = "text-center">Edit</h2>
    <a href="index.php">
    <button class="btn btn-primary">Back</button>
    </a>
    <form action=<?php echo "http://localhost/index.php?controller=admin&action=upload&id=".$id ?> method="post" name ="update">
        <div class="form-group row">
            <label for="title" class="col-4 col-form-label">Title</label>
            <div class="col-8">
            <input id="title" name="title" type="text" class="form-control" placeholder="title">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label">Image</label>
            <div class="col-8">
            <img id ="image" name = "image" src = <?php echo $image ?>  alt="image" width = "300" height ="200">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-4 col-form-label" >Description</label>
            <div class="col-8">
            <textarea id="description" name="description" cols="40" rows="5" class="form-control" placeholder="description"></textarea>
        </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-4 col-form-label">Status</label>
            <div class="col-8">
            <select id="status" name="status">
                <option value="1">Enabled</option>
                <option value="0">Disabled</option>
            </select>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</body>
</html>