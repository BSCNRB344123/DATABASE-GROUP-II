

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

// Database connection
    $conn = new mysqli('localhost','root','','classasignment');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi",  $customerID, $name, $contact);
        $execval = $stmt->execute();
        echo $execval;
        echo "Registration successfully...";
        $stmt->close();
        $conn->close();
    }

?>
