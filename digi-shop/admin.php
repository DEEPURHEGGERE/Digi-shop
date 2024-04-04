<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deepu Computer Center ADMIN PANNEL</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <ion-icon name="logo-facebook"></ion-icon> Deepu Computer Center ADMIN PANNEL </a>

    <nav class="navbar">
        <a href="useradd.php">modify users</a>
        <a href="#features">manage order</a>
        <a href="insertproduct.php">update products</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
        <!-- <a href="#blogs">blogs</a> -->
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

  

    <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="create.html">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Xerox, <span> Print </span>and Webdesign & development </h3>
        <p>Web design and graphic design</p>
        <a href="#" class="btn">shop now</a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>Services</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/computer.png" alt="">
            <h3>Internet browsing,Webdesign</h3>
            <p>Website design and development, Graphic Design ,Sildemaking ,etc.</p>
            <a href="#categories" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/xerox.png" alt="">
            <h3>Photocopy</h3>
            <p>Photocopy include both black and white and colour Photocopy</p>
            <a href="#categories" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/laminator.jpg" alt="">
            <h3> Lamination</h3>
            <p>Make sure that your records are secure!</p>
            <a href="#categories" class="btn">read more</a>
        </div>
        <div class="box">
            <img src="image/stationary.jpg" alt="">
            <h3> stationary</h3>
            <p>Buy n stationary products</p>
            <a href="#categories" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/book (5).jpg" alt="">
                <h3>pencil,sharpnerbox,eraser</h3>
                <div class="price">Rs 50 per box</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/book (4).jpg" alt="">
                <h3>glass sheets</h3>
                <div class="price">Rs 20 per pack</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/book (5).webp" alt="">
                <h3>graphbook</h3>
                <div class="price">Rs 18 per book</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/book (3).webp" alt="">
                <h3>Binding Sheets</h3>
                <div class="price">Rs 30 per Meter & Rs 10 per Sheet</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/book (3).jpg" alt="">
                <h3>fevisticks</h3>
                <div class="price">Rs 100 per pack</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/book.jpg" alt="">
                <h3>Books</h3>
                <div class="price">@ Resonable price</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">more</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/book (1).webp" alt="">
                <h3>A4 Sheets</h3>
                <div class="price">Rs 250/- per bundle</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/book (4).webp" alt="">
                <h3>Pens</h3>
                <div class="price">@Resonable price</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">more</a>
            </div>

        </div>

    </div>


</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/photocopy.jfif" alt="">
            <h3>Photocopy</h3>
            <p>upto 45% off</p>
            <a href="index2.html" class="btn">place order</a>
        </div>

        <div class="box">
            <img src="image/design.png" alt="">
            <h3>Design and development</h3>
            <p>upto 30% off</p>
            <a href="index3.html" class="btn">place order</a>
        </div>

        <div class="box">
            <img src="image/stationary.jpg" alt="">
            <h3>stationary products</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">place order</a>
        </div>

        <div class="box">
            <img src="image/laminator.jpg" alt="">
            <h3>Lamination</h3>
            <p>upto 55% off</p>
            <a href="#" class="btn">place order</a>
        </div>

    </div>

</section>

<!-- categories section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/rangappa.png" alt="">
                <p>Satisfied with the Services</p>
                <h3>Rangappa G Heggere</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/kemparajamma.png" alt="">
                <p>good print quality</p>
                <h3>Kemparajamma E</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/thanushree.png" alt="">
                <p>it would be good if more stationary is available</p>
                <h3>Thanushree S</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

          

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<!-- <section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/blog-1.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/blog-2.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/blog-3.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section> -->

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Deepu Computer Center </h3>
            <p>1st mian Swamy Vivekananda Bavavane near BIET Davangere</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +91-7619449101 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +91-8971311839 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> deepurh24@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Karnataka, india - 577004 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <!-- <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a> -->
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span>d.designers </span> | all rights reserved </div>

</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>