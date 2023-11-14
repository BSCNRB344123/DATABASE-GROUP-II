<?php
// Include your database connection code here if not already included
// For example, you might have a separate file with the database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productID = $_POST["productID"];
    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];

    // Perform the SQL insertion here
    $sql = "INSERT INTO Product (productID, name, price) VALUES ('$productID', '$productName', '$productPrice')";
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
        <label for="productID">Product ID:</label>
        <input type="text" name="productID" required><br>

        <label for="productName">Product Name:</label>
        <input type="text" name="productName" required><br>

        <label for="productPrice">Product Price:</label>
        <input type="text" name="productPrice" required><br>

        <input type="submit" value="Add Product">
    </form>

</body>
</html>
This code is similar to the previous examples. It creates an HTML form for adding a new product, and the PHP code processes the form data, executes the SQL insertion, and redirects to a success page if the operation is successful.

Make sure to customize the form fields and SQL query according to your database structure and requirements.





