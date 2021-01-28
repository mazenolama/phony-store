<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

  <link rel="shortcut icon" href="{{asset('images/favicon.ico" type="image/x-icon')}}" />


  <!-- Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">

  <title>Phone Shop</title>
</head>

<body>

  <!-- Header -->
  @include('includes.admin-header-home')
  <!-- End Header -->

  <!-- Main -->
  <main id="main">
    <div class="container">
      <!-- Collection -->
      <section id="collection" class="section collection">
        <div class="collection__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="collection__box">
            <div class="img__container">
              <img class="collection_02" src="{{asset('images/collection_02.png')}}" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>New Colors Introduced</span>
                <h1>HEADPHONES</h1>
                <a href="#latest">SHOP NOW</a>
              </div>
            </div>
          </div>
          <div class="collection__box">
            <div class="img__container">
              <img class="collection_01" src="{{asset('images/collection_01.png')}}" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>Phone Device Presets</span>
                <h1>SMARTPHONES</h1>
                <a href="#latest">SHOP NOW</a>
              </div>
            </div>
          </div>
      </section>

      <!-- Latest Products -->
      <section class="section latest__products" id="latest">
        <div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <span class="dot"></span>
            <h1 class="primary__title">Latest Products</h1>
          </div>
        </div>

        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">

              <ul class="glide__slides latest-center">
               
                  <div class="product">
                    <div class="product__header">
                      <img src="images/products/iPhone/iphone1.jpeg" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone XR</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$550</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    
                  </div>
                </li>
              </ul>

            </div>
            <!--Arrows-->
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg>
                  <use xlink:href="{{asset('images/sprite.svg#icon-arrow-left2')}}"></use>
                </svg>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                  <use xlink:href="{{asset('images/sprite.svg#icon-arrow-right2')}}"></use>
                </svg>
              </button>
            </div>
            <!--Arrows-->
          </div>
        </div>
      </section>

      <section class="category__section section" id="category">
        
        <div class="tab__list">
          <div class="title__container tabs">
            
            <div class="section__titles category__titles ">
              <div class="section__title filter-btn active" data-id="All Products">
                <span class="dot"></span>
                <h1 class="primary__title">All Products</h1>
              </div>
            </div>
            
            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Trending Products">
                <span class="dot"></span>
                <h1 class="primary__title">Trending Products</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Special Products">
                <span class="dot"></span>
                <h1 class="primary__title">Special Products</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Featured Products">
                <span class="dot"></span>
                <h1 class="primary__title">Featured Products</h1>
              </div>
            </div>

          </div>
          <!-- Product Item -->
          @include('product_item')
          <!--End Product Item -->

        </div>
        
      

        </div>
      </section>

    <!-- Facility Section -->
    @include('includes.Facility-Section')
    </div>

    <!-- Testimonial Section -->
    @include('includes.home.Testimonial-Section')

    <!--New Section  -->
    @include('includes.home.New-Section')

    <!-- NewsLetter -->
    @include('includes.home.NewsLetter')

  </main>

  <!-- End Main -->

  <!-- Footer -->
  @include('includes.footer')
  <!-- End Footer -->


  <!-- Go To -->

  <a href="#header" class="goto-top scroll-link">
    <svg>
      <use xlink:href="{{asset('images/sprite.svg#icon-arrow-up')}}"></use>
    </svg>
  </a>


  <!-- Glide Carousel Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <!-- Animate On Scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Custom JavaScript -->
  <script src="{{asset('js/products.js')}}"></script>
  <script src="{{asset('js/index.js')}}"></script>
  <script src="{{asset('js/slider.js')}}"></script>

</body>

</html>