<?php
include "config.php";

# Read from the database and display in the table
$query2 = "SELECT * FROM user";
$result = $conn->query($query2);
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <td>Email</td>
                <td>Password</td>
            </tr>
        ";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr",">",
             "<td>", $row["email"],"</td>",
            "<td>", $row["password"],"</td>",
            "</tr>";
    }
    echo "</table>";
}else {
    echo "No Records!";
}
?>