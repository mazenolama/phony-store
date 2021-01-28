<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- Carousel -->
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css" />
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css" />

    <!-- Animate On Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />

    <title>Phone Shop</title>
</head>

<body>
    
    <!-- Header -->
    @include('includes.header')
    <!-- End Header -->

    <main id="main">
        <section class="section cart__area">
            <div class="container">
                <div class="responsive__cart-area">
                    <form class="cart__form">
                        <div class="cart__table table-responsive">
                            <table width="100%" class="table">
                                <thead>
                                    <tr>
                                        <th>PRODUCT</th>
                                        <th>NAME</th>
                                        <th>UNIT PRICE</th>
                                        <th>QUANTITY</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="images/products/iPhone/iphone6.jpeg" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#">Apple iPhone 11</a>
                                            <br><br>
                                            <small>White/6.25</small>
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
                                                <div>
                                                    <span class="minus-btn">
                                                        <svg>
                                                            <use xlink:href="images/sprite.svg#icon-minus"></use>
                                                        </svg>
                                                    </span>
                                                    <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                    <span class="plus-btn">
                                                        <svg>
                                                            <use xlink:href="images/sprite.svg#icon-plus"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg>
                                                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="images/products/sumsung/samsung5.jpeg" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#">Apple iPhone 11</a>
                                            <br><br>
                                            <small>White/6.25</small>
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
                                                <div>
                                                    <span class="minus-btn">
                                                        <svg>
                                                            <use xlink:href="images/sprite.svg#icon-minus"></use>
                                                        </svg>
                                                    </span>
                                                    <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                    <span class="plus-btn">
                                                        <svg>
                                                            <use xlink:href="images/sprite.svg#icon-plus"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg>
                                                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="images/products/sumsung/samsung2.jpeg" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#">Apple iPhone 11</a>
                                            <br><br>
                                            <small>White/6.25</small>
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
                                                <div>
                                                    <span class="minus-btn">
                                                        <svg>
                                                            <use xlink:href="images/sprite.svg#icon-minus"></use>
                                                        </svg>
                                                    </span>
                                                    <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                    <span class="plus-btn">
                                                        <svg>
                                                            <use xlink:href="images/sprite.svg#icon-plus"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg>
                                                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="images/products/iPhone/iphone4.jpeg" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#">Apple iPhone 11</a>
                                            <br><br>
                                            <small>White/6.25</small>
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
                                                <div>
                                                    <span class="minus-btn">
                                                        <svg>
                                                            <use xlink:href="images/sprite.svg#icon-minus"></use>
                                                        </svg>
                                                    </span>
                                                    <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                    <span class="plus-btn">
                                                        <svg>
                                                            <use xlink:href="images/sprite.svg#icon-plus"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg>
                                                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-btns">
                            <div class="continue__shopping">
                                <a href="/">Continue Shopping</a>
                            </div>
                            <div class="check__shipping">
                                <input type="checkbox">
                                <span>Shipping(+7$)</span>
                            </div>
                        </div>

                        <div class="cart__totals">
                            <h3>Cart Totals</h3>
                            <ul>
                                <li>
                                    Subtotal
                                    <span class="new__price">$250.99</span>
                                </li>
                                <li>
                                    Shipping
                                    <span>$0</span>
                                </li>
                                <li>
                                    Total
                                    <span class="new__price">$250.99</span>
                                </li>
                            </ul>
                            <a href="">PROCEED TO CHECKOUT</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Facility Section -->
        @include('includes.Facility-Section')
    </main>

    <!-- Footer -->
        @include('includes.footer')
    <!-- End Footer -->

    <!-- Go To -->

    <a href="#header" class="goto-top scroll-link">
        <svg>
            <use xlink:href="images/sprite.svg#icon-arrow-up"></use>
        </svg>
    </a>

    <!-- Glide Carousel Script -->
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

    <!-- Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JavaScript -->
    <script src="{{asset('js/products.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="{{asset('js/slider.js')}}"></script>
</body>

</html>