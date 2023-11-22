<?php
// Include your database connection code here if not already included
// For example, you might have a separate file with the database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productID = $_POST["productID"];

    // Perform the SQL retrieval here
    $sql = "SELECT * FROM SalesOrder WHERE productID = '$productID'";
    // Execute the SQL query using your preferred database connection method

    // Display the results
    // For simplicity, this example assumes you are using PDO for database connection
    try {
        $pdo = new PDO("your_database_connection_details_here");

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Display the results
        echo "<h2>Sales Orders for Product ID: $productID</h2>";
        echo "<pre>";
        print_r($result);
        echo "</pre>";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

