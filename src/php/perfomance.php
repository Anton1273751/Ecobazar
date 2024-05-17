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
         <article class = "performance__article milk"> 
          <div class ="milk__info">
             <h3 class = "milk__title">100% Fresh 
Cow Milk</h3>
          <p class = "milk__text">Starting at $14.99</p>
          <button class = "performance__btn">Shop Now <img class ="performance__arrow" src="./src/images/performance/green_arrow.svg" alt="#"></button>
          </div>
         
        </article>
             <article class = "performance__article cola">
             
             <div class ="cola__info">
                <h3 class = "cola__title">Drink Sale</h3>
          <p class = "cola__text">Water &
Soft Drink</p>
          <button class = "performance__btn">Shop Now <img class ="performance__arrow" src="./src/images/performance/green_arrow.svg" alt="#"></button>
             </div>
        
        </article>
             <article class = "performance__article">
              
             <div class ="performance__info">
               <h3 class = "performance__title">100% Organic</h3>
          <p class = "performance__text">Quick Breakfast</p>
          <button class = "performance__btn">Shop Now <img class ="performance__arrow" src="./src/images/performance/green_arrow.svg" alt="#"></button>
               </div>
       
        </article>
      
HTML;
    
}






?>