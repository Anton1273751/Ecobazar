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
            <a href="http://ecobazar/shopping-cart.php">
                  <img
              class="basket__rectangle"
              src="./src/images/Rectangle.svg"
              alt="#"
            />
            </a>
          
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
          </select >

          <select name="" id="home">
            <option value="home">Home</option>
          </select>
          <select name="Shop" id="shop" onchange="window.location.href = this.value;">
            <option>Shop</option>
            <option value="http://ecobazar/shop.php">Vegetables</option>
            <option value="http://ecobazar/wishlist.php">Wishlist</option>
            <option value="http://ecobazar/checkout.php">Checkout</option>

           
            <option value="http://ecobazar/">Home</option>

            
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
             <?php 
            include "./src/php/clients.php"
        ?>
           </div>
       </div>
      </section>
      <section class = "container video">
        <div class="video__wrapp">
           <video controls  muted loop width ="1320"  class ="video__content" src="./src/video/ECOBAZAR.mp4" poster ="./src/images/video/organic.webp"></video>
           <div class ="video__info">
            <h3 class ="video__title">Video</h3>
            <p class ="video__text">We’re the Best Organic Farm in the World</p>
           </div>          
        </div>
      </section>
      <section class ="container news">
        <h3 class="news__title">Latest News</h3>
        <div class ="news__cards">
            <?php 
        include "./src/php/news.php"
        ?>
        </div>
      </section>
      <section class ="newsletter" >
        <div class="newsletter__line"></div>
        <div class="container">
          <div class="newsletter__wrapp">
            <div class ="newsletter__logo-wrapp">
              <img class ="newsletter__img" src="./src/images/list.svg" alt="#">
              <h3 class="newsletter__logo">Ecobazar</h3>
            </div>
            <div class ="newsletter__info">
              <h3 class ="newsletter__title">Subcribe our Newsletter</h3>
              <p class ="newsletter__text">Pellentesque eu nibh eget mauris congue mattis matti.</p>
            </div>

           <div class="newsletter__mail">
            <input class="newsletter__input" type="text" placeholder ="Your email address"> 
            <button class="newsletter__btn">Subscribe</button>
           </div>
            
          </div>
        </div>
      </section>
    
    </main>
    <footer class="footer">
      <div class ="container">
          <div class ="footer__info">
      <article class ="footer__shopery">
        <h3 class="footer__title">About Shopery</h3>
        <p class ="footer__text">Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna congue nec.</p>
        <div class="footer__contacts contacts">
          <p class ="contacts__phone">(219) 555-0114</p>
          <p class="contacts__text">or</p>
          <p class ="contacts__mail">Proxy@gmail.com</p>
        </div>
      </article>
      <div class ="footer__links links">
       <div class="links__wrapp">
        <h3 class="links__title">My Account</h3>
        <a class ="links__reference" href="#">My Account</a>
        <a class ="links__reference" href="#">Order History</a>
        <a class ="links__reference" href="#">Shoping Cart</a>
        <a class ="links__reference" href="#">Wishlist</a>
        <a class ="links__reference" href="#">Settings</a>
       </div>
       <div class="links__wrapp">
        <h3 class="links__title">Helps</h3>
        <a class ="links__reference" href="#">Contact</a>
        <a class ="links__reference" href="#">Faqs</a>
        <a class ="links__reference" href="#">Terms & Condition</a>
        <a class ="links__reference" href="#">Privacy Policy</a>
      
       </div>
         <div class="links__wrapp">
        <h3 class="links__title">Proxyt</h3>
        <a class ="links__reference" href="#">About</a>
        <a class ="links__reference" href="#">Shop</a>
        <a class ="links__reference" href="#">Product</a>
        <a class ="links__reference" href="#">Products Details</a>
        <a class ="links__reference" href="#">Track Order</a>
       </div>
       <div class ="links__instagram c">
          <h3 class="instagram__title">Instagram</h3>

          <div class="instagram__grid">
          <img src="./src/images/instagram/bell_pepper.png" alt="#">
          <img src="./src/images/instagram/dairy.png" alt="#">
          <img src="./src/images/instagram/greenery.png" alt="#">
          <img src="./src/images/instagram/products.png" alt="#">
          <img src="./src/images/instagram/shelves.png" alt="#">
          <img src="./src/images/instagram/snacks.png" alt="#">
          <img src="./src/images/instagram/stand.png" alt="#">
          <img src="src/images/instagram/vegetables.png" alt="#">

      </div>
         
       </div>
        </div>
        
         </div>
         <div class="footer__line"></div>
         <div class = "footer__bottom bottom">
          <div class= bottom__social-network>
            <div class = "bottom__facebook"><img class = "bottom__facebook-img" src="./src/images/footer/facebook.png" alt="#"></div>
            <img class ="bottom__twitter" src="./src/images/footer/twitter.png" alt="#">
            <img class ="bottom__pinterest" src="./src/images/footer/pinterest.png" alt="#">
            <img class ="bottom__instagram" src="./src/images/footer/instagram.png" alt="#">
          </div>
          <p class="bottom__text">Shopery eCommerce © 2021. All Rights Reserved</p>
          <div class ="bottom__pay">
             <img class ="bottom__img" src="./src/images/footer/pay/Method=ApplePay.png" alt="#">
             <img class ="bottom__img" src="./src/images/footer/pay/Method=Visa.png" alt="#">
             <img class ="bottom__img" src="./src/images/footer/pay/Method=Mastercard.png" alt="#">
             <img class ="bottom__img" src="src/images/footer/pay/Method=Discover.png" alt="#">
             <img class ="bottom__img" src="./src/images/footer/pay/Cart.png" alt="#">




          </div>
         </div>
      </div>
    
         
       
    </footer>
  </body> 
</html>

<script src ="./src/js/basket.js"></script>


