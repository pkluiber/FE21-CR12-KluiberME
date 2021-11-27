<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM location";
$result = mysqli_query($connect ,$sql);
mysqli_close($connect);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= 
        '<div class="card-group">
            <div class="card">
                <img src="pictures/' .$row["picture"].'" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">'.$row["locationName"].'</h5>
                            <p class="card-text"> '.$row["price"].'</p>
                            <p class="card-text"> '.$row["description"].'</p>
                            <a href=" '.$row["homepage"].'"><button class="btn btn-primary"type="button" >Hotel Info</button></a>
                    </div>
            </div>
        ';

          };
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php'?>
    <title>Document</title>
    <style type="text/css">
.card-img-top{
    width: 300px;
    height: 300px;
}


    
   
  </style>
</head>
<body>
<div class="manageProduct w-75 mt-3">    
            <div class='mb-3'>
                <a href= "index.php"><button class='btn btn-primary'type="button" >Home</button></a>
            </div>
<tbody>
    <?= $tbody;?>
</tbody>
    
</body>
</html>