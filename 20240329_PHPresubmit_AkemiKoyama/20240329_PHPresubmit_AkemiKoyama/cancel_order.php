<?php
    // Database connection (replace database credentials with your own)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "akemishop";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);


// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];

    // SQL query to delete the order
    $sql = "DELETE FROM customers WHERE id = $order_id";

    if ($conn->query($sql) === TRUE) {
        echo "注文を削除しました。 <br><br>";
        echo "<a href='orders.php'>従業員ページに戻る</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
