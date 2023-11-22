
    <?php
// Include your database connection code here if not already included
// For example, you might have a separate file with the database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $orderID = $_POST["orderID"];
    $date = $_POST["date"];
    $customerID = $_POST["customerID"];

    // Perform the SQL insertion here
    $sql = "INSERT INTO SalesOrder (orderID, date, customerID) VALUES ('$orderID', '$date', '$customerID')";
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

    

