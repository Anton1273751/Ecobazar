<?php 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "shop";

 $conn = new mysqli($servername,$username,$password,$dbname);

 if ($conn -> connection_error) {
   die("Connection failed".$conn->connection_error);
 }

 if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["id"])) {
    $product_id = intval($_POST['id']);
    $user_id = 1;

    $sql = "INSERT INTO cart(user_id, product_id) VALUES (?,?)";/// посмотреть
    $stmt = $conn->prepare($sql);
    $stmt -> bind_param("ii", $user_id, $product_id);

    if ($stmt -> execute()) {
       echo "Товар добавлен в корзину";
    } else{
        echo "Ошибка!".$conn -> error;
    }

    $stmt -> close();
 }

 $conn -> close();

?>