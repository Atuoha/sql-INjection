<table class="table">
<thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Body</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php
 require_once("../conn.php"); 
 $sql_pull = mysqli_query($conn,"SELECT * FROM comment");
 while($row = mysqli_fetch_array($sql_pull)){
     $id = $row['id'];
     $name = $row['name'];
     $body = $row['comment'];

 ?>
    
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $body ?></td>
            <td><a href="#" class="del_id" style="color:red;" rel="<?php echo $id ?>">Delete
            </a></td>
        </tr>
 <?php    
 }

?>
 </tbody>
</table>



<script>
$('.del_id').click(function(){
        const data = $(this).attr('rel');
    if(confirm('Do you want to Delete')){
        $.ajax({
            url: 'del.php',
            data: {data:data},
            type: 'POST',
            success: function(dataCall){
                if(!dataCall.error){
                    $('#response').fadeIn();
                    $('#response').html(dataCall);
                    setTimeout(() => {
                        $('#response').fadeOut();          
                    }, 3000);
                }
            }
         })
    }
   
})
</script>