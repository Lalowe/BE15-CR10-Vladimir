<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Detail</title>
</head>
<body>
Test
<?php

require_once 'actions/db_connect.php';

if(isset($_GET['publisher_name'])){ 
    
    $query = "SELECT * FROM products WHERE publisher_name = ' .{$_GET['publisher_name']}. '";// klasicka podmienka z sql / we created
    // query a ulozili do $query a pouzijeme $_Get metodu ze ktore id sa ma zobrazit
    $result = mysqli_query($connect, $query);
    if($row = mysqli_fetch_array($result)){
        
        echo  "
            
        <div class='row row-cols-1 row-cols-md-2 g-4'>
        <div class='col'>
        <div class='card-group shadow p-3 mb-5 bg-light rounded '>
        <div class='card '>
        <h2> List of Media released by   ".$row['publisher_name']." </h2>
        <hr>
          <div class='card-body'>
            
            <hr>
            
            
          </div>
        </div>
        </div>
        </div>

      </div>" ;
    }
}   

    ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>





<!-- if(isset($_GET['id']) || ($_GET['publisher_name'])){ 
        $query = "SELECT * FROM products WHERE id = {$_GET['id']}"  ;// klasicka podmienka z sql / we created
        // query a ulozili do $query a pouzijeme $_Get metodu ze ktore id sa ma zobrazit
        $query1 = "AND SELECT * FROM products WHERE publisher_name ={$_GET['publisher_name']}";
        $result = mysqli_query($connect, $query);
        $result1 =mysqli_query($connect, $query1);
        if($row = mysqli_fetch_array($result,$result1)){
            
            echo "
            
            <div class='row row-cols-1 row-cols-md-2 g-4'>
            <div class='col'>
            <div class='card-group shadow p-3 mb-5 bg-light rounded '>
            <div class='card '>
            <h2> List of Media released by   ".$row['publisher_name']." </h2>
            <hr>
              <div class='card-body'>
                
                <hr>
                <p class='card-text'>Publisher Name : ".$row['publisher_name']."</p>
                
              </div>
            </div>
            </div>
            </div>

          </div>" ; -->