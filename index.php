<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require_once('db_connect.php');
    $results = mysqli_query( $connect, "SELECT * FROM `ticket booking`" );
    echo "<table border> \n";
	echo "<th>ID</th> <th>NAME</th> <th>APPLY DATE</th> <th>FROM LOCATION</th> <th>TO LOCATIN</th> <th>STATUS</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $ID </td>";
        echo "<td> $NAME </td>";
        echo "<td> $APPT_DATE </td>";
        echo "<td> $FROM_LOCATION </td>";
        echo "<td> $TO_LOCATION </td>";
        echo "<td> $STATUS </td>";
        
		echo "</tr> \n";
	}
    ?>

<a href='booking_input.php'>
        <button class="GFG">
            ADD Booking
        </button>
    </a>
    <a href='cancel_input.php'>
        <button class="GFG">
            Cancel Booking
        </button>
    </a>
    <a href='https://ide.geeksforgeeks.org/'>
        <button class="GFG">
            View by id
        </button>
    </a>
    <a href='ticket_history_user.php'>
        <button class="GFG">
            View by name
        </button>
    </a>
</body>
</html>