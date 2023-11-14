<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Customer</title>
</head>
<body>
    <form action="insert_customer.php" method="post">
        <label for="customerID">Customer ID:</label>
        <input type="text" name="customerID" required><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="contact">Contact:</label>
        <input type="text" name="contact" required><br>

        <input type="submit" value="Insert Customer">
    </form>
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

    
</body>
</html>
