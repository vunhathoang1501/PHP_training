<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport"
          content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-sacle=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
        <h1> Add </h1>
        <div class="container mt-3">
        <?php
        if(isset($error)){
            ?>
            <p class="alert alert-danger"><?= $error ?></p>   
            <?php
        }
        ?>
        <form action="index.php?controller=admin&action=add" method="post" name="add">
            <div class="form-group row">
                <label for="title" class="col-4 col-form-label">Title</label>
                <div class="col-8">
                <input id="title" name="title" type="text" class="form-control" placeholder="title">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 col-form-label">Image</label>
                <div class="col-8">
                <input type="file" id="image" name="image">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-4 col-form-label" >Description</label>
                <div class="col-8">
                <textarea id="description" name="description" cols="40" rows="5" class="form-control" placeholder="description"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-4 col-form-label">status</label> 
                <div class="col-8">
                <select id="status" name="status">
                    <option value="1">Enabled</option>
                    <option value="0">Disabled</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="add" type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>

        </form>
    </div>
</body>
</html>