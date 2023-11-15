<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="DataFetching.css">
</head>
<body>

<h1>Contact Details</h1>

<?php
include 'Connection.php';

// Fetch data from the database
$sql = "SELECT * FROM contact_form";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Output each record
        echo '<div class="contact-box">';
        echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
        echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
        echo "<p><strong>Phone:</strong> " . $row["phone"] . "</p>";
        echo "<p><strong>Message:</strong> " . $row["message"] . "</p>";
        echo '</div>';
    }
} else {
    echo "No records found";
}

$conn->close();
?>

</body>
</html>