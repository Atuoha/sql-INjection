<?php require_once('app/index.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mx-auto mt-5">
    <form action="delete.php" method="post">
         <input type="hidden" name="_token" class="btn btn-primary" value="<?php echo $_SESSION['_token'] ?>">
         <input type="submit" class="btn btn-primary" value="Delete">

    </form>
</div>    
</body>
</html>
