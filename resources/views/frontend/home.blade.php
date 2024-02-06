@extends('frontend.layouts.app')

@section('title','Home')

@section('content')

<main>

        <!-- slider-area-start -->
        <section class="slider-area tpslider-delay secondary-sliderbg">
            <div class="swiper-container slider-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tpslider pt-90 pb-0 grey-bg tpslider__bg2" data-background="assets/img/slider/shape-bg-2.jpg">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 col-sm-7">
                                        <div class="tpslider__content p-relative">
                                            <span class="tpslider__sub-title mb-35">Top Seller In The Week</span>
                                            <h2 class="tpslider__title mb-30">Perfect <br> Your Healthy Life.</h2>
                                            <p>Presentation matters. Our fresh Vietnamese vegetable rolls <br> look good and taste even better</p>
                                            <div class="tpslider__btn">
                                                <a class="tp-btn" href="shop-3.html">Shop Now</a>
                                            </div>
                                            <img class="tpslider__shape-fruits1 d-none d-md-block" src="assets/img/shape/fruits-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-6 col-sm-5">
                                        <div class="tpslider__thumb p-relative pt-100">
                                            <img class="tpslider__thumb-img" src="assets/img/slider/slider-bg-8.png" alt="slider-bg">
                                            <div class="tpslider__shape">
                                                <img class="tpslider__shape-one" src="assets/img/slider/slider-shape-1.png" alt="shape">
                                                <img class="tpslider__shape-three" src="assets/img/slider/slider-shape-3.png" alt="shape">
                                                <img class="tpslider__shape-four" src="assets/img/slider/slider-shape-4.png" alt="shape">
                                                <img class="tpslider__shape-five" src="assets/img/shape/fruits-2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tpslider pt-90 pb-0 grey-bg tpslider__bg2" data-background="assets/img/slider/shape-bg-2.jpg">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 col-sm-8">
                                        <div class="tpslider__content p-relative">
                                            <span class="tpslider__sub-title mb-35">Top Seller In The Week</span>
                                            <h2 class="tpslider__title mb-30">The Best <br> Health Fresh.</h2>
                                            <p>Presentation matters. Our fresh Vietnamese vegetable rolls <br> look good and taste even better</p>
                                            <div class="tpslider__btn">
                                                <a class="tp-btn" href="shop-3.html">Shop Now</a>
                                            </div>
                                            <img class="tpslider__shape-fruits1 d-none d-md-block" src="assets/img/shape/fruits-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-6 col-sm-4">
                                        <div class="tpslider__thumb p-relative pt-100">
                                            <img class="tpslider__thumb-img" src="assets/img/slider/slider-bg-2.png" alt="slider-bg">
                                            <div class="tpslider__shape">
                                                <img class="tpslider__shape-one" src="assets/img/slider/slider-shape-1.png" alt="shape">
                                                <img class="tpslider__shape-three" src="assets/img/slider/slider-shape-3.png" alt="shape">
                                                <img class="tpslider__shape-four" src="assets/img/slider/slider-shape-4.png" alt="shape">
                                                <img class="tpslider__shape-five" src="assets/img/shape/fruits-2.png" alt="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>

        </section>
        <!-- slider-area-end -->

        <!-- img-box-area-start -->
        <section class="img-box-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="img-box__wrapper text-center mb-30">
                            <div class="img-box__thumb mb-30">
                                <img src="assets/img/about/about-1.png" alt="">
                            </div>
                            <div class="img-box__content">
                                <h4 class="img-box__title mb-10">Who We Are</h4>
                                <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit, sed do eiusmod tempor labore <br> et dolore dignissimos cumque.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="img-box__wrapper text-center mb-30">
                            <div class="img-box__thumb mb-30">
                                <img src="assets/img/about/about-2.png" alt="">
                            </div>
                            <div class="img-box__content">
                                <h4 class="img-box__title mb-10">Our Products</h4>
                                <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit, sed do eiusmod tempor labore <br> et dolore dignissimos cumque.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="img-box__wrapper text-center mb-30">
                            <div class="img-box__thumb mb-30">
                                <img src="assets/img/about/about-3.png" alt="">
                            </div>
                            <div class="img-box__content">
                                <h4 class="img-box__title mb-10">How We Work</h4>
                                <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit, sed do eiusmod tempor labore <br> et dolore dignissimos cumque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- img-box-area-end -->

        <!-- product-area-start -->
        <section class="weekly-product-area whight-product tpproduct__padding pt-75 pb-75 pl-65 pr-65 fix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-20">
                            <h4 class="tpsection__sub-title">~ Special Products ~</h4>
                            <h4 class="tpsection__title">Weekly Food Offers</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tpnavtab__area pb-40">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">All Products</button>
                                    <button class="nav-link" id="nav-meat-tab" data-bs-toggle="tab" data-bs-target="#nav-meat" type="button" role="tab" aria-controls="nav-meat" aria-selected="false">Fresh Meat</button>
                                    <button class="nav-link" id="nav-vegetables-tab" data-bs-toggle="tab" data-bs-target="#nav-vegetables" type="button" role="tab" aria-controls="nav-vegetables" aria-selected="false">Fresh Vegetables</button>
                                    <button class="nav-link" id="nav-snacks-tab" data-bs-toggle="tab" data-bs-target="#nav-snacks" type="button" role="tab" aria-controls="nav-snacks" aria-selected="false">Biscuits Snack</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div class="swiper-container tpproduct-active-4 tpslider-bottom p-relative">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products29-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products30-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-top-.html">Mangosteen Organic From VietNamese</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products9-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products10-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.hmtl">Soda Sparkling Water Maker (Rose Gold)</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products13-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products35-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details.html">HOT - Lettuce Fresh Produce Fruit Vegetables</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Pure Irish Organic Beef Quarter Pounder Burgers</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products15-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products32-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.html">Ginger Fresh, Whole, Organic - 250gram</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products12-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products28-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tpproduct-btn">
                                            <div class="tpprduct-arrow tpproduct-btn__prv4"><a href="#"><i class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt4"><a href="#"><i class="icon-chevron-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-meat" role="tabpanel" aria-labelledby="nav-meat-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div class="swiper-container tpproduct-active-4 tpslider-bottom p-relative">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products30-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products29-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-top-.html">Mangosteen Organic From VietNamese</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products10-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products9-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.hmtl">Soda Sparkling Water Maker (Rose Gold)</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products15-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products32-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.hmtl">Soda Sparkling Water Maker (Rose Gold)</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products29-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products30-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-top-.html">Mangosteen Organic From VietNamese</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products9-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products10-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.hmtl">Soda Sparkling Water Maker (Rose Gold)</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products26-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products9-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.html">Ginger Fresh, Whole, Organic - 250gram</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products29-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products30-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-top-.html">Mangosteen Organic From VietNamese</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tpproduct-btn">
                                            <div class="tpprduct-arrow tpproduct-btn__prv4"><a href="#"><i class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt4"><a href="#"><i class="icon-chevron-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-vegetables" role="tabpanel" aria-labelledby="nav-vegetables-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div class="swiper-container tpproduct-active-4 tpslider-bottom p-relative">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products21-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products1-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-top-.html">Mangosteen Organic From VietNamese</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products22-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products11-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.hmtl">Soda Sparkling Water Maker (Rose Gold)</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products4-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products23-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details.html">HOT - Lettuce Fresh Produce Fruit Vegetables</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Pure Irish Organic Beef Quarter Pounder Burgers</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products16-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products11-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.html">Ginger Fresh, Whole, Organic - 250gram</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products17-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products37-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Pure Irish Organic Beef Quarter Pounder Burgers</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tpproduct-btn">
                                            <div class="tpprduct-arrow tpproduct-btn__prv4"><a href="#"><i class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt4"><a href="#"><i class="icon-chevron-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-snacks" role="tabpanel" aria-labelledby="nav-snacks-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div class="swiper-container tpproduct-active-4 tpslider-bottom p-relative">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products21-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products1-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-top-.html">Mangosteen Organic From VietNamese</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products13-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products35-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details.html">HOT - Lettuce Fresh Produce Fruit Vegetables</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Pure Irish Organic Beef Quarter Pounder Burgers</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products15-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products32-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.html">Ginger Fresh, Whole, Organic - 250gram</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products12-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products28-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products17-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products37-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img src="assets/img/product/products15-min.jpg" alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products32-min.jpg" alt=""></a>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.html">Ginger Fresh, Whole, Organic - 250gram</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                            </div>
                                                            <div class="tpproduct__descrip">
                                                                <ul>
                                                                    <li>Type: Organic</li>
                                                                    <li>MFG: August 4.2021</li>
                                                                    <li>LIFE: 60 days</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tpproduct-btn">
                                            <div class="tpprduct-arrow tpproduct-btn__prv4"><a href="#"><i class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt4"><a href="#"><i class="icon-chevron-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tpproduct__all-item text-center">
                            <span>Discover thousands of other quality products.
                                <a href="shop-3.html">Shop All Products <i class="icon-chevrons-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-area-end -->

        <!-- product-feature-area-start -->
        <section class="product-feature-area product-feature pt-80 pb-20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="tpfeature__thumb p-relative pb-40">
                            <img src="assets/img/product/feature-thumb-1.png" alt="">
                            <div class="tpfeature__shape d-none d-md-block">
                                <img class="tpfeature__shape-one" src="assets/img/product/feature-shape-1.png" alt="">
                                <img class="tpfeature__shape-two" src="assets/img/product/feature-shape-2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="tpproduct-feature p-relative pt-45 pb-40">
                            <div class="tpsection tpfeature__content mb-35">
                                <h4 class="tpsection__sub-title mb-0">~ The Best For Your ~</h4>
                                <h4 class="tpsection__title tpfeature__title mb-25">Organic Drinks <br> <span>Easy Healthy</span> - Happy Life</h4>
                                <p>The liber tempor cum soluta nobis eleifend option congue <br> doming quod mazim placerat facer possim assum.</p>
                                <h4 class="tpfeature__price-red mb-45">From:<span>$54.00</span>/per kilogram. </h4>
                                <a class="tp-btn-4" href="cart.html">Add To Cart</a>
                            </div>
                            <div class="tpfeature__shape d-none d-md-block">
                                <img class="tpfeature__shape-three" src="assets/img/product/feature-shape-3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-feature-area-end -->

        <!-- product-coundown-area-start -->
        <section class="product-coundown-area tpcoundown__bg pb-25" data-background="assets/img/banner/coundpwn-bg-2.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tpcoundown p-relative ml-175">
                            <div class="section__content mb-35">
                                <span class="section__sub-title mb-10">~ Deals Of The Day ~</span>
                                <h2 class="section__title mb-25">Premium Drinks <br> Fresh Farm Product</h2>
                                <p>The liber tempor cum soluta nobis eleifend option congue <br>
                                    doming quod mazim placerat facere possum assam going through.</p>
                            </div>
                            <div class="tpcoundown__count">
                                <h4 class="tpcoundown__count-title">hurry up! Offer End In:</h4>
                                <div class="tpcoundown__countdown" data-countdown="2023/03/03"></div>
                                <div class="tpcoundown__btn mt-50">
                                    <a class="whight-btn" href="shop-details-3.html">Shop Now</a>
                                    <a class="whight-btn border-btn ml-15" href="shop-2.html">View Menu</a>
                                </div>
                            </div>
                            <div class="tpcoundown__shape d-none d-lg-block">
                                <img class="tpcoundown__shape-one" src="assets/img/shape/tree-leaf-1.svg" alt="">
                                <img class="tpcoundown__shape-two" src="assets/img/shape/tree-leaf-2.svg" alt="">
                                <img class="tpcoundown__shape-three" src="assets/img/shape/tree-leaf-3.svg" alt="">
                                <img class="tpcoundown__shape-four" src="assets/img/shape/fresh-shape-1.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-coundown-area-end -->

        <!-- brand-product-area-start -->
        <section class="brand-product pt-75 pb-60">
            <div class="container">
                <div class="white-bg pb-40 brand-product">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="tpsection mb-35">
                                <h4 class="tpsection__sub-title">~ Best Products ~</h4>
                                <h4 class="tpsection__title">This week’s highlights</h4>
                                <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="assets/img/product/products15-min.jpg" alt="">
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Lettuce Fresh Produce Vegetables</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="assets/img/product/products20-min.jpg" alt="">
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Cheap and delicious fresh chicken</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="assets/img/product/products23-min.jpg" alt="">
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Fresh Milk Chocolate Quaker Popped Rice Crisps</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="assets/img/product/products16-min.jpg" alt="">
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">1kg purple onion/ onion/ dried onion Kinh men </a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="assets/img/product/products1-min.jpg" alt="">
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">1st Quality Fresh Meat From USA 500g</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="assets/img/product/products28-min.jpg" alt="">
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Fresh Organic Grape Tomatoes 100g</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="assets/img/product/products31-min.jpg" alt="">
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Fresh And Sour Lemon Like An Old Lover</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="assets/img/product/products13-min.jpg" alt="">
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Fresh Organic Plum Moc Chau Trip 100g</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="assets/img/product/products17-min.jpg" alt="">
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Enormous Granite Bag Fresh Goods 100%</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand-product-area-end -->

        <!-- blog-area-start -->
        <section class="blog-area pt-100 pb-100 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-35">
                            <h4 class="tpsection__sub-title">~ Read Our Blog ~</h4>
                            <h4 class="tpsection__title">Our Latest Post</h4>
                            <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-container tpblog-active-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-1.jpg" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Avocado Grilled Salmon, Rich In Nutrients For The Body</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-2.jpg" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of
                                            Fresh Beef For Women's Health</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-3.jpg" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits &
                                            Seafoods Good For Pregnancy</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-4.jpg" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Shopping</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Summer Breakfast For The Healthy Morning With Tomatoes</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-5.jpg" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">Foods</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Popular Reasons You Must Drinks Juice Everyday</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-6.jpg" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Perfect Quality Reasonable Price For Your Family</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-7.jpg" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Dairy Farm</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits Seafoods Good For Pregnancy</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-8.jpg" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">organis</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of Fresh Beef For Women’s Health</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- feature-area-start -->
        <section class="feature-area mainfeature__bg theme-bg-2 pt-50 pb-40">
            <div class="container">
                <div class="mainfeature__border pb-15">
                    <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="assets/img/icon/feature-icon-1.svg" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Fast Delivery</h4>
                                    <p>Across West & East India</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="assets/img/icon/feature-icon-2.svg" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">safe payment</h4>
                                    <p>100% Secure Payment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="assets/img/icon/feature-icon-3.svg" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Online Discount</h4>
                                    <p>Add Multi-buy Discount </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="assets/img/icon/feature-icon-4.svg" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Help Center</h4>
                                    <p>Dedicated 24/7 Support </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="assets/img/icon/feature-icon-5.svg" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Curated items</h4>
                                    <p>From Handpicked Sellers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-area-end -->

    </main>

    @endsection