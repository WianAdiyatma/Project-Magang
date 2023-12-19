<?php
include('../../conf/config.php');

// Check if 'kompetensi' is set in the GET request
if (isset($_GET['kompetensi'])) {
    $kompetensi = $_GET['kompetensi'];

    // Use prepared statements to prevent SQL injection
    $stmt = $koneksi->prepare("INSERT INTO kompetensi (kompetensi) VALUES (?)");
    $stmt->bind_param("s", $kompetensi); // Assuming 'kompetensi' is a string, change the type if needed

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to the desired page
        header('Location: ../index.php?page=data-kompetensi');
    } else {
        // Handle the error if the execution fails
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // Handle the case when 'kompetensi' is not set
    echo "No 'kompetensi' parameter in the GET request.";
}
?>
