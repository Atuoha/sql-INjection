<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
    <title>sQL iNJECT</title>
</head>
<body>

    <div class="container">
    <div class="col-md-5 mx-auto mt-5">
        <form method="post" id="form_pass">
                <h5><i class="fa fa-user"></i> LOGIN </h5>
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
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>


<script>
$('#form_pass').submit(function(e){
    e.preventDefault();

    const data = $(this).serialize();
    // $.post('index.php',data,function(callback){
    //     $('#response').html(callback);
    // })
    $.ajax({
        url: 'validate.php',
        data: data,
        type: 'POST',
        success: function(callback){
            if(!callback.error){
                $('#response').fadeIn();
                $('#response').html(callback);

              setTimeout(() => {
                $('#response').fadeOut();
              }, 3500);

              if(callback === "<br><span class='alert alert-danger'>Opps! We couldn't find your account</span>"){
              $('#form_pass').trigger('reset');

              }
            }
        }
    })
})
</script>


