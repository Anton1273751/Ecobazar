<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./src/style/index.css" />
    <script defer src ="./src/js/index.js"></script>
    <title>Ecobazar</title>
  </head>
  <body>
    <!--Шапка сайта-->
    <header class="header">
      <div class="container cap">
        <div class="cap__location location">
          <img class="location__img" src="./src/images/Map Pin.svg" alt="#" />
          <p class="location__text">
            Store Location: Lincoln- 344, Illinois, Chicago, USA
          </p>
        </div>
        <div class="cap__authorization authorization">
          <select class="select" name="translation" id="language">
            <option class="select__text" value="Eng">Eng</option>
            <option class="select__text" value="Rus">Rus</option>
          </select>
          <select class="select" name="currency" id="magnitude">
            <option class="select__text" value="">USD</option>
            <option class="select__text" value="Rus">EUR</option>
          </select>
          <div class="authorization__link link">
            <a class="link__in" href="#">Sign In</a>
            <div class="link__line">/</div>
            <a class="link__up" href="#">Sign Up</a>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section class="container сompany-logo">
        <div class="logo">
          <div class="logo__items">
            <img class="logo__img" src="./src/images/list.svg" alt="#" />
            <h1 class="logo__text">Ecobazar</h1>
          </div>
        </div>
        <div class="input">
          <input class="input__search" type="text" placeholder="Search" />
          <button class="input__btn">Search</button>
        </div>
        <div class="basket">
          <img class="basket__heart" src="./src/images/heart.svg" alt="#" />
          <!-- <div class="basket__line"></div> -->
          <div class="basket__card">
            <img
              class="basket__rectangle"
              src="./src/images/Rectangle.svg"
              alt="#"
            />
            <div class="basket__counter">5</div>
            <div class="basket__info">
              <p class="basket__text">Shopping cart:</p>
              <p class="basket__currency">$57.00</p>
            </div>
          </div>
        </div>
      </section>
      <section class="container navigation">
        <nav class="nav">
          <select name="" id="category">
            <option value="">All Category</option>
          </select>

          <select name="" id="home">
            <option value="home">Home</option>
          </select>
          <select name="" id="shop">
            <option value="shop">Shop</option>
          </select>
          <select name="" id="pages">
            <option value="pages">Pages</option>
          </select>
          <select name="" id="blog">
            <option value="blog">Blog</option>
          </select>
          <a class="nav__link" href="#">About Us</a>
          <a class="nav__link" href="#">Contact Us</a>
        </nav>
        <div class="nav__phone phone">
          <img class="phone__img" src="./src/images/phone.svg" alt="#" />
          <p class="phone__num">(219) 555-0114</p>
        </div>
      </section>
      <section class="container slider">
        <div class="slider__left">
          <img src="./src/images/Group.png" alt="#" />
        </div>
        <div class="slider__right"></div>

        <img class="slider__img" src="./src/images/fructs.webp" alt="#" />
        <div class="slider__discount discount">
          <p class="discount__percent">70%</p>
          <p class="discount__text">off</p>
        </div>
        <article class="slider__info card">
          <p class="card__greetings">Welcome to shopery</p>
          <h3 class="card__title">Fresh& Healthy Organic Food</h3>
          <p class="card__deliver">
            Free shipping on all your order. we deliver, you enjoy
          </p>
          <button class="card__btn">
            Shop now
            <img class="card__img" src="./src/images/rigth_btn.png" alt="#" />
          </button>
        </article>
        <div class="slider__right">
          <img src="./src/images/rigth.png" alt="#" />
        </div>
        <div class="slider__right"></div>
      </section>

      <section class="container advice">
        <div class = "advice__wrapper">
           <?php 
        include "./src/php/advice.php"
        ?>
        </div>
   
      </section>

      <section class="product">
        <div class ="container">
          <h3 class = "product__title">Introducing Our Products</h3>
        <div class ="product__link link">
          <a  class ="link__ref" href="#">All</a>
          <a class ="link__ref" href="#">Vegetable</a>
          <a class ="link__ref"href="#">Fruit</a>
          <a class ="link__ref" href="#">Meat & Fish</a>
          <a  class ="link__ref"href="#">View All</a>
        </div>
        <div class ="product__wrapp">
        <?php 
        include "./src/php/get_products.php"
        ?>
       </div>
        </div>       
      
      </section>
      <section class = "container performance">
       
          <?php 
        include "./src/php/perfomance.php"
        ?>
      </section>
      <section class = "best-deals">
        <div class ="container deal">
          <img class ="deal__img-product" src="./src/images/deals/vegetables.webp" alt="#">
          <article class = "deal__card">
            <h3 class ="deal__title" >Best Deals</h3>
            <p class ="deal__text">Our Special Products Deal of the Month</p>
            <div class ="deal__timer timer">
              <div class ="timer__wrap">
                <p class = "timer__days">00</p>
                <p class ="timer__text">Days</p>
              </div>
               <div class ="timer__wrap">
                <p class = "timer__hours"></p>
                <p class ="timer__text">Hours</p>
              </div>
               <div class ="timer__wrap">
                <p class = "timer__minuts"></p>
                <p class ="timer__text">Mins</p>
              </div>
               <div class ="timer__wrap">
                <p class = "timer__second"></p>
                <p class ="timer__text">Secs</p>
              </div>
            </div>
            <button class="deal__card-btn">Shop now <img class = "deal__arrow" src="./src/images/rigth_btn.png" alt="#"></button>
          </article>
          <img class ="deal__img-salerman" src="./src/images/deals/Image3.webp" alt="#">

          
        </div>

      </section>
      <section class ="container future-products">
        <h3 class = 'future-products__headline'>Featured Products</h3>
        <div class = "future-products__card-wrapp">
            <?php 
        include "./src/php/future-products.php"
        ?>
        </div>
      </section>
      <section class ="clients">
        <div class ="container">
          <h3 class ="clients__title">What our Clients Says</h3>
          <div class = "clients__cards ">
            <article class = "clients__article">
              <div class = "clients__review">
                <svg width="40.000000" height="32.000000" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<desc>
			Created with Pixso.
	</desc>
	<defs/>
	<path id="Vector" d="M29.77 0C25.54 0 22.1 3.27 22.1 7.3C22.1 11.33 25.54 14.6 29.77 14.6C37.05 14.6 32.83 27.28 23.66 28.6C23.23 28.66 22.83 28.87 22.55 29.17C22.26 29.48 22.1 29.87 22.1 30.28C22.1 31.31 23.1 32.13 24.21 31.98C40.89 29.64 46.81 0 29.77 0L29.77 0ZM7.67 0C3.43 0 0 3.26 0 7.3C0 11.33 3.43 14.6 7.67 14.6C14.94 14.6 10.73 27.28 1.55 28.6C1.12 28.66 0.73 28.87 0.44 29.17C0.15 29.48 0 29.87 0 30.27C0 31.31 1 32.13 2.1 31.97C18.78 29.64 24.71 0 7.67 0Z" fill="#00B307" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg>
           <p class ="clients__text">“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
              </div>
              
            <div class ="clients__human human">
             <img class ="human__img" src="./src/images/clients/jenny.png" alt="#">
             <h3 class ="human__name">Jenny Wilson</h3>
             <p class ="human__customer">Customer</p>
            </div>
            </article>
             <article class = "clients__article">
              <div class = "clients__review">
                <svg width="40.000000" height="32.000000" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<desc>
			Created with Pixso.
	</desc>
	<defs/>
	<path id="Vector" d="M29.77 0C25.54 0 22.1 3.27 22.1 7.3C22.1 11.33 25.54 14.6 29.77 14.6C37.05 14.6 32.83 27.28 23.66 28.6C23.23 28.66 22.83 28.87 22.55 29.17C22.26 29.48 22.1 29.87 22.1 30.28C22.1 31.31 23.1 32.13 24.21 31.98C40.89 29.64 46.81 0 29.77 0L29.77 0ZM7.67 0C3.43 0 0 3.26 0 7.3C0 11.33 3.43 14.6 7.67 14.6C14.94 14.6 10.73 27.28 1.55 28.6C1.12 28.66 0.73 28.87 0.44 29.17C0.15 29.48 0 29.87 0 30.27C0 31.31 1 32.13 2.1 31.97C18.78 29.64 24.71 0 7.67 0Z" fill="#00B307" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg>
           <p class ="clients__text">“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
              </div>
              
            <div class ="clients__human human">
             <img class ="human__img" src="./src/images/clients/jenny.png" alt="#">
             <h3 class ="human__name">Jenny Wilson</h3>
             <p class ="human__customer">Customer</p>
            </div>
            </article>
             <article class = "clients__article">
              <div class = "clients__review">
                <svg width="40.000000" height="32.000000" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<desc>
			Created with Pixso.
	</desc>
	<defs/>
	<path id="Vector" d="M29.77 0C25.54 0 22.1 3.27 22.1 7.3C22.1 11.33 25.54 14.6 29.77 14.6C37.05 14.6 32.83 27.28 23.66 28.6C23.23 28.66 22.83 28.87 22.55 29.17C22.26 29.48 22.1 29.87 22.1 30.28C22.1 31.31 23.1 32.13 24.21 31.98C40.89 29.64 46.81 0 29.77 0L29.77 0ZM7.67 0C3.43 0 0 3.26 0 7.3C0 11.33 3.43 14.6 7.67 14.6C14.94 14.6 10.73 27.28 1.55 28.6C1.12 28.66 0.73 28.87 0.44 29.17C0.15 29.48 0 29.87 0 30.27C0 31.31 1 32.13 2.1 31.97C18.78 29.64 24.71 0 7.67 0Z" fill="#00B307" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg>
           <p class ="clients__text">“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
              </div>
              
            <div class ="clients__human human">
             <img class ="human__img" src="./src/images/clients/jenny.png" alt="#">
             <h3 class ="human__name">Jenny Wilson</h3>
             <p class ="human__customer">Customer</p>
            </div>
            </article>
          
          </div>
        </div>
      </section>
    </main>
    <footer></footer>
  </body>
</html>
