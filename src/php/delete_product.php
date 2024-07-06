<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true); ///?

// echo $data;

if (isset($data['product_id'])) {
    $product_id = $data['product_id'];
    $sql = "DELETE FROM cart WHERE product_id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
    
    $stmt->close();
} else {
    echo json_encode(["success" => false]);
}

$conn->close();
?>
