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
                <div class = "article__basket">
                   <svg class ="article__svg" width="18.000000" height="18.000000" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<desc>
			Created with Pixso.
	</desc>
	<defs/>
	<path id="Rectangle" d="M25.75 26.25L0.25 26.25L3.08 10.66L7.33 10.66L18.66 10.66L22.91 10.66L25.75 26.25ZM7.33 10.66L7.33 6.41C7.33 3.28 9.87 0.75 13 0.75C16.12 0.75 18.66 3.28 18.66 6.41L18.66 10.66M7.33 10.66L7.33 14.91M18.66 10.66L18.66 14.91" stroke="#1A1A1A" stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round" stroke-linecap="round"/>
</svg>

                </div>
                <div class="article__star-wrapp">
                    <img  class = "article__star"src="./src/images/star.svg" alt="#">
                    <img class = "article__star" src="./src/images/star.svg" alt="#">
                    <img class = "article__star" src="./src/images/star.svg" alt="#">
                    <img  class = "article__star"src="./src/images/star.svg" alt="#">
                    <img  class = "article__star"src="./src/images/star.svg" alt="#">
                </div>
            </div>
        </article>
      
HTML;
    }
}


?>

  