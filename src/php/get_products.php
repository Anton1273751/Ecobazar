<?php 

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "shop";

 $conn = new mysqli($servername,$username,$password,$dbname);

 if ($conn->connection_error) {
   die("Connection failed".$conn->connection_error);
 }

 $sql = "SELECT * FROM products";

 $result  = $conn->query($sql); //посмотреть как ваыглядит

 if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo <<<HTML
         <article class="product__article article">
            <div class ="article__img-wrap">
                <img class ="article__img" src="{$row['image']}" alt="#">
            </div>          
            <div class="article__info">
                <h3 class="article__title">{$row["name"]}</h3>
                <p class="article__price">{$row["price"]}</p>
                <div class="article__star">
                    <img src="./src/images/star.svg" alt="#">
                    <img src="./src/images/star.svg" alt="#">
                    <img src="./src/images/star.svg" alt="#">
                    <img src="./src/images/star.svg" alt="#">
                    <img src="./src/images/star.svg" alt="#">
                </div>
            </div>
        </article>
      
HTML;
    }
}


?>

  