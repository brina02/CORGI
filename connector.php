<!DOCTYPE html>
<html>
<head>
	<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>
<body>

	<?php

	$con = mysqli_connect('preclab1.erau.edu','nunns','Bdoe022318!','G7_ERAU_Housing');
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}
	$result = $mysqli->query("SELECT * FROM Personnel");
	echo "Table:" .$results. "done";

	mysqli_close($con);
    ?>
</body>
</html>
