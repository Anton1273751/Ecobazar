<?php

$servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "shop";

  $conn = new mysqli($servername,$username,$password,$dbname);

 if ($conn->connection_error) {
   die("Connection failed".$conn->connection_error);
 }

 $sql = "SELECT * FROM perfomance";

  $result  = $conn->query($sql);


  if ($result->num_rows > 0) {
        echo <<<HTML
         <article class = "performance__article">
          <img src="./src/images/performance/breakfast.jpeg" alt="#">
          <div class ="performance__info">
             <h3 class = "performance__title">100% Fresh 
Cow Milk</h3>
          <p class = "performance__text">Starting at $14.99</p>
          <button class = "performance__btn">Shop Now <img class ="performance__arrow" src="./src/images/performance/green_arrow.svg" alt="#"></button>
          </div>
         
        </article>
             <article class = "performance__article">
             <img src="./src/images/performance/breakfast.jpeg" alt="">
             <div class ="performance__info">
                <h3 class = "performance__title">Drink Sale</h3>
          <p class = "performance__text">Water &
Soft Drink</p>
          <button class = "performance__btn">Shop Now <img class ="performance__arrow" src="./src/images/performance/green_arrow.svg" alt="#"></button>
             </div>
        
        </article>
             <article class = "performance__article">
              <img src="./src/images/performance/breakfast.jpeg" alt="#">
             <div class ="performance__info">
               <h3 class = "performance__title">100% Organic</h3>
          <p class = "performance__text">Quick Breakfast</p>
          <button class = "performance__btn">Shop Now <img class ="performance__arrow" src="./src/images/performance/green_arrow.svg" alt="#"></button>
               </div>
       
        </article>
      
HTML;
    
}






?>