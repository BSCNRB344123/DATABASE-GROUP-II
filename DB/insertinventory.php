<?php
// Include your database connection code here if not already included
// For example, you might have a separate file with the database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inventoryID = $_POST["inventoryID"];
    $supplierID = $_POST["supplierID"];
    $productID = $_POST["productID"];
    $quantity = $_POST["quantity"];

    // Perform the SQL insertion here
    $sql = "INSERT INTO Inventory (inventoryID, supplierID, productID, quantity) VALUES ('$inventoryID', '$supplierID', '$productID', '$quantity')";
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

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="inventoryID">Inventory ID:</label>
        <input type="text" name="inventoryID" required><br>

        <label for="supplierID">Supplier ID:</label>
        <input type="text" name="supplierID" required><br>

        <label for="productID">Product ID:</label>
        <input type="text" name="productID" required><br>

        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" required><br>

        <input type="submit" value="Record Inventory">
    </form>
