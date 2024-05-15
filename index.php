<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./src/style/index.css" />
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
    <?php 
        include "./src/php/advice.php"
        ?>
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
    </main>
    <footer></footer>
  </body>
</html>
