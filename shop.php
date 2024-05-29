<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="./src/style/index.css" />
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

      <section class= "breadcrumbs"></section>
      
      <section class ="filter-products">
        <div class ="container">
            <div class ="filter">
             <button class="filter__btn">Filter <img class ="filter__img" src="./src/images/shop/filter/Filter.png" alt="#"></button>
             <div class= "filter__sort">
                <p class ="filter__text">Sort by:</p>
                <select class ="filter__select" name="">
                    <option value="">Latest</option>
                    <option value="">First</option>
                </select>
             </div>
             <div class="filter__result">
                    <p class="filter__count">52</p>
                    <p class ="filter__text">Results Found</p>
                </div>
            </div>
        </div>
      </section>
      <section class ="shop">
        <div class="container">
          <div class ="shop__categories categories">

          </div>
          <div class ="shop__products">
            <?php 
              include "./src/php/shop-products.php"
            ?>
             
          </div>
          <div class="shop__pagination pagination">
            <div class="pagination__wrapp">
              <button class ="pagination__btn">
              <img class="pagination__img" src="./src/images/shop/social/arrow-left.png" alt="">
              </button>
              <button class ="pagination__btn">
              <img class ="pagination__img" src="./src/images/shop/social/arrow-right.png" alt="">
              </button>

            </div>
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