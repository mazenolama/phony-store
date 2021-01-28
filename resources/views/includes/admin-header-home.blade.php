
<header id="header" class="header">
    <!-- NavBar -->
    <div class="navigation">
        <div class="container">

            <nav class="nav">
                <div class="nav__hamburger">
                <svg>
                    <use xlink:href="images/sprite.svg#icon-menu"></use>
                </svg>
                </div>

                <!-- Logo -->
                <div class="nav__logo">
                <a href="/" class="scroll-link">
                    PHONY
                </a>
                </div>
                <!-- End Logo -->

                <!-- Middle Nav-->
                <div class="nav__menu">
                    <div class="menu__top">
                        <span class="nav__category">PHONE</span>
                        <a href="#" class="close__toggle">
                        <svg>
                            <use xlink:href="images/sprite.svg#icon-cross"></use>
                        </svg>
                        </a>
                    </div>
                    <ul class="nav__list">
                        <li class="nav__item">
                        <a href="#header" class="nav__link scroll-link">Add Product</a>
                        </li>
                        <li class="nav__item">
                        <a href="#category" class="nav__link scroll-link"></a>
                        </li>
                        <li class="nav__item">
                        <a href="#news" class="nav__link scroll-link">Blog</a>
                        </li>
                        <li class="nav__item">
                        <a href="#contact" class="nav__link scroll-link">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- End Middle Nav-->

                <!-- Nav Icons-->
                <div class="nav__icons">
                <a href="#" class="icon__item">
                    <svg class="icon__user">
                    <use xlink:href="images/sprite.svg#icon-user"></use>
                    </svg>
                </a>

                <a href="#" class="icon__item">
                    <svg class="icon__search">
                    <use xlink:href="images/sprite.svg#icon-search"></use>
                    </svg>
                </a>

                <a href="{{route('mycart')}}" class="icon__item">
                    <svg class="icon__cart">
                    <use xlink:href="images/sprite.svg#icon-shopping-basket"></use>
                    </svg>
                    <span id="cart__total">2</span>
                </a>
                </div>
                <!-- End Nav Icons-->

            </nav>
        </div>
    </div>
    <!-- End NavBar -->
   
  <!-- Main Slider -->
  @include('includes.Main-Slider')
  <!-- End Main Slider -->
</header>
