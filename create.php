<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>PHP CRUD  |  Add Product</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Upload new item</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name="type"  placeholder="Type" /></td>
                    </tr> 
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="ISBN"  placeholder="ISBN" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="short_description"  placeholder="Description" /></td>
                    </tr> 
                    <tr>
                        <th>Author First Name</th>
                        <td><input class='form-control' type="text" name="author_first_name"  placeholder="Author First Name" /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><input class='form-control' type="text" name="author_last_name"  placeholder="Author Last Name" /></td>
                    </tr> 
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name="publisher_name"  placeholder="Publisher Name" /></td>
                    </tr>  
                    <tr>
                        <th>Publisher Adress</th>
                        <td><input class='form-control' type="text" name="publisher_address"  placeholder="Publisher Adress" /></td>
                    </tr>
                    <tr>
                        <th>Available Yes/No</th>
                        <td><input class='form-control' type="text" name="availability"  placeholder="Yes/No" /></td>
                    </tr>
                    
                    <tr>
                        <th>Publish Date (YYYY-MM-DD)</th>
                        <td><input class='form-control' type="text" name= "publish_date" placeholder="Publish Date" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>