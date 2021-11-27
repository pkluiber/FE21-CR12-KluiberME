<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM location";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= 

        "<tr>
            <td><img class='img-thumbnail' src='pictures/" .$row['picture']."'</td>
            <td>" .$row['locationName']."</td>
            <td>" .$row['price']."</td>
            <td>" .$row['description']."</td>
            <td>" .$row['homepage']."</td>
            <td>" .$row['longitude']."</td>
            <td>" .$row['latitude']."</td>
            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='10'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP CRUD</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
               /* Always set the map height explicitly to define the size of
        * the div element that contains the map. */
        #map {
                height: 80vh;
            }
        /* Optional: Makes the sample page fill the window. */
            html, body {
                margin: auto 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <div class="manageProduct w-75 mt-3">    
            <div class='mb-3'>
                <a href= "create.php"><button class='btn btn-primary'type="button" >Add Location</button></a>
            </div>

        <div class="manageProduct w-55 mt-3">    
            <div class='mb-3'>
                <a href= "displayAll.php"><button class='btn btn-primary'type="button" >All Location</button></a>
        </div>
            <p class='h2'>Locations</p>
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>Picture</th>
                        <th>Location Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Homepage</th>
                        <th>Longitude</th>
                        <th>Latitude</th>

                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
        </div>
        <div class="container">
            <div class="mb-3" id="map"></div>
            <input type="text" class="w-50" id="address" placeholder="Enter address or city name">
            <input type="button" class="btn btn-success" value="Add" onclick="getLocation()">
            <input type="button" class="btn btn-warning" value="Hide" onclick="hidePins()">
            <input type="button" class="btn btn-primary" value="Show" onclick="showPins()">
            <input type="button" class="btn btn-danger" value="Delete all" onclick="deletePins()">
        </div>
        <script>
            let geocoder;
            let markers = [];
            function initMap() {
                geocoder = new google.maps.Geocoder();
                var mlocation = {
                    lat: 48.20849,
                    lng: 16.37208
                };
                var nlocation = {
                    lat: 48.20849,
                    lng: 15.37208
                };
                map = new google.maps.Map(document.getElementById('map'), {
                    center: mlocation,
                    zoom: 8
                });
            }

            function getLocation() {
                let address = document.getElementById('address').value;
                geocoder.geocode({
                    'address': address
                    }, function(results, status) {
                    if (status == 'OK') {
                        map.setCenter(results[0].geometry.location);
                        let marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location
                        });
                        markers.push(marker);
                        console.log(markers);
                    } else {
                        console.table(results);
                        alert('It was not possible to perform your request due to ' + status);
                    }
                })
            };

            function setMapOnAll(map) {
                for (let i = 0; i < markers.length; i++) {
                    markers[i].setMap(map);
                }
            }
            function clearMarkers() {
                setMapOnAll(null);
            }
            function hidePins() {
                clearMarkers();
            };
            function showPins() {
                setMapOnAll(map);
            };
            function deletePins() {
                hidePins();
                markers = [];
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
    </body>
</html>