<?php 
require_once('db_connect.php');

$NAME = $_POST['name'];

$results = mysqli_query( $connect, "SELECT * FROM `ticket booking` WHERE NAME = '$NAME'" );

echo "<table border> \n";
echo "<th>ID</th> <th>NAME</th> <th>APPLY DATE</th> <th>FROM LOCATION</th> <th>TO LOCATIN</th> <th>STATUS</th> \n";

while( $rows = mysqli_fetch_array( $results ) ) {
    extract( $rows );
    echo "<tr>";
    echo "<td> $ID </td>";
    echo "<td> $NAME </td>";
    echo "<td> $APPLY_DATE </td>";
    echo "<td> $FROM_LOCATION </td>";
    echo "<td> $TO_LOCATION </td>";
    echo "<td> $STATUS </td>";
    
    echo "</tr> \n";
}
?>
