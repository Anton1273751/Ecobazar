<?php 

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "shop";

 $conn = new mysqli($servername,$username,$password,$dbname);

 if ($conn->connection_error) {
   die("Connection failed".$conn->connection_error);
 }

 $sql = "SELECT * FROM clients ORDER BY id DESC LIMIT 3";

 $result  = $conn->query($sql); //посмотреть как ваыглядит



 if ($result->num_rows >0) {
    while ($row = $result->fetch_assoc()) {
        echo <<<HTML
        <article class = "clients__article">
              <div class = "clients__review">
                <svg width="40.000000" height="32.000000" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<desc>
			Created with Pixso.
	</desc>
	<defs/>
	<path id="Vector" d="M29.77 0C25.54 0 22.1 3.27 22.1 7.3C22.1 11.33 25.54 14.6 29.77 14.6C37.05 14.6 32.83 27.28 23.66 28.6C23.23 28.66 22.83 28.87 22.55 29.17C22.26 29.48 22.1 29.87 22.1 30.28C22.1 31.31 23.1 32.13 24.21 31.98C40.89 29.64 46.81 0 29.77 0L29.77 0ZM7.67 0C3.43 0 0 3.26 0 7.3C0 11.33 3.43 14.6 7.67 14.6C14.94 14.6 10.73 27.28 1.55 28.6C1.12 28.66 0.73 28.87 0.44 29.17C0.15 29.48 0 29.87 0 30.27C0 31.31 1 32.13 2.1 31.97C18.78 29.64 24.71 0 7.67 0Z" fill="#00B307" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg>
           <p class ="clients__text">{$row["text"]}</p>
              </div>
              
            <div class ="clients__human human">
             <img class ="human__img" src="{$row['img']}" alt="#">
             <h3 class ="human__name">{$row["name"]}</h3>
             <p class ="human__customer">Customer</p>
            </div>
            </article>
      
HTML;
    }
}


?>

  