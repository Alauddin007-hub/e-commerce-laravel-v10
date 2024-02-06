<!-- @extends('frontend.layouts.app') -->

@section('title','Shop')

@section('content')

<main>

         <!-- breadcrumb-area-start -->
         <div class="breadcrumb__area grey-bg pt-5 pb-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                           <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                           <span class="dvdr">/</span>
                           <span>Shop</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- breadcrumb-area-end -->

         <!-- shop-area-start -->
         <section class="shop-area-start grey-bg pb-200">
            <div class="container">
               <div class="row">
                  <div class="col-xl-2 col-lg-12 col-md-12">
                     <div class="tpshop__leftbar">
                        <div class="tpshop__widget mb-30 pb-25">
                           <h4 class="tpshop__widget-title">Product Categories</h4>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault9">
                              <label class="form-check-label" for="flexCheckDefault9">
                                 Biscuits & Snacks (08)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                              <label class="form-check-label" for="flexCheckDefault2">
                                 Fresh Fruits (12)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault3">
                              <label class="form-check-label" for="flexCheckDefault3">
                                 Exotic Fruits (09)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault4">
                              <label class="form-check-label" for="flexCheckDefault4">
                                 Breads & Bakery (05)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value=""  id="flexCheckDefault5">
                              <label class="form-check-label" for="flexCheckDefault5">
                                 Breakfast & Dairy (09)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                              <label class="form-check-label" for="flexCheckDefault6">
                                 Honey (05)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                              <label class="form-check-label" for="flexCheckDefault7">
                                 Milk & Flavoured (04)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                              <label class="form-check-label" for="flexCheckDefault8">
                                 Meats & Seafood (08)
                              </label>
                           </div>
                        </div>
                        <div class="tpshop__widget mb-30 pb-25">
                           <h4 class="tpshop__widget-title mb-20">FILTER BY PRICE</h4>
                           <div class="productsidebar">
                              <div class="productsidebar__head">
                              </div>
                              <div class="productsidebar__range">
                                 <div id="slider-range"></div>
                                 <div class="price-filter mt-10"><input type="text" id="amount">
                              </div>
                              </div>
                           </div>
                           <div class="productsidebar__btn mt-15 mb-15">
                              <a href="#">FILTER</a>
                           </div>
                        </div>
                        <div class="tpshop__widget mb-30 pb-25">
                           <h4 class="tpshop__widget-title mb-20">Filter by Color</h4>
                           <div class="tpshop__widget-color-box">
                              <div class="form-check">
                                 <input class="form-check-input black-input" type="checkbox" value="" id="flexCheckDefault12">
                                 <label class="form-check-label" for="flexCheckDefault12">
                                    Black
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input blue-input" type="checkbox" value="" checked id="flexCheckChecked13">
                                 <label class="form-check-label" for="flexCheckChecked13">
                                    Blue
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input brown-input" type="checkbox" value=""  checked id="flexCheckChecked18">
                                 <label class="form-check-label" for="flexCheckChecked18">
                                    Brown
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input grey-input" type="checkbox" value="" id="flexCheckChecked14">
                                 <label class="form-check-label" for="flexCheckChecked14">
                                    Gray
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input green-input" type="checkbox" value="" id="flexCheckChecked15">
                                 <label class="form-check-label" for="flexCheckChecked15">
                                    Green
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input orange-input" type="checkbox" value="" id="flexCheckChecked16">
                                 <label class="form-check-label" for="flexCheckChecked16">
                                     Yellow
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input red-input" type="checkbox" value="" id="flexCheckChecked17">
                                 <label class="form-check-label" for="flexCheckChecked17">
                                    Red
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="tpshop__widget mb-30 pb-25">
                           <h4 class="tpshop__widget-title">FILTER BY BRAND</h4>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18">
                              <label class="form-check-label" for="flexCheckDefault18">
                                 Chrome Hearts  (15)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault19">
                              <label class="form-check-label" for="flexCheckDefault19">
                                 Dominique Aurientis  (15)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault20">
                              <label class="form-check-label" for="flexCheckDefault20">
                                 Galliano  (15)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault21">
                              <label class="form-check-label" for="flexCheckDefault21">
                                 Georgine  (15)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22">
                              <label class="form-check-label" for="flexCheckDefault22">
                                 Matthew Christopher  (15)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault23">
                              <label class="form-check-label" for="flexCheckDefault23">
                                 Paul Gaultier  (15)
                              </label>
                           </div>
                        </div>
                        <div class="tpshop__widget">
                           <h4 class="tpshop__widget-title">FILTER BY RATING</h4>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault24">
                              <label class="form-check-label" for="flexCheckDefault24">
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 (45)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault25">
                              <label class="form-check-label" for="flexCheckDefault25">
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 (10)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault26">
                              <label class="form-check-label" for="flexCheckDefault26">
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 (05)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault27">
                              <label class="form-check-label" for="flexCheckDefault27">
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 (02)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault28">
                              <label class="form-check-label" for="flexCheckDefault28">
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 (02)
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="tpshop__widget">
                        <div class="tpshop__sidbar-thumb mt-35">
                           <img src="assets/img/shape/sidebar-product-1.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-10 col-lg-12 col-md-12">
                     <div class="tpshop__top ml-60">
                        <div class="tpshop__banner mb-30" data-background="assets/img/banner/shop-bg-1.jpg">
                           <div class="tpshop__content text-center">
                              <span>The Salad</span>
                              <h4 class="tpshop__content-title mb-20">Fresh & Natural <br>Healthy Food Special Offer</h4>
                              <p>Do not miss the current offers of us!</p>
                           </div>
                        </div>
                        <div class="product__filter-content mb-40">
                           <div class="row align-items-center">
                              <div class="col-sm-4">
                                 <div class="product__item-count">
                                    <span>Showing 1 - 18 of 40 Products</span>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="tpproductnav tpnavbar product-filter-nav d-flex align-items-center justify-content-center">
                                    <nav>
                                       <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                          <button class="nav-link" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="false">
                                             <i>
                                                <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M2 4C3.10457 4 4 3.10457 4 2C4 0.89543 3.10457 0 2 0C0.89543 0 0 0.89543 0 2C0 3.10457 0.89543 4 2 4Z" fill="currentColor"/>
                                                   <path d="M2 10C3.10457 10 4 9.10457 4 8C4 6.89543 3.10457 6 2 6C0.89543 6 0 6.89543 0 8C0 9.10457 0.89543 10 2 10Z" fill="currentColor"/>
                                                   <path d="M2 16C3.10457 16 4 15.1046 4 14C4 12.8954 3.10457 12 2 12C0.89543 12 0 12.8954 0 14C0 15.1046 0.89543 16 2 16Z" fill="currentColor"/>
                                                   <path d="M8 4C9.10457 4 10 3.10457 10 2C10 0.89543 9.10457 0 8 0C6.89543 0 6 0.89543 6 2C6 3.10457 6.89543 4 8 4Z" fill="currentColor"/>
                                                   <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="currentColor"/>
                                                   <path d="M8 16C9.10457 16 10 15.1046 10 14C10 12.8954 9.10457 12 8 12C6.89543 12 6 12.8954 6 14C6 15.1046 6.89543 16 8 16Z" fill="currentColor"/>
                                                   <path d="M14 4C15.1046 4 16 3.10457 16 2C16 0.89543 15.1046 0 14 0C12.8954 0 12 0.89543 12 2C12 3.10457 12.8954 4 14 4Z" fill="currentColor"/>
                                                   <path d="M14 10C15.1046 10 16 9.10457 16 8C16 6.89543 15.1046 6 14 6C12.8954 6 12 6.89543 12 8C12 9.10457 12.8954 10 14 10Z" fill="currentColor"/>
                                                   <path d="M14 16C15.1046 16 16 15.1046 16 14C16 12.8954 15.1046 12 14 12C12.8954 12 12 12.8954 12 14C12 15.1046 12.8954 16 14 16Z" fill="currentColor"/>
                                                   <path d="M20 4C21.1046 4 22 3.10457 22 2C22 0.89543 21.1046 0 20 0C18.8954 0 18 0.89543 18 2C18 3.10457 18.8954 4 20 4Z" fill="currentColor"/>
                                                   <path d="M20 10C21.1046 10 22 9.10457 22 8C22 6.89543 21.1046 6 20 6C18.8954 6 18 6.89543 18 8C18 9.10457 18.8954 10 20 10Z" fill="currentColor"/>
                                                   <path d="M20 16C21.1046 16 22 15.1046 22 14C22 12.8954 21.1046 12 20 12C18.8954 12 18 12.8954 18 14C18 15.1046 18.8954 16 20 16Z" fill="currentColor"/>
                                                   </svg>
                                             </i>
                                          </button>
                                          <button class="nav-link active" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular" aria-selected="true">
                                             <i>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M2 4C3.10457 4 4 3.10457 4 2C4 0.89543 3.10457 0 2 0C0.89543 0 0 0.89543 0 2C0 3.10457 0.89543 4 2 4Z" fill="currentColor"/>
                                                   <path d="M2 10C3.10457 10 4 9.10457 4 8C4 6.89543 3.10457 6 2 6C0.89543 6 0 6.89543 0 8C0 9.10457 0.89543 10 2 10Z" fill="currentColor"/>
                                                   <path d="M2 16C3.10457 16 4 15.1046 4 14C4 12.8954 3.10457 12 2 12C0.89543 12 0 12.8954 0 14C0 15.1046 0.89543 16 2 16Z" fill="currentColor"/>
                                                   <path d="M8 4C9.10457 4 10 3.10457 10 2C10 0.89543 9.10457 0 8 0C6.89543 0 6 0.89543 6 2C6 3.10457 6.89543 4 8 4Z" fill="currentColor"/>
                                                   <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="currentColor"/>
                                                   <path d="M8 16C9.10457 16 10 15.1046 10 14C10 12.8954 9.10457 12 8 12C6.89543 12 6 12.8954 6 14C6 15.1046 6.89543 16 8 16Z" fill="currentColor"/>
                                                   <path d="M14 4C15.1046 4 16 3.10457 16 2C16 0.89543 15.1046 0 14 0C12.8954 0 12 0.89543 12 2C12 3.10457 12.8954 4 14 4Z" fill="currentColor"/>
                                                   <path d="M14 10C15.1046 10 16 9.10457 16 8C16 6.89543 15.1046 6 14 6C12.8954 6 12 6.89543 12 8C12 9.10457 12.8954 10 14 10Z" fill="currentColor"/>
                                                   <path d="M14 16C15.1046 16 16 15.1046 16 14C16 12.8954 15.1046 12 14 12C12.8954 12 12 12.8954 12 14C12 15.1046 12.8954 16 14 16Z" fill="currentColor"/>
                                                   </svg>
                                             </i>
                                          </button>
                                          <button class="nav-link" id="nav-product-tab" data-bs-toggle="tab" data-bs-target="#nav-product" type="button" role="tab" aria-controls="nav-product" aria-selected="false">
                                             <i>
                                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M2 4C3.10457 4 4 3.10457 4 2C4 0.89543 3.10457 0 2 0C0.89543 0 0 0.89543 0 2C0 3.10457 0.89543 4 2 4Z" fill="currentColor"/>
                                                   <path d="M2 10C3.10457 10 4 9.10457 4 8C4 6.89543 3.10457 6 2 6C0.89543 6 0 6.89543 0 8C0 9.10457 0.89543 10 2 10Z" fill="currentColor"/>
                                                   <path d="M2 16C3.10457 16 4 15.1046 4 14C4 12.8954 3.10457 12 2 12C0.89543 12 0 12.8954 0 14C0 15.1046 0.89543 16 2 16Z" fill="currentColor"/>
                                                   <path d="M20 2C20 2.552 19.553 3 19 3H7C6.448 3 6 2.552 6 2C6 1.448 6.448 1 7 1H19C19.553 1 20 1.447 20 2Z" fill="currentColor"/>
                                                   <path d="M20 8C20 8.552 19.553 9 19 9H7C6.448 9 6 8.552 6 8C6 7.448 6.448 7 7 7H19C19.553 7 20 7.447 20 8Z" fill="currentColor"/>
                                                   <path d="M20 14C20 14.552 19.553 15 19 15H7C6.448 15 6 14.552 6 14C6 13.447 6.448 13 7 13H19C19.553 13 20 13.447 20 14Z" fill="currentColor"/>
                                                </svg>
                                             </i>
                                          </button>
                                       </div>
                                    </nav>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="product__navtabs d-flex justify-content-end align-items-center">
                                    <div class="tp-shop-selector">
                                       <select style="display: none;">
                                          <option>Default sorting</option>
                                          <option>Show 14</option>
                                          <option>Show 08</option>
                                          <option>Show 20</option>
                                       </select>
                                       <div class="nice-select" tabindex="0">
                                          <span class="current">Default sorting</span>
                                          <ul class="list">
                                             <li data-value="Show 12" class="option selected">Default sorting</li>
                                             <li data-value="Show 14" class="option">Short popularity</li>
                                             <li data-value="Show 08" class="option">Show 08</li>
                                             <li data-value="Show 20" class="option">Show 20</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                           <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                              <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products21-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products1-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>,
                                             <a href="shop-details-3.html">Vagetables</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products22-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products11-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-40%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>
                                          </span>
                                          <h4 class="tpproduct__title">
                                             <a href="shop-details-top.html">Soda Sparkling Water Maker (Rose Gold)</a>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products4-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products23-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-10%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Vagetables</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-90%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products16-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products11-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>,
                                             <a href="shop-details-3.html">Vagetables</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products17-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products37-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-40%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products29-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products30-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details.html">Fresh Meat</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products9-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products10-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-40%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details.html">Fresh Meat</a>
                                          </span>
                                          <h4 class="tpproduct__title">
                                             <a href="shop-details-top.html">Soda Sparkling Water Maker (Rose Gold)</a>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products13-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products35-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-10%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-90%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products15-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products32-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Vagetables</a>
                                          </span>
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
                           <div class="tab-pane fade show active whight-product" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                              <div class="row row-cols-xxl-3 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products21-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products1-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>,
                                             <a href="shop-details-3.html">Vagetables</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products22-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products11-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-40%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>
                                          </span>
                                          <h4 class="tpproduct__title">
                                             <a href="shop-details-top.html">Soda Sparkling Water Maker (Rose Gold)</a>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products4-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products23-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-10%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Vagetables</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products16-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products11-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>,
                                             <a href="shop-details-3.html">Vagetables</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products17-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products37-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-40%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products29-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products30-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details.html">Fresh Meat</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products9-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products10-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-40%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details.html">Fresh Meat</a>
                                          </span>
                                          <h4 class="tpproduct__title">
                                             <a href="shop-details-top.html">Soda Sparkling Water Maker (Rose Gold)</a>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products13-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products35-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-10%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-90%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products15-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products32-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Vagetables</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products21-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products1-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>,
                                             <a href="shop-details-3.html">Vagetables</a>
                                          </span>
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
                                 <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                       <div class="tpproduct__thumb p-relative text-center">
                                          <a href="#"><img src="assets/img/product/products22-min.jpg" alt=""></a>
                                          <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products11-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-40%</span>
                                          </div>
                                          <div class="tpproduct__shopping">
                                             <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                             <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                             <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpproduct__content">
                                          <span class="tpproduct__content-weight">
                                             <a href="shop-details-3.html">Fresh Fruits</a>
                                          </span>
                                          <h4 class="tpproduct__title">
                                             <a href="shop-details-top.html">Soda Sparkling Water Maker (Rose Gold)</a>
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
                           <div class="tab-pane fade whight-product" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="tplist__product d-flex align-items-center justify-content-between mb-20">
                                       <div class="tplist__product-img">
                                          <a href="#" class="tplist__product-img-one"><img src="assets/img/product/products41-min.jpg" alt=""></a>
                                          <a class="tplist__product-img-two" href="shop-details.html"><img src="assets/img/product/products48-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                       </div>
                                       <div class="tplist__content">
                                          <span>500 gram</span>
                                          <h4 class="tplist__content-title"><a href="#">Fresh Mangosteen 100% Organic From VietNamese</a></h4>
                                          <div class="tplist__rating mb-5">
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                          </div>
                                          <ul class="tplist__content-info">
                                             <li>Delicous Non-Dairy cheese sauce</li>
                                             <li>Vegan & Allergy Friendly</li>
                                             <li>Smooth, velvety Dairy free cheese sauce</li>
                                          </ul>
                                       </div>
                                       <div class="tplist__price justify-content-end">
                                          <h4 class="tplist__instock">Availability: <span>92 in stock</span> </h4>
                                          <h3 class="tplist__count mb-15">$56.00</h3>
                                          <button class="tp-btn-2 mb-10">Add to cart</button>
                                          <div class="tplist__shopping">
                                             <a href="#"><i class="icon-heart icons"></i> wishlist</a>
                                             <a href="#"><i class="icon-layers"></i>Compare</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="tplist__product d-flex align-items-center justify-content-between mb-20">
                                       <div class="tplist__product-img">
                                          <a href="#" class="tplist__product-img-one"><img src="assets/img/product/products42-min.jpg" alt=""></a>
                                          <a class="tplist__product-img-two" href="shop-details.html"><img src="assets/img/product/products47-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                       </div>
                                       <div class="tplist__content">
                                          <span>500 gram</span>
                                          <h4 class="tplist__content-title"><a href="#">Soda Sparkling Water Maker (Rose Gold)</a></h4>
                                          <div class="tplist__rating mb-5">
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                          </div>
                                          <ul class="tplist__content-info">
                                             <li>Delicous Non-Dairy cheese sauce</li>
                                             <li>Vegan & Allergy Friendly</li>
                                             <li>Smooth, velvety Dairy free cheese sauce</li>
                                          </ul>
                                       </div>
                                       <div class="tplist__price justify-content-end">
                                          <h4 class="tplist__instock">Availability: <span>92 in stock</span> </h4>
                                          <h3 class="tplist__count mb-15">$56.00</h3>
                                          <button class="tp-btn-2 mb-10">Add to cart</button>
                                          <div class="tplist__shopping">
                                             <a href="#"><i class="icon-heart icons"></i> wishlist</a>
                                             <a href="#"><i class="icon-layers"></i>Compare</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="tplist__product d-flex align-items-center justify-content-between mb-20">
                                       <div class="tplist__product-img">
                                          <a href="#" class="tplist__product-img-one"><img src="assets/img/product/products43-min.jpg" alt=""></a>
                                          <a class="tplist__product-img-two" href="shop-details.html"><img src="assets/img/product/products46-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                       </div>
                                       <div class="tplist__content">
                                          <span>500 gram</span>
                                          <h4 class="tplist__content-title"><a href="#">HOT - Lettuce Fresh Produce Fruit Vegetables</a></h4>
                                          <div class="tplist__rating mb-5">
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                          </div>
                                          <ul class="tplist__content-info">
                                             <li>Delicous Non-Dairy cheese sauce</li>
                                             <li>Vegan & Allergy Friendly</li>
                                             <li>Smooth, velvety Dairy free cheese sauce</li>
                                          </ul>
                                       </div>
                                       <div class="tplist__price justify-content-end">
                                          <h4 class="tplist__instock">Availability: <span>92 in stock</span> </h4>
                                          <h3 class="tplist__count mb-15">$56.00</h3>
                                          <button class="tp-btn-2 mb-10">Add to cart</button>
                                          <div class="tplist__shopping">
                                             <a href="#"><i class="icon-heart icons"></i> wishlist</a>
                                             <a href="#"><i class="icon-layers"></i>Compare</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="tplist__product d-flex align-items-center justify-content-between mb-20">
                                       <div class="tplist__product-img">
                                          <a href="#" class="tplist__product-img-one"><img src="assets/img/product/products44-min.jpg" alt=""></a>
                                          <a class="tplist__product-img-two" href="shop-details.html"><img src="assets/img/product/products45-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                       </div>
                                       <div class="tplist__content">
                                          <span>500 gram</span>
                                          <h4 class="tplist__content-title"><a href="#">Ginger Fresh, Whole, Organic - 250gram</a></h4>
                                          <div class="tplist__rating mb-5">
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                          </div>
                                          <ul class="tplist__content-info">
                                             <li>Delicous Non-Dairy cheese sauce</li>
                                             <li>Vegan & Allergy Friendly</li>
                                             <li>Smooth, velvety Dairy free cheese sauce</li>
                                          </ul>
                                       </div>
                                       <div class="tplist__price justify-content-end">
                                          <h4 class="tplist__instock">Availability: <span>92 in stock</span> </h4>
                                          <h3 class="tplist__count mb-15">$56.00</h3>
                                          <button class="tp-btn-2 mb-10">Add to cart</button>
                                          <div class="tplist__shopping">
                                             <a href="#"><i class="icon-heart icons"></i> wishlist</a>
                                             <a href="#"><i class="icon-layers"></i>Compare</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="tplist__product d-flex align-items-center justify-content-between mb-20">
                                       <div class="tplist__product-img">
                                          <a href="#" class="tplist__product-img-one"><img src="assets/img/product/products45-min.jpg" alt=""></a>
                                          <a class="tplist__product-img-two" href="shop-details.html"><img src="assets/img/product/products41-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                       </div>
                                       <div class="tplist__content">
                                          <span>500 gram</span>
                                          <h4 class="tplist__content-title"><a href="#">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a></h4>
                                          <div class="tplist__rating mb-5">
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                          </div>
                                          <ul class="tplist__content-info">
                                             <li>Delicous Non-Dairy cheese sauce</li>
                                             <li>Vegan & Allergy Friendly</li>
                                             <li>Smooth, velvety Dairy free cheese sauce</li>
                                          </ul>
                                       </div>
                                       <div class="tplist__price justify-content-end">
                                          <h4 class="tplist__instock">Availability: <span>92 in stock</span> </h4>
                                          <h3 class="tplist__count mb-15">$56.00</h3>
                                          <button class="tp-btn-2 mb-10">Add to cart</button>
                                          <div class="tplist__shopping">
                                             <a href="#"><i class="icon-heart icons"></i> wishlist</a>
                                             <a href="#"><i class="icon-layers"></i>Compare</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="tplist__product d-flex align-items-center justify-content-between mb-20">
                                       <div class="tplist__product-img">
                                          <a href="#" class="tplist__product-img-one"><img src="assets/img/product/products46-min.jpg" alt=""></a>
                                          <a class="tplist__product-img-two" href="shop-details.html"><img src="assets/img/product/products42-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                       </div>
                                       <div class="tplist__content">
                                          <span>500 gram</span>
                                          <h4 class="tplist__content-title"><a href="#">Mangosteen Organic From VietNamese</a></h4>
                                          <div class="tplist__rating mb-5">
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                          </div>
                                          <ul class="tplist__content-info">
                                             <li>Delicous Non-Dairy cheese sauce</li>
                                             <li>Vegan & Allergy Friendly</li>
                                             <li>Smooth, velvety Dairy free cheese sauce</li>
                                          </ul>
                                       </div>
                                       <div class="tplist__price justify-content-end">
                                          <h4 class="tplist__instock">Availability: <span>92 in stock</span> </h4>
                                          <h3 class="tplist__count mb-15">$56.00</h3>
                                          <button class="tp-btn-2 mb-10">Add to cart</button>
                                          <div class="tplist__shopping">
                                             <a href="#"><i class="icon-heart icons"></i> wishlist</a>
                                             <a href="#"><i class="icon-layers"></i>Compare</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="tplist__product d-flex align-items-center justify-content-between mb-20">
                                       <div class="tplist__product-img">
                                          <a href="#" class="tplist__product-img-one"><img src="assets/img/product/products47-min.jpg" alt=""></a>
                                          <a class="tplist__product-img-two" href="shop-details.html"><img src="assets/img/product/products43-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                       </div>
                                       <div class="tplist__content">
                                          <span>500 gram</span>
                                          <h4 class="tplist__content-title"><a href="#">Pure Irish Organic Beef Quarter Pounder Burgers</a></h4>
                                          <div class="tplist__rating mb-5">
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                          </div>
                                          <ul class="tplist__content-info">
                                             <li>Delicous Non-Dairy cheese sauce</li>
                                             <li>Vegan & Allergy Friendly</li>
                                             <li>Smooth, velvety Dairy free cheese sauce</li>
                                          </ul>
                                       </div>
                                       <div class="tplist__price justify-content-end">
                                          <h4 class="tplist__instock">Availability: <span>92 in stock</span> </h4>
                                          <h3 class="tplist__count mb-15">$56.00</h3>
                                          <button class="tp-btn-2 mb-10">Add to cart</button>
                                          <div class="tplist__shopping">
                                             <a href="#"><i class="icon-heart icons"></i> wishlist</a>
                                             <a href="#"><i class="icon-layers"></i>Compare</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="tplist__product d-flex align-items-center justify-content-between mb-20">
                                       <div class="tplist__product-img">
                                          <a href="#" class="tplist__product-img-one"><img src="assets/img/product/products48-min.jpg" alt=""></a>
                                          <a class="tplist__product-img-two" href="shop-details.html"><img src="assets/img/product/products44-min.jpg" alt=""></a>
                                          <div class="tpproduct__info bage">
                                             <span class="tpproduct__info-discount bage__discount">-50%</span>
                                             <span class="tpproduct__info-hot bage__hot">HOT</span>
                                          </div>
                                       </div>
                                       <div class="tplist__content">
                                          <span>500 gram</span>
                                          <h4 class="tplist__content-title"><a href="#">Fresh Mangosteen 100% Organic From VietNamese</a></h4>
                                          <div class="tplist__rating mb-5">
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                          </div>
                                          <ul class="tplist__content-info">
                                             <li>Delicous Non-Dairy cheese sauce</li>
                                             <li>Vegan & Allergy Friendly</li>
                                             <li>Smooth, velvety Dairy free cheese sauce</li>
                                          </ul>
                                       </div>
                                       <div class="tplist__price justify-content-end">
                                          <h4 class="tplist__instock">Availability: <span>92 in stock</span> </h4>
                                          <h3 class="tplist__count mb-15">$56.00</h3>
                                          <button class="tp-btn-2 mb-10">Add to cart</button>
                                          <div class="tplist__shopping">
                                             <a href="#"><i class="icon-heart icons"></i> wishlist</a>
                                             <a href="#"><i class="icon-layers"></i>Compare</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>   
                        <div class="basic-pagination text-center mt-35">
                           <nav>
                              <ul>
                                 <li>
                                    <span class="current">1</span>
                                 </li>
                                 <li>
                                    <a href="blog.html">2</a>
                                 </li>
                                 <li>
                                    <a href="blog.html">3</a>
                                 </li>
                                 <li>
                                    <a href="blog.html">
                                       <i class="icon-chevrons-right"></i>
                                    </a>
                                 </li>
                              </ul>
                            </nav>
                        </div>   
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- shop-area-end -->

         
         <!-- feature-area-start -->
         <section class="feature-area mainfeature__bg grey-bg pt-50 pb-40" data-background="assets/img/shape/footer-shape-1.svg">
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