<?php 

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "shop";

 $conn = new mysqli($servername,$username,$password,$dbname);

 if ($conn->connection_error) {
   die("Connection failed".$conn->connection_error);
 }

 $sql = "SELECT * FROM cart INNER JOIN products ON cart.product_id = products.id";

 $result  = $conn->query($sql); //посмотреть как ваыглядит

 if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo <<<HTML
             <article class ="shopping-cart__article">
            <div class ="shopping-cart__info">
              <img class ="shopping-cart__img" src="{$row['image']}" alt="#">
              <h3 class="shopping-cart__description">{$row["name"]}</h3>
            </div>
            <p class ="shopping-cart__price">{$row["price"]}</p>
            <div class="shopping-cart__wrapp-quantity">
              <img class="shopping-cart__minus" src="./src/images/shoping-cart/minus.png" alt="#">
              <p class="shopping-cart__count">{$row["quantity"]}</p>
              <img class="shopping-cart__plus" src="./src/images/shoping-cart/plus.png" alt="#">
            </div>
            <p class="shopping-cart__subtotal">$70.00</p>
            <img class="shopping-cart__close" src="./src/images/shoping-cart/close.png" alt="#">
          </article>      
HTML;
    }
     $conn -> close();
}


?>