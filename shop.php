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

          <select name="" id="home">
            <option value="home">Home</option>
          </select>
          <select name="Shop" id="shop" onchange="window.location.href = this.value;">
            <option>Shop</option>
            <option value="http://ecobazar/shop.php">Vegetables</option>
            <option value="http://ecobazar/wishlist.php">Wishlist</option>
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
          <div class ="shop__wrapp">
          <div class ="shop__categories categories">
            <div class="categories__all">
              <ul>
                <button class ="categories__title">All Categories <img class="categories__img" src="./src/images/shop/categories/arrow-top.png" alt="#"></button>
                <div class ="categories__input-wrapp">
                <div class="categories__radio">
                <input class = "categories__input" type="radio" name ="example">
                <li class="categories__text">Fresh Fruit (25)</li>
                </div>
                <div class="categories__radio">
                <input class = "categories__input" type="radio" name ="example">
                <li class="categories__text">Vegetables</li>
                </div>
                 <div class="categories__radio">
                <input class = "categories__input" type="radio" name ="example">
                <li class="categories__text">Cooking</li>
                </div>
                <div class="categories__radio">
                <input class = "categories__input" type="radio" name ="example">
                <li class="categories__text">Snacks</li>
                </div>
                 <div class="categories__radio">
                <input class = "categories__input" type="radio" name ="example">
                <li class="categories__text">Beverages</li>
                </div>
                <div class="categories__radio">
                <input class = "categories__input" type="radio" name ="example">
                <li class="categories__text">Beauty & Health</li>
                </div>
                <div class="categories__radio">
                <input class = "categories__input" type="radio" name ="example">
                <li class="categories__text">Bread & Bakery</li>
                </div>
                 </div>
            
              </ul>
            </div>
            <div class="shop__price price">              
              <button class="price__title">Price <img class="price__img" src="./src/images/shop/categories/arrow-top.png" alt="#"></button>
              <div class= "price__wrapp">
              <input class ="price__range" type="range" name="" id="">
              <p class="price__text">Price: 50 — 1,500</p>
              </div>             
            </div>

            <div class = "shop__rating rating">
              <button class ="rating__title">Rating<img class="rating__img" src="./src/images/shop/categories/arrow-top.png" alt="#"></button>
              <div class ="rating__container">
                 <div class = "rating__wrapp">
                <input class="rating__checkbox" type="checkbox">
                 <div class="rating__star-wrapp">
                    <img  class = "rating__star"src="./src/images/shop/rating/active-star.png" alt="#">
                    <img class = "rating__star" src="./src/images/shop/rating/active-star.png" alt="#">
                    <img class = "rating__star" src="./src/images/shop/rating/active-star.png" alt="#">
                    <img  class = "rating__star"src="./src/images/shop/rating/active-star.png" alt="#">
                    <img  class = "rating__star"src="./src/images/shop/rating/active-star.png" alt="#">
                </div>   
                <p class ="rating__number">5.0</p>               
              </div>
              <div class = "rating__wrapp">
                <input class="rating__checkbox" type="checkbox">
                 <div class="rating__star-wrapp">
                    <img  class = "rating__star"src="./src/images/shop/rating/active-star.png" alt="#">
                    <img class = "rating__star" src="./src/images/shop/rating/active-star.png" alt="#">
                    <img class = "rating__star" src="./src/images/shop/rating/active-star.png" alt="#">
                    <img  class = "rating__star"src="./src/images/shop/rating/active-star.png" alt="#">
                    <img  class = "rating__star"src="./src/images/star.svg" alt="#">
                </div>    
                <p class ="rating__number">4.0 & up</p>              
              </div>
              <div class = "rating__wrapp">
                <input class="rating__checkbox" type="checkbox">
                 <div class="rating__star-wrapp">
                    <img  class = "rating__star"src="./src/images/shop/rating/active-star.png" alt="#">
                    <img class = "rating__star" src="./src/images/shop/rating/active-star.png" alt="#">
                    <img class = "rating__star" src="./src/images/shop/rating/active-star.png" alt="#">
                    <img  class = "rating__star"src="./src/images/star.svg" alt="#">
                    <img  class = "rating__star"src="./src/images/star.svg" alt="#">
                </div>
                <p class ="rating__number">3.0 & up</p>                  
              </div>
              <div class = "rating__wrapp">
                <input class="rating__checkbox" type="checkbox">
                 <div class="rating__star-wrapp">
                    <img  class = "rating__star"src="./src/images/shop/rating/active-star.png" alt="#">
                    <img class = "rating__star" src="./src/images/shop/rating/active-star.png" alt="#">
                    <img class = "rating__star" src="./src/images/star.svg" alt="#">
                    <img  class = "rating__star"src="./src/images/star.svg" alt="#">
                    <img  class = "rating__star"src="./src/images/star.svg" alt="#">
                </div> 
                <p class ="rating__number">2.0 & up</p>                 
              </div>
              <div class = "rating__wrapp">
                <input class="rating__checkbox" type="checkbox">
                 <div class="rating__star-wrapp">
                    <img  class = "rating__star"src="./src/images/shop/rating/active-star.png" alt="#">
                    <img class = "rating__star" src="./src/images/star.svg" alt="#">
                    <img class = "rating__star" src="./src/images/star.svg" alt="#">
                    <img  class = "rating__star"src="./src/images/star.svg" alt="#">
                    <img  class = "rating__star"src="./src/images/star.svg" alt="#">
                </div> 
                <p class ="rating__number">1.0 & up</p>              
              </div>
              </div>
             
            </div>
            <div class = "shop__popular popular ">
              <button class="popular__title">Popular Tag <img class="popular__img" src="./src/images/shop/categories/arrow-top.png" alt="#"></button>
              <div class="popular__wrapp">
                <p class=" popular__text">Healthy</p>
                <p class=" popular__text">Low fat</p>
                <p class=" popular__text">Vegetarian</p>
                <p class=" popular__text">Kid foods</p>
                <p class=" popular__text">Vitamins</p>
                <p class=" popular__text">Bread</p>
                <p class=" popular__text">Meat</p>
                <p class=" popular__text">Snacks</p>
                <p class=" popular__text">Tiffin</p>
                <p class=" popular__text">Launch</p>
                <p class=" popular__text">Dinner</p>
                <p class=" popular__text">Breackfast</p>
                <p class=" popular__text">Fruit</p>
              </div>
            </div>
            <div class ="popular__discount"></div>
            <div class="popualar__sale sale">
              <h3 class="sale__title">Sale Products</h3>
              <div class="sale__wrapp">
                <article class="sale__article">
                   <div class="sale__img-wrap"> 
                    <img class="sale__img" src="./src/images/shop/sale/red-bolgar.png" alt="#">
                   </div>                 
                  <div class="sale__info">
                    <p class="sale__text">Red Capsicum</p>
                    <p class="sale__price">$32.00</p>
                    <div class="sale__star-wrapp">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/deactive-star.png" alt="#">
                    </div>
                  </div>
                </article>
                   <article class="sale__article">
                    <div class="sale__img-wrap">
                  <img class="sale__img" src="./src/images/shop/sale/mango.png" alt="#">                    
                    </div>
                  <div class="sale__info">
                    <p class="sale__text">Chanise Cabbage</p>
                    <p class="sale__price">$24.00</p>
                    <div class="sale__star-wrapp">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/deactive-star.png" alt="#">
                    </div>
                  </div>
                </article>
                   <article class="sale__article">
                    <div class="sale__img-wrap">
                        <img class="sale__img" src="./src/images/shop/sale/green-bolgar.png" alt="#">
                       </div>               
                  <div class="sale__info">
                    <p class="sale__text">Green Capsicum</p>
                    <p class="sale__price">$32.00</p>
                    <div class="sale__star-wrapp">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/active-star.png" alt="#">
                      <img src="./src/images/shop/sale/deactive-star.png" alt="#">
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
           <div class ="shop__products">
            <?php 
              include "./src/php/shop-products.php"
            ?>
          </div>

          </div>
           
          <div class="shop__pagination pagination">
            <div class="pagination__wrapp">
              <button class ="pagination__btn">
              <img class="pagination__img" src="./src/images/shop/social/arrow-left.png" alt="">
              </button>
              <button>
              <img class ="pagination__img" src="./src/images/shop/social/arrow-right.png" alt="">
              </button>

            </div>
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