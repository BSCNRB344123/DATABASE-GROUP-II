<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Customer</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerID = $_POST["customerID"];
    $name = $_POST["name"];
    $contact = $_POST["contact"];

    // Perform the SQL insertion here
    $sql = "INSERT INTO Customer (customerID, name, contact) VALUES ('$customerID', '$name', '$contact')";
    // Execute the SQL query using your preferred database connection method

    // Redirect back to the form or a success page
    header("Location: your_success_page.php");
    exit();
}
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="customerID">Customer ID:</label>
        <input type="text" name="customerID" required><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="contact">Contact:</label>
        <input type="text" name="contact" required><br>

        <input type="submit" value="Insert Customer">
    </form>

</body>
</html>