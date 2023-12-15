<!DOCTYPE html>
<html>

<head>
    <title>Display Data From Booking Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <h2>Booking Table</h2>

    <table class="table table-dark table-borderless table-sm">

        <th class>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Location</th>
        <th>Guests</th>
        <th>Arrivals</th>
        <th>Leaving</th>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db_booking = "book_form";

$conn = mysqli_connect($localhost, $username, $password, $db_booking);

$sql = "SELECT * FROM booking";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["location"] . "</td>";
        echo "<td>" . $row["guests"] . "</td>";
        echo "<td>" . $row["arrivals"] . "</td>";
        echo "<td>" . $row["leaving"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='9'>0 results</td></tr>";
}

mysqli_close($conn);
?>