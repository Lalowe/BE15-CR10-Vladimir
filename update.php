<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $ISBN = $data['ISBN']; // what we take we store it in variable
    $type = $data['type'];// what we take we store it in variable
    $short_description= $data['short_description'];
    $publisher_address = $data ['publisher_address'];
    $publish_date = $data ['publish_date'];
    $availability = $data ['availability'];
        $picture = $data['picture'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $ISBN ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name="type"  placeholder="Type" value="<?php echo $type ?>" /></td>
                    </tr> 
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="ISBN"  placeholder="ISBN" value="<?php echo $ISBN?>"/></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="short_description"  value="<?php echo $short_description ?>" placeholder="Description" /></td>
                    </tr> 
             
                    <tr>
                        <th>Publisher Adress</th>
                        <td><input class='form-control' type="text" name="publisher_address" value="<?php echo $publisher_address ?>" placeholder="Publisher Adress" /></td>
                    </tr>
                    <tr>
                        <th>Available Yes/No</th>
                        <td><input class='form-control' type="text" name="availability" value="<?php echo $availability ?>" placeholder="Yes/No" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "picture" value= "<?php echo $data['picture'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>