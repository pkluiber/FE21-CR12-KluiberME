<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>PHP CRUD  |  Add Location</title>
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
            <legend class='h2'>Add Location</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Location Name</th>
                        <td><input class='form-control' type="text" name="locationName"  placeholder="Location Name" /></td>
                    </tr>  
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="number" name= "price" placeholder="Price" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="description" placeholder="Description" /></td>
                    </tr>   
                    <tr>
                        <th>Homepage</th>
                        <td><input class='form-control' type="text" name="homepage" placeholder="Homepage" /></td>
                    </tr> 
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="text" name="longitude"  placeholder="Longitude" /></td>
                    </tr>   
                     <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="text" name="latitude"  placeholder="Latitude" /></td>
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