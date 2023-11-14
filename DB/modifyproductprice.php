<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Product Price</title>
</head>
<body>

<?php
// Include your database connection code here if not already included
// For example, you might have a separate file with the database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productID = $_POST["productID"];
    $newPrice = $_POST["newPrice"];

    // Perform the SQL update here
    $sql = "UPDATE Product SET price = '$newPrice' WHERE productID = '$productID'";
    // Execute the SQL query using your preferred database connection method

    // Check if the SQL operation was successful
    if ($success) {
        // Redirect to the success page or display a success message
        echo "<p>Product price updated successfully!</p>";
    } else {
        // If there was an error, you might want to handle it or redirect to an error page
        echo "Error executing SQL query.";
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="productID">Product ID:</label>
    <input type="text" name="productID" required><br>

    <label for="newPrice">New Price:</label>
    <input type="text" name="newPrice" required><br>

    <input type="submit" value="Modify Product Price">
</form>

</body>
</html>
