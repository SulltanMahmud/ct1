<?php 
require_once('db_connect.php');

$NAME = $_POST['name'];
$date = $_POST['date'];
$from = $_POST['from'];
$to = $_POST['to'];

$results = mysqli_query( $connect, "INSERT INTO `ticket booking` ( `NAME`, `APPT_DATE`, `FROM_LOCATION`, `TO_LOCATION`, `STATUS`) VALUES ('$NAME', '$date', '$from', '$to', 'BOOKED');" );

echo "booking done";
?>
<a href='appt_input.php'>
        <button class="GFG">
            Back
        </button>
    </a>
