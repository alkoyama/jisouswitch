<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>従業員ページ</title>
</head>
<body>
<?php
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

// Retrieve orders from the database
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "名前: " . $row["name"]. " - 住所: " . $row["address"]. " - シチュー: " . $row["itemA"]. " - カレー: " . $row["itemB"] . " ";
        echo "<form action='cancel_order.php' method='post' onsubmit='return confirm(\"本当にキャンセルしますか？キャンセルすると顧客情報ごと削除されます。\");'>";
        echo "<input type='hidden' name='order_id' value='" . $row["id"] . "'>";
        echo "<input type='submit' value='キャンセル'>";
        echo "</form>";
        echo "</form>";
        echo "<br>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>
</body>
</html>