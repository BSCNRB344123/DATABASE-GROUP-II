<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

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

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="customerID">Customer ID:</label>
        <input type="text" name="customerID" required><br>

        <label for="newContact">New Contact:</label>
        <input type="text" name="newContact" required><br>

        <input type="submit" value="Update Customer Contact">
    </form>

</body>
</html>
