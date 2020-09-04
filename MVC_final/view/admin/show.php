<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h2 class = "text-center">Show</h2>
    <div class="container mt-3">
    <a href="index.php">
	<button id='back' class="btn btn-primary">Back</button>
    </a>

    <div class="form-group row">
    <label class="col-4 col-form-label">Title</label>
    <div class="col-8">
        <p id="title" name="title" type="text" class="form-control"><?php echo $title ?></p>
    </div>
    </div>
    
    <div class="form-group row">
    <label class="col-4 col-form-label">Image</label>
    <div class="col-8">
        <img id ="image" src = <?php echo $image ?>  alt="image" width = "300" height = auto>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-4 col-form-label">Description</label>
    <div class="col-8">
        <textarea readonly id="description" name="description" cols="40" rows="5" class="form-control"><?php echo $description ?></textarea>
    </div>
    </div>
</body>
</html>