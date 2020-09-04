<?php require_once("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>sQL iNJECT</title>
</head>
<body>

    <div class="container">
    <div class="col-md-5 mx-auto mt-5">
        <form method="post" id="form_login">
                <h5>LOGIN INTO YOUR ACCOUNT</h5>
                <p id="response"></p>
            <div class="form-group">
                <label>Email: </label>
                <input type="email" name="email" class="form-control" validate required placeholder="Enter Email">
            </div>

            <div class="form-group">
                 <label>Password: </label>
                <input type="password" name="pass" class="form-control" validate required placeholder="Enter Password">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="btn_login">LOGIN</button>
            </div>

        </form>
    </div>
    </div>

</body>
</html>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>






<script>
    $('#form_login').submit(function(e){
        e.preventDefault();
        
        const data = $(this).serialize();
        $.post('login.php',data,function(call_back){
            $('#response').fadeIn();
            $('#response').html(call_back);

            setTimeout(() => {
            $('#response').fadeOut();
            }, 3000);

            $(this).trigger('refresh');
        })
    })
</script>