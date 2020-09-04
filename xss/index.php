<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>sQL iNJECT</title>
</head>
<?php
// $date = Date('+1 day');
// setcookie('session','example',$date);
?>
<body>

    <div class="container">
    <div class="col-md-5 mx-auto mt-5">
        <form method="post" id="form_comment">
                <h5>MAKE YOUR COMMENT</h5>
                <p id="response"></p>
            <div class="form-group">
                <label>Name: </label>
                <input type="text" name="name" class="form-control" validate required placeholder="Enter Name">
            </div>

            <div class="form-group">
                 <label>Comment: </label>
                <textarea  class="form-control" name="comment" cols="30" rows="6" validate required placeholder="Enter Comment"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="btn_login">SUBMIT</button>
            </div>

        </form>



        <!-- Displaying data -->
        <div class="display_data">

        </div>
    </div>
    </div>

</body>
</html>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>




<script>
    $('#form_comment').submit(function(e){
        e.preventDefault();

        const data = $(this).serialize();

        $.ajax({
            url: 'cmt.php',
            data:data,
            type:'POST',
            success:function(back_data){
                if(!back_data.error){
                    $('#response').fadeIn();
                    $('#response').html(back_data);
                    $('#form_comment').trigger("reset")

                    setTimeout(() => {
                        $('#response').fadeOut();          
                    }, 3000);
                }
            }
        })
    })




$(document).ready(function(){

    setInterval(() => {
        $.ajax({
            url:'pull.php',
            type:'POST',
            success: function(data){
                if(!data.error){
                    $('.display_data').html(data)
                }
            }
        })
    }, 500);
})



</script>
