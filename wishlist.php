<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="./src/style/index.css" />       
       <script defer src = "./src/js/shop.js"></script>
       <script defer src = "./src/js/price-hidden.js"></script>
       <script defer src ="./src/js/rating-hidden.js"></script>
       <script defef src ="./src/js/popular-hidden.js"></script>

    <title>shop</title>
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

          <select name="" id="home">
            <option value="home">Home</option>
          </select>
          <select name="Shop" id="shop" onchange="window.location.href = this.value;">
            <option>Shop</option>
            <option value="http://ecobazar/shop.php">Vegetables</option>
            <option value="https://www.youtube.com/watch?v=T1AMMeQhLEc">YouTube</option>
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

      <section class= "breadcrumbs">
        <div></div>
      </section>
      <section class="wishlist">
        <div class="container">
        <h3 class="wishlist__title">My Wishlist</h3>
        <div class ="wishlist__wrapp">
          <div class="wishlist__cap">
           <p class="wishlist__caption-product">Product</p>
           <p class="wishlist__caption-price">price</p>
           <p class="wishlist__caption-status">Stock Status</p>       
          </div>
          <article class="wishlist__article">
            <div class="wishlist__info">
              <img class="wishlist__img" src="./src/images/product/eggplant.jpeg" alt="#">
              <h3 class="wishlist__description">Green Capsicum</h3>
            </div>
            <p class="wishlist__price">$14.99</p>
            <p class="wishlist__status-good">In Stock</p>
            <div class="wishlist__action">
              <button class="wishlist__btn-add">Add to Cart</button>
              <button class="wishlist__btn-close"><img src="./src/images/wishlist/Close.png" alt="#"></button>
            </div>
          </article>
           <article class="wishlist__article">
            <div class="wishlist__info">
              <img class="wishlist__img" src="./src/images/features_products/cabbage.png" alt="#">
              <h3 class="wishlist__description">Chinese Cabbage</h3>
            </div>
            <p class="wishlist__price">$45.00</p>
            <p class="wishlist__status-good">In Stock</p>
            <div class="wishlist__action">
              <button class="wishlist__btn-add">Add to Cart</button>
              <button class="wishlist__btn-close"><img src="./src/images/wishlist/Close.png" alt="#"></button>
            </div>
          </article>
           <article class="wishlist__article">
            <div class="wishlist__info">
              <img class="wishlist__img" src="./src/images/shop/products/freshmango.png" alt="#">
              <h3 class="wishlist__description">Fresh Sujapuri Mango</h3>
            </div>
            <p class="wishlist__price">$09.00</p>
            <p class="wishlist__status-bad">Out of Stock</p>
            <div class="wishlist__action">
              <button class="wishlist__btn-add">Add to Cart</button>
              <button class="wishlist__btn-close"><img src="./src/images/wishlist/Close.png" alt="#"></button>
            </div>
          </article>
           <article class="wishlist__article">
            <div class="wishlist__info">
              <img class="wishlist__img" src="./src/images/shop/products/freshmango.png" alt="#">
              <h3 class="wishlist__description">Fresh Sujapuri Mango</h3>
            </div>
            <p class="wishlist__price">$09.00</p>
            <p class="wishlist__status-bad">Out of Stock</p>
            <div class="wishlist__action">
              <button class="wishlist__btn-add">Add to Cart</button>
              <button class="wishlist__btn-close"><img src="./src/images/wishlist/Close.png" alt="#"></button>
            </div>
          </article>
           <article class="wishlist__article">
            <div class="wishlist__info">
              <img class="wishlist__img" src="./src/images/shop/products/freshmango.png" alt="#">
              <h3 class="wishlist__description">Fresh Sujapuri Mango</h3>
            </div>
            <p class="wishlist__price">$09.00</p>
            <p class="wishlist__status-bad">Out of Stock</p>
            <div class="wishlist__action">
              <button class="wishlist__btn-add">Add to Cart</button>
              <button class="wishlist__btn-close"><img src="./src/images/wishlist/Close.png" alt="#"></button>
            </div>
          </article>
            <article class="wishlist__article">
            <div class="wishlist__info">
              <img class="wishlist__img" src="./src/images/shop/products/freshmango.png" alt="#">
              <h3 class="wishlist__description">Fresh Sujapuri Mango</h3>
            </div>
            <p class="wishlist__price">$09.00</p>
            <p class="wishlist__status-bad">Out of Stock</p>
            <div class="wishlist__action">
              <button class="wishlist__btn-add">Add to Cart</button>
              <button class="wishlist__btn-close"><img src="./src/images/wishlist/Close.png" alt="#"></button>
            </div>
          </article>
          
          <div class="wishlist__share share">
            <p class="share__text">Share:</p>
            <div class="share__facebook"><img class="share__img" src="./src/images/footer/facebook.png" alt="#"></div>
            <img class="share__twitter" src="./src/images/wishlist/twitter.png" alt="#">
            <img class="share__pinterest" src="./src/images/wishlist/pinterest.png" alt="#">
            <img class="share__instagram" src="./src/images/wishlist/instagramm.png" alt="#">

          </div>
        </div>
        </div>
        
      </section>
      
      <section class="shop-newsletter">
        <div class ="container shop-newsletter__wrapp">
          <div class="shop-description"> 
            <h3 class="shop-description__title">Subcribe our Newsletter</h3>
            <p class="shop-description__text">Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna.</p>
          </div>    
          <div class="shop-input__wrapp">
           <input class="shop-input__input" type="text" placeholder ="Your email address">
           <button class="shop-input__btn">Subscribe</button>
          </div>
          <div class="shop-social">
            <div class="shop-social__fasebook"><img src="./src/images/shop/social/facebook.png" alt="#"></div>
            <img class="shop-social__twitter" src="./src/images/shop/social/twitter.png" alt="#">
            <img class="shop-social__pinterest" src="./src/images/shop/social/pinterest.png" alt="#">
            <img class="shop-social__instagram" src="./src/images/shop/social/instagram.png" alt="#">
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