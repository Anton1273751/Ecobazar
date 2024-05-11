<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "shop";
 $conn = new mysqli($servername,$username,$password,$dbname);

 if ($conn->connection_error) {
   die("Connection failed".$conn->connection_error);
 }

 $sql = "SELECT * FROM advice";

 $result  = $conn->query($sql);

 if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo <<<HTML
        <article class="advice__article">
          <div class = "advice__img-wrap">
          <img class="advice__img" src="{$row['img']}" alt="#" />
          </div>
          <h3 class="advice__title">{$row["title"]}</h3>
          <p class="advice__text">{$row["text"]}</p>
        </article>
HTML;
    }
}


?>