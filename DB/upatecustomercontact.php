

<?php
// Include your database connection code here if not already included
// For example, you might have a separate file with the database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerID = $_POST["customerID"];
    $newContact = $_POST["newContact"];

    // Perform the SQL update here
    $sql = "UPDATE Customer
            SET contact = '$newContact'
            WHERE customerID = '$customerID'";

    // Execute the SQL query using your preferred database connection method

    // Check if the SQL operation was successful
    if ($success) {
        // Redirect to the success page
        header("Location: your_success_page.php");
        exit();
    } else {
        // If there was an error, you might want to handle it or redirect to an error page
        echo "Error executing SQL query.";
    }
}
?>


