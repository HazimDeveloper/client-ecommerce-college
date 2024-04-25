<?php
$conn = mysqli_connect("localhost","root","","breyerstore");
function query($query){

    global $conn;
//ambil data table - query data = (connect database,Query Database)
$result = mysqli_query($conn,$query);
$rows = [];

while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
return $rows;

}
?>