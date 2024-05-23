<?php 

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "shop";

 $conn = new mysqli($servername,$username,$password,$dbname);

 if ($conn->connection_error) {
   die("Connection failed".$conn->connection_error);
 }

 $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 3";

 $result  = $conn->query($sql); //посмотреть как ваыглядит

 if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo <<<HTML
        
         <article class="news__article">
            <img src="{$row['img']}" alt="#">
            <div class ="news__info">
              <h3 class ="news__info-title">{$row["title"]}</h3>
              <p class ="news__info-text">{$row["text"]}</p>
              <button class ="news__btn">Read More <img class ="news__arrow" src="./src/images/performance/green_arrow.svg" alt="#"></button>
            </div>
          </article>
      
HTML;
    }
}


?>

  