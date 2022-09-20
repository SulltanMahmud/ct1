<?php 
require_once('db_connect.php');

$id = $_POST['id'];
$results = mysqli_query( $connect, "DELETE FROM `ticket booking` WHERE ID = $id" );
if($results){
    echo "canceled successfully";
}?>

<a href='booking_input.php'>
        <button class="GFG">
            Back
        </button>
    </a>