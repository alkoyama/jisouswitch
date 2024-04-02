<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $itemA = $_POST['itemA'];
    $itemB = $_POST['itemB'];

    // Database connection (replace database credentials with your own)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "akemishop";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);


    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert order data into the database
    $sql = "INSERT INTO customers (name, address, itemA, itemB) 
            VALUES ('$name', '$address', '$itemA', '$itemB')";

if ($conn->query($sql) === TRUE) {
    echo "送信完了 <br><br>";
    echo "<a href='index.php'>ショップに戻る</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    // Close database connection
    $conn->close();
}
?>