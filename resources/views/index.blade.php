@extends('layout.main')
@section('main')

<!DOCTYPE html>

<!-- Slider -->
        <section class="tf-slideshow slider-default slider-effect-fade">
            <div dir="ltr" class="swiper tf-sw-slideshow" data-effect="fade" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-space-mb="0" data-loop="true" data-auto-play="true">
                <div class="swiper-wrapper">
               
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <img src="images/slider/slider-decor1.jpg" alt="fashion-slideshow">
                            <div class="box-content">
                                <div class="content-slider">
                                    <div class="box-title-slider">
                                        <p class="fade-item fade-item-1 subheading text-btn-uppercase text-white">BIKINIS & SWIMSUITS</p>
                                        <div class="fade-item fade-item-2 heading text-white title-display">Find Your <br> Signature Style</div>
                                    </div>
                                    <div class="fade-item fade-item-3 box-btn-slider">
                                        <a href="shop.php" class="tf-btn btn-fill btn-white"><span class="text">Explore Collection</span><i class="icon icon-arrowUpRight"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-pagination">
                <div class="container">
                    <div class="sw-dots sw-pagination-slider type-circle white-circle justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Slider -->
        <!-- collection -->
        <section class="flat-spacing-2 pb_0">
            <div class="container">
                <div class="heading-section-2 wow fadeInUp">
                    <h3>Categories you might like</h3>
                    <a href="shop-collection.php" class="btn-line">View All Collection</a>
                </div>
                <div class="flat-collection-circle wow fadeInUp" data-wow-delay="0.1s">
                    <div dir="ltr" class="swiper tf-sw-collection" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="20" data-space-md="20" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <!-- item 1 -->

                            @foreach($categories as $category)

                             
                            <div class="swiper-slide">
                                <div class="collection-circle hover-img">
                                    <a href="shop-collection.php" class="img-style">
                                        <img class="lazyload" data-src="images/collections/collection-circle/cls-circle1.jpg"
                                         src="images/collections/collection-circle/cls-circle1.jpg" alt="collection-img">
                                    </a>
                                    <div class="collection-content text-center">
                                        <div>
                                            <a href="shop-collection.php" class="cls-title">
                                                <h6 class="text">{{$category->name}}</h6>
                                                <i class="icon icon-arrowUpRight"></i>    
                                            </a>
                                        </div>
                                        <div class="count text-secondary"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- item 2 -->
                           
                        </div>
                        <div class="d-flex d-lg-none sw-pagination-collection sw-dots type-circle justify-content-center"></div>
                    </div>
                    <div class="nav-prev-collection d-none d-lg-flex nav-sw style-line nav-sw-left"><i class="icon icon-arrLeft"></i></div>
                    <div class="nav-next-collection d-none d-lg-flex nav-sw style-line nav-sw-right"><i class="icon icon-arrRight"></i></div>
                </div>
            </div>
        </section>
        <!-- /collection -->
        <!-- Seller -->
        <section class="flat-spacing-3">
            <div class="container">
                <div class="flat-animate-tab">
                    <ul class="tab-product justify-content-sm-center" role="tablist">
                        <li class="nav-tab-item" role="presentation">
                            <a href="#newArrivals" class="active" data-bs-toggle="tab">Our handcrafted collection</a>
                        </li>
                      
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="newArrivals" role="tabpanel">
                            <div class="tf-grid-layout tf-col-2 lg-col-3 xl-col-4">
                                <!-- card product 1 -->
                                @foreach($product as $products)
                                <div class="card-product wow fadeInUp">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/womens/women-19.jpg" src="images/products/womens/women-19.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/womens/women-20.jpg" src="images/products/womens/women-20.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">{{$products->name}}</a>
                                        <span class="price">{{$products->price}}</span>
                                    </div>
                                </div>
                                 @endforeach
                            
                            </div>
                            <div class="sec-btn text-center">
                                <a href="shop.php" class="btn-line">View All Products</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </section>
        <!-- /Seller -->
        <!-- Banner collection -->
        <section class="flat-spacing pt-0">
            <div class="container">
                <div class="tf-grid-layout md-col-2">
                    <div class="collection-default hover-img">
                        <a class="img-style">
                            <img class="lazyload" data-src="images/collections/banner-collection/banner-cls1.jpg" src="images/collections/banner-collection/banner-cls1.jpg" alt="banner-cls">
                        </a>
                        <div class="content">
                            <h3 class="title wow fadeInUp"><a href="shop-collection.php" class="link">Crossbody bag</a></h3>
                            <p class="desc wow fadeInUp">From beach to party: Perfect styles for every occasion.</p>
                            <div class="wow fadeInUp">
                                <a href="shop-collection.php" class="btn-line">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="collection-position hover-img">
                        <a class="img-style">
                            <img class="lazyload" data-src="images/collections/banner-collection/banner-cls2.jpg" src="images/collections/banner-collection/banner-cls2.jpg" alt="banner-cls">
                        </a>
                        <div class="content">
                            <h3 class="title"><a href="shop-collection.php" class="link text-white wow fadeInUp">Capsule Collection</a></h3>
                            <p class="desc text-white wow fadeInUp">Reserved for special occasions</p>
                            <div class=" wow fadeInUp">
                                <a href="shop-collection.php" class="btn-line style-white">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner collection -->
        <!-- Banner countdown -->
        <section class="bg-surface flat-spacing flat-countdown-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="banner-left">
                            <div class="box-title">
                                <h3 class="wow fadeInUp">Limited-Time Deals On!</h3>
                                <p class="text-secondary wow fadeInUp">Up to 50% Off Selected Styles. Don't Miss Out.</p>
                            </div>
                            <div class="btn-banner wow fadeInUp">
                                <a href="shop.php" class="tf-btn btn-fill"><span class="text">Shop Now</span><i class="icon icon-arrowUpRight"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="banner-img">
                            <img class="lazyload" data-src="images/banner/img-countdown1.png" src="images/banner/img-countdown1.png" alt="banner">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-right">
                            <div class="tf-countdown-lg">
                                <div class="js-countdown" data-timer="1007500" data-labels="Days,Hours,Mins,Secs"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- /Banner countdown -->
        <!-- Testimonial -->
        <section class="flat-spacing">
            <div class="container">
                <div class="heading-section text-center">
                    <h3 class="heading wow fadeInUp">Customer Say!</h3>
                    <p class="subheading wow fadeInUp">Our customers adore our products, and we constantly aim to delight them.</p>
                </div>
                <div dir="ltr" class="swiper tf-sw-testimonial" data-preview="2" data-tablet="1.3" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item hover-img">
                                <div class="img-style">
                                    <img data-src="images/testimonial/tes-1.jpg" src="images/testimonial/tes-1.jpg" alt="img-testimonial">
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip center">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-top">
                                        <div class="list-star-default">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                        <p class="text-secondary">"Fantastic shop! Great selection, fair prices, and friendly staff. Highly recommended. The quality of the products is exceptional, and the prices are very reasonable!"</p>
                                        <div class="box-author">
                                            <div class="text-title author">Sybil Sharp</div>
                                            <svg class="icon" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_15758_14563)">
                                                <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_15758_14563">
                                                <rect width="20" height="20" fill="white" transform="translate(0 0.684082)"/>
                                                </clipPath>
                                                </defs>
                                            </svg> 
                                        </div>
                                    </div>
                                    <div class="box-avt">
                                        <div class="avatar avt-60 round">
                                            <img src="images/avatar/user-4.jpg" alt="avt">
                                        </div>
                                        <div class="box-price">
                                            <p class="text-title text-line-clamp-1">Contrasting sheepskin sweatshirt</p>
                                            <div class="text-button price">$60.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item hover-img">
                                <div class="img-style">
                                    <img data-src="images/testimonial/tes-2.jpg" src="images/testimonial/tes-2.jpg" alt="img-testimonial">
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip center">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-top">
                                        <div class="list-star-default">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                        <p class="text-secondary">"I absolutely love this shop! The products are high-quality and the customer service is excellent. I always leave with exactly what I need and a smile on my face."</p>
                                        <div class="box-author">
                                            <div class="text-title author">Mark G.</div>
                                            <svg class="icon" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_15758)">
                                                <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_15758">
                                                <rect width="20" height="20" fill="white" transform="translate(0 0.684082)"/>
                                                </clipPath>
                                                </defs>
                                            </svg> 
                                        </div>
                                    </div>
                                    <div class="box-avt">
                                        <div class="avatar avt-60 round">
                                            <img src="images/avatar/user-5.jpg" alt="avt">
                                        </div>
                                        <div class="box-price">
                                            <p class="text-title text-line-clamp-1">Contrasting sheepskin sweatshirt</p>
                                            <div class="text-button price">$60.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item hover-img">
                                <div class="img-style">
                                    <img data-src="images/testimonial/tes-1.jpg" src="images/testimonial/tes-1.jpg" alt="img-testimonial">
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip center">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-top">
                                        <div class="list-star-default">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                        <p class="text-secondary">"Fantastic shop! Great selection, fair prices, and friendly staff. Highly recommended. The quality of the products is exceptional, and the prices are very reasonable!"</p>
                                        <div class="box-author">
                                            <div class="text-title author">Sybil Sharp</div>
                                            <svg class="icon" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_15758_14)">
                                                <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_15758_14">
                                                <rect width="20" height="20" fill="white" transform="translate(0 0.684082)"/>
                                                </clipPath>
                                                </defs>
                                            </svg> 
                                        </div>
                                    </div>
                                    <div class="box-avt">
                                        <div class="avatar avt-60 round">
                                            <img src="images/avatar/user-4.jpg" alt="avt">
                                        </div>
                                        <div class="box-price">
                                            <p class="text-title text-line-clamp-1">Contrasting sheepskin sweatshirt</p>
                                            <div class="text-button price">$60.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item hover-img">
                                <div class="img-style">
                                    <img data-src="images/testimonial/tes-2.jpg" src="images/testimonial/tes-2.jpg" alt="img-testimonial">
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip center">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-top">
                                        <div class="list-star-default">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                        <p class="text-secondary">"I absolutely love this shop! The products are high-quality and the customer service is excellent. I always leave with exactly what I need and a smile on my face."</p>
                                        <div class="box-author">
                                            <div class="text-title author">Mark G.</div>
                                            <svg class="icon" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_15758_145)">
                                                <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_15758_145">
                                                <rect width="20" height="20" fill="white" transform="translate(0 0.684082)"/>
                                                </clipPath>
                                                </defs>
                                            </svg> 
                                        </div>
                                    </div>
                                    <div class="box-avt">
                                        <div class="avatar avt-60 round">
                                            <img src="images/avatar/user-5.jpg" alt="avt">
                                        </div>
                                        <div class="box-price">
                                            <p class="text-title text-line-clamp-1">Contrasting sheepskin sweatshirt</p>
                                            <div class="text-button price">$60.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-testimonial sw-dots type-circle d-flex justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->
        <!-- Latest new -->
        <section class="flat-spacing pt-0">
            <div class="container">
                <div class="heading-section text-center">
                    <h3 class="heading wow fadeInUp">News insight</h3>
                    <p class="subheading text-secondary wow fadeInUp">Browse our Top Trending: the hottest picks loved by all.</p>
                </div>
                <div dir="ltr" class="swiper tf-sw-recent" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="wg-blog style-1 hover-image wow fadeInUp">
                                <div class="image">
                                    <img class="lazyload" data-src="images/blog/blog-grid-1.jpg" src="images/blog/blog-grid-1.jpg" alt="">
                                </div>
                                <div class="content">
                                    <p class="text-btn-uppercase text-secondary-2">13 August</p>
                                    <div>
                                        <h6 class="title fw-5">
                                            <a class="link" href="blog-detail.php">Top 10 Summer Fashion Trends You Can't Miss in 2024</a>
                                        </h6>
                                        <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wg-blog style-1 hover-image wow fadeInUp" data-wow-delay="0.1s">
                                <div class="image">
                                    <img class="lazyload" data-src="images/blog/blog-grid-8.jpg" src="images/blog/blog-grid-8.jpg" alt="">
                                </div>
                                <div class="content">
                                    <p class="text-btn-uppercase text-secondary-2">13 August</p>
                                    <div>
                                        <h6 class="title fw-5">
                                            <a class="link" href="blog-detail.php">How to Effortlessly Style Your Office Wear for a Modern Look</a>
                                        </h6>
                                        <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wg-blog style-1 hover-image wow fadeInUp" data-wow-delay="0.2s">
                                <div class="image">
                                    <img class="lazyload" data-src="images/blog/blog-grid-6.jpg" src="images/blog/blog-grid-6.jpg" alt="">
                                </div>
                                <div class="content">
                                    <p class="text-btn-uppercase text-secondary-2">13 August</p>
                                    
                                    <div>
                                        <h6 class="title fw-5">
                                            <a class="link" href="blog-detail.php">Sustainable Fashion: Eco-Friendly Brands to Watch This Year</a>
                                        </h6>
                                        <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.</div>
                                    </div>
                                </div>
                            </div>
                        </div>       
                    </div>
                    <div class="sw-pagination-recent sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Latest new -->
        <!-- Gallery shop gram -->
        <section>
            <div class="container">
                <div class="heading-section text-center">
                    <h3 class="heading wow fadeInUp">Shop Instagram</h3>
                    <p class="subheading text-secondary wow fadeInUp">Elevate your wardrobe with fresh finds today!</p>
                </div>
                <div dir="ltr" class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="10" data-space-md="10" data-space="8" data-pagination="2" data-pagination-md="3" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay=".1s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/gallery/gallery-1.jpg" src="images/gallery/gallery-1.jpg" alt="image-gallery">
                                </div>
                                <a href="product-inner.php" class="box-icon hover-tooltip"><span class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay=".2s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/gallery/gallery-2.jpg" src="images/gallery/gallery-2.jpg" alt="image-gallery">
                                </div>
                                <a href="product-inner.php" class="box-icon hover-tooltip"><span class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay=".3s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/gallery/gallery-3.jpg" src="images/gallery/gallery-3.jpg" alt="image-gallery">
                                </div>
                                <a href="product-inner.php" class="box-icon hover-tooltip"><span class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay=".4s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/gallery/gallery-4.jpg" src="images/gallery/gallery-4.jpg" alt="image-gallery">
                                </div>
                                <a href="product-inner.php" class="box-icon hover-tooltip"><span class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay=".5s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/gallery/gallery-5.jpg" src="images/gallery/gallery-5.jpg" alt="image-gallery">
                                </div>
                                <a href="product-inner.php" class="box-icon hover-tooltip"><span class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-gallery sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Gallery shop gram -->
        <!-- Iconbox -->
        <section class="flat-spacing">
            <div class="container">
                <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-return"></span></div>
                                <div class="content text-center">
                                    <h6>14-Day Returns</h6>
                                    <p class="text-secondary">Risk-free shopping with easy returns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-shipping"></span></div>
                                <div class="content text-center">
                                    <h6>Free Shipping</h6>
                                    <p class="text-secondary">No extra costs, just the price you see.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-headset"></span></div>
                                <div class="content text-center">
                                    <h6>24/7 Support</h6>
                                    <p class="text-secondary">24/7 support, always here just for you</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-sealCheck"></span></div>
                                <div class="content text-center">
                                    <h6>Member Discounts</h6>
                                    <p class="text-secondary">Special prices for our loyal customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-iconbox sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Iconbox -->

        <!-- Shopping Cart -->
        
        <div class="d-flex flex-column flex-grow-1 h-100">
            <div class="header">
                <h5 class="title">Shopping Cart</h5>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="wrap">
                <div class="tf-mini-cart-threshold">
                    <div class="tf-progress-bar">
                        <div class="value" style="width: 0%;" data-progress="75">
                            <i class="icon icon-shipping"></i>
                        </div>
                    </div>
                    <div class="text-caption-1">
                        Congratulations! You've got free shipping!
                    </div>
                </div>
                <div class="tf-mini-cart-wrap">
                    <div class="tf-mini-cart-main">
                        <div class="tf-mini-cart-sroll">
                            <div class="tf-mini-cart-items">
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="images/products/womens/women-19.jpg" src="images/products/womens/women-19.jpg" alt="">
                                    </div>
                                    <div class="tf-mini-cart-info flex-grow-1">
                                        <div class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                                            <div class="text-title"><a href="product-inner.php" class="link text-line-clamp-1">Contrasting sheepskin</a></div>
                                            <div class="text-button tf-btn-remove remove">Remove</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                                            <div class="text-secondary-2">XL/Blue</div>
                                            <div class="text-button">1 X $60.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="images/products/womens/women-1.jpg" src="images/products/womens/women-1.jpg" alt="">
                                    </div>
                                    <div class="tf-mini-cart-info flex-grow-1">
                                        <div class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                                            <div class="text-title"><a href="product-inner.php" class="link text-line-clamp-1">Suede leggings</a></div>
                                            <div class="text-button tf-btn-remove remove">Remove</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                                            <div class="text-secondary-2">XL/Blue</div>
                                            <div class="text-button">1 X $60.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="images/products/womens/women-2.jpg" src="images/products/womens/women-2.jpg" alt="">
                                    </div>
                                    <div class="tf-mini-cart-info flex-grow-1">
                                        <div class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                                            <div class="text-title"><a href="product-inner.php" class="link text-line-clamp-1">Faux-leather trousers</a></div>
                                            <div class="text-button tf-btn-remove remove">Remove</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                                            <div class="text-secondary-2">XL/Blue</div>
                                            <div class="text-button">1 X $60.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="images/products/womens/women-3.jpg" src="images/products/womens/women-3.jpg" alt="">
                                    </div>
                                    <div class="tf-mini-cart-info flex-grow-1">
                                        <div class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                                            <div class="text-title"><a href="product-inner.php" class="link text-line-clamp-1">Biker-style leggings</a></div>
                                            <div class="text-button tf-btn-remove remove">Remove</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                                            <div class="text-secondary-2">XL/Blue</div>
                                            <div class="text-button">1 X $60.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="images/products/womens/women-4.jpg" src="images/products/womens/women-4.jpg" alt="">
                                    </div>
                                    <div class="tf-mini-cart-info flex-grow-1">
                                        <div class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                                            <div class="text-title"><a href="product-inner.php" class="link text-line-clamp-1">Jacquard fluid trousers</a></div>
                                            <div class="text-button tf-btn-remove remove">Remove</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                                            <div class="text-secondary-2">XL/Blue</div>
                                            <div class="text-button">1 X $60.00</div>
                                        </div>
                                    </div>
                                </div>
                            

                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-bottom">
                        <div class="tf-mini-cart-tool">
                            <div class="tf-mini-cart-tool-btn btn-add-note">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_6133_36620)">
                                    <path d="M10 3.33325H4.16667C3.72464 3.33325 3.30072 3.50885 2.98816 3.82141C2.67559 4.13397 2.5 4.55789 2.5 4.99992V16.6666C2.5 17.1086 2.67559 17.5325 2.98816 17.8451C3.30072 18.1577 3.72464 18.3333 4.16667 18.3333H15.8333C16.2754 18.3333 16.6993 18.1577 17.0118 17.8451C17.3244 17.5325 17.5 17.1086 17.5 16.6666V10.8333" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.25 2.0832C16.5815 1.75168 17.0312 1.56543 17.5 1.56543C17.9688 1.56543 18.4185 1.75168 18.75 2.0832C19.0815 2.41472 19.2678 2.86436 19.2678 3.3332C19.2678 3.80204 19.0815 4.25168 18.75 4.5832L10.8333 12.4999L7.5 13.3332L8.33333 9.99986L16.25 2.0832Z" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_6133_36620">
                                    <rect width="20" height="20" fill="white" transform="translate(0.833008)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                <div class="text-caption-1">Note</div>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-estimate-shipping">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.333 2.5H0.833008V13.3333H13.333V2.5Z" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.333 6.66675H16.6663L19.1663 9.16675V13.3334H13.333V6.66675Z" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4.58333 17.4999C5.73393 17.4999 6.66667 16.5672 6.66667 15.4166C6.66667 14.266 5.73393 13.3333 4.58333 13.3333C3.43274 13.3333 2.5 14.266 2.5 15.4166C2.5 16.5672 3.43274 17.4999 4.58333 17.4999Z" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.4163 17.4999C16.5669 17.4999 17.4997 16.5672 17.4997 15.4166C17.4997 14.266 16.5669 13.3333 15.4163 13.3333C14.2657 13.3333 13.333 14.266 13.333 15.4166C13.333 16.5672 14.2657 17.4999 15.4163 17.4999Z" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div class="text-caption-1">Shipping</div>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-add-gift">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="currentColor">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.99566 2.73409C2.99566 0.55401 5.42538 -0.746668 7.23916 0.463462L8.50073 1.30516L9.7623 0.463462C11.5761 -0.746668 14.0058 0.55401 14.0058 2.73409V3.24744H14.8225C15.9633 3.24744 16.8881 4.17233 16.8881 5.31312V6.82566C16.8881 7.21396 16.5734 7.52873 16.1851 7.52873H15.8905V15.1877C15.8905 15.1905 15.8905 15.1933 15.8905 15.196C15.886 16.7454 14.6286 18 13.0782 18H3.92323C2.37003 18 1.11091 16.7409 1.11091 15.1877V7.52877H0.81636C0.42806 7.52877 0.113281 7.21399 0.113281 6.82569V5.31316C0.113281 4.17228 1.03812 3.24744 2.179 3.24744H2.99566V2.73409ZM4.40181 3.24744H7.79765V2.52647L6.45874 1.63317C5.57987 1.0468 4.40181 1.67677 4.40181 2.73409V3.24744ZM9.20381 2.52647V3.24744H12.5996V2.73409C12.5996 1.67677 11.4216 1.0468 10.5427 1.63317L9.20381 2.52647ZM2.179 4.6536C1.81472 4.6536 1.51944 4.94888 1.51944 5.31316V6.12261H5.73398L5.734 4.6536H2.179ZM5.73401 7.52877V13.9306C5.73401 14.1806 5.86682 14.4119 6.08281 14.5379C6.29879 14.6639 6.56545 14.6657 6.78312 14.5426L8.50073 13.5715L10.2183 14.5426C10.436 14.6657 10.7027 14.6639 10.9187 14.5379C11.1346 14.4119 11.2674 14.1806 11.2674 13.9306V7.52873H14.4844V15.1603C14.4844 15.1627 14.4843 15.1651 14.4843 15.1675V15.1877C14.4843 15.9643 13.8548 16.5938 13.0782 16.5938H3.92323C3.14663 16.5938 2.51707 15.9643 2.51707 15.1877V7.52877H5.73401ZM15.482 6.12258V5.31312C15.482 4.94891 15.1867 4.6536 14.8225 4.6536H11.2674V6.12258H15.482ZM9.86129 4.6536H7.14017V12.7254L8.15469 12.1518C8.36941 12.0304 8.63204 12.0304 8.84676 12.1518L9.86129 12.7254V4.6536Z">
                                    </path>
                                </svg>
                                <div class="text-caption-1">Gift</div>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-add-coupon">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.3247 11.1751L11.3497 17.1501C11.1949 17.305 11.0111 17.428 10.8087 17.5118C10.6064 17.5957 10.3895 17.6389 10.1705 17.6389C9.95148 17.6389 9.7346 17.5957 9.53227 17.5118C9.32994 17.428 9.14613 17.305 8.99134 17.1501L1.83301 10.0001V1.66675H10.1663L17.3247 8.82508C17.6351 9.13735 17.8093 9.55977 17.8093 10.0001C17.8093 10.4404 17.6351 10.8628 17.3247 11.1751V11.1751Z" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.99902 5.83325H6.00902" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div class="text-caption-1">Coupon</div>
                            </div>
                        </div>
                        <div class="tf-mini-cart-bottom-wrap">
                            <div class="tf-cart-totals-discounts">
                                <h5>Subtotal</h5>
                                <h5 class="tf-totals-total-value">$186,99</h5>
                            </div>
                            <div class="tf-cart-checkbox">
                                <div class="tf-checkbox-wrapp">
                                    <input class="" type="checkbox" id="CartDrawer-Form_agree" name="agree_checkbox">
                                    <div>
                                        <i class="icon-check"></i>
                                    </div>
                                </div>
                                <label for="CartDrawer-Form_agree">
                                    I agree with 
                                    <a href="term-of-use.php" title="Terms of Service">Terms & Conditions</a>
                                </label>
                            </div>
                            <div class="tf-mini-cart-view-checkout">
                                <a href="shopping-cart.php" class="tf-btn w-100 btn-white radius-4 has-border"><span class="text">View cart</span></a>
                                <a href="shopping-cart.php" class="tf-btn w-100 btn-fill radius-4"><span class="text">Check Out</span></a>
                            </div>
                            <div class="text-center">
                                <a class="link text-btn-uppercase" href="shop.php">Or continue shopping</a>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-note">
                        <div class="tf-mini-cart-tool-content">
                            <label for="Cart-note" class="tf-mini-cart-tool-text">
                                <span class="icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_6766_32777)">
                                        <path d="M9.16699 3.33325H3.33366C2.89163 3.33325 2.46771 3.50885 2.15515 3.82141C1.84259 4.13397 1.66699 4.55789 1.66699 4.99992V16.6666C1.66699 17.1086 1.84259 17.5325 2.15515 17.8451C2.46771 18.1577 2.89163 18.3333 3.33366 18.3333H15.0003C15.4424 18.3333 15.8663 18.1577 16.1788 17.8451C16.4914 17.5325 16.667 17.1086 16.667 16.6666V10.8333" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.417 2.0832C15.7485 1.75168 16.1981 1.56543 16.667 1.56543C17.1358 1.56543 17.5855 1.75168 17.917 2.0832C18.2485 2.41472 18.4348 2.86436 18.4348 3.3332C18.4348 3.80204 18.2485 4.25168 17.917 4.5832L10.0003 12.4999L6.66699 13.3332L7.50033 9.99986L15.417 2.0832Z" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_6766_32777">
                                        <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="text-title">Note</span>
                            </label>
                            <form class="form-add-note tf-mini-cart-tool-wrap">
                                <fieldset class="d-flex">
                                    <textarea name="note" id="Cart-note" placeholder="Add special instructions for your order..."></textarea>
                                </fieldset>
                                <div class="tf-cart-tool-btns">
                                    <button type="submit" class="btn-style-2 w-100"><span class="text text-btn-uppercase">Save</span></button>
                                    <div class="text-center w-100 text-btn-uppercase tf-mini-cart-tool-close">Cancel</div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tf-mini-cart-tool-openable estimate-shipping">
                        <div class="tf-mini-cart-tool-content">
                            <label class="tf-mini-cart-tool-text">
                                <span class="icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_6766_32777)">
                                        <path d="M9.16699 3.33325H3.33366C2.89163 3.33325 2.46771 3.50885 2.15515 3.82141C1.84259 4.13397 1.66699 4.55789 1.66699 4.99992V16.6666C1.66699 17.1086 1.84259 17.5325 2.15515 17.8451C2.46771 18.1577 2.89163 18.3333 3.33366 18.3333H15.0003C15.4424 18.3333 15.8663 18.1577 16.1788 17.8451C16.4914 17.5325 16.667 17.1086 16.667 16.6666V10.8333" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.417 2.0832C15.7485 1.75168 16.1981 1.56543 16.667 1.56543C17.1358 1.56543 17.5855 1.75168 17.917 2.0832C18.2485 2.41472 18.4348 2.86436 18.4348 3.3332C18.4348 3.80204 18.2485 4.25168 17.917 4.5832L10.0003 12.4999L6.66699 13.3332L7.50033 9.99986L15.417 2.0832Z" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_6766_32777">
                                        <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="text-title">Estimate shipping rates</span>
                            </label>
                            <form class="form-estimate-shipping tf-mini-cart-tool-wrap">
                                <div class="mb_12">
                                    <div class="text-caption-1 text-secondary mb_8">Country/region</div>
                                    <div class="tf-select">
                                        <select class="">
                                            <option selected="selected">United States</option>
                                            <option>China</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb_12">
                                    <div class="text-caption-1 text-secondary mb_8">State</div>
                                    <div class="tf-select">
                                <select class="text-title" name="address[country]" data-default="">
                                    <option value="Australia" data-provinces="[['Australian Capital Territory','Australian Capital Territory'],['New South Wales','New South Wales'],['Northern Territory','Northern Territory'],['Queensland','Queensland'],['South Australia','South Australia'],['Tasmania','Tasmania'],['Victoria','Victoria'],['Western Australia','Western Australia']]">Australia</option>
                                    <option value="Austria" data-provinces="[]">Austria</option>
                                    <option value="Belgium" data-provinces="[]">Belgium</option>
                                    <option value="Canada" data-provinces="[['Alberta','Alberta'],['British Columbia','British Columbia'],['Manitoba','Manitoba'],['New Brunswick','New Brunswick'],['Newfoundland and Labrador','Newfoundland and Labrador'],['Northwest Territories','Northwest Territories'],['Nova Scotia','Nova Scotia'],['Nunavut','Nunavut'],['Ontario','Ontario'],['Prince Edward Island','Prince Edward Island'],['Quebec','Quebec'],['Saskatchewan','Saskatchewan'],['Yukon','Yukon']]">Canada</option>
                                    <option value="Czech Republic" data-provinces="[]">Czechia</option>
                                    <option value="Denmark" data-provinces="[]">Denmark</option>
                                    <option value="Finland" data-provinces="[]">Finland</option>
                                    <option value="France" data-provinces="[]">France</option>
                                    <option value="Germany" data-provinces="[]">Germany</option>
                                    <option value="Hong Kong" data-provinces="[['Hong Kong Island','Hong Kong Island'],['Kowloon','Kowloon'],['New Territories','New Territories']]">Hong Kong SAR</option>
                                    <option value="Ireland" data-provinces="[['Carlow','Carlow'],['Cavan','Cavan'],['Clare','Clare'],['Cork','Cork'],['Donegal','Donegal'],['Dublin','Dublin'],['Galway','Galway'],['Kerry','Kerry'],['Kildare','Kildare'],['Kilkenny','Kilkenny'],['Laois','Laois'],['Leitrim','Leitrim'],['Limerick','Limerick'],['Longford','Longford'],['Louth','Louth'],['Mayo','Mayo'],['Meath','Meath'],['Monaghan','Monaghan'],['Offaly','Offaly'],['Roscommon','Roscommon'],['Sligo','Sligo'],['Tipperary','Tipperary'],['Waterford','Waterford'],['Westmeath','Westmeath'],['Wexford','Wexford'],['Wicklow','Wicklow']]">Ireland</option>
                                    <option value="Israel" data-provinces="[]">Israel</option>
                                    <option value="Italy" data-provinces="[['Agrigento','Agrigento'],['Alessandria','Alessandria'],['Ancona','Ancona'],['Aosta','Aosta Valley'],['Arezzo','Arezzo'],['Ascoli Piceno','Ascoli Piceno'],['Asti','Asti'],['Avellino','Avellino'],['Bari','Bari'],['Barletta-Andria-Trani','Barletta-Andria-Trani'],['Belluno','Belluno'],['Benevento','Benevento'],['Bergamo','Bergamo'],['Biella','Biella'],['Bologna','Bologna'],['Bolzano','South Tyrol'],['Brescia','Brescia'],['Brindisi','Brindisi'],['Cagliari','Cagliari'],['Caltanissetta','Caltanissetta'],['Campobasso','Campobasso'],['Carbonia-Iglesias','Carbonia-Iglesias'],['Caserta','Caserta'],['Catania','Catania'],['Catanzaro','Catanzaro'],['Chieti','Chieti'],['Como','Como'],['Cosenza','Cosenza'],['Cremona','Cremona'],['Crotone','Crotone'],['Cuneo','Cuneo'],['Enna','Enna'],['Fermo','Fermo'],['Ferrara','Ferrara'],['Firenze','Florence'],['Foggia','Foggia'],['Forlì-Cesena','Forlì-Cesena'],['Frosinone','Frosinone'],['Genova','Genoa'],['Gorizia','Gorizia'],['Grosseto','Grosseto'],['Imperia','Imperia'],['Isernia','Isernia'],['L'Aquila','L’Aquila'],['La Spezia','La Spezia'],['Latina','Latina'],['Lecce','Lecce'],['Lecco','Lecco'],['Livorno','Livorno'],['Lodi','Lodi'],['Lucca','Lucca'],['Macerata','Macerata'],['Mantova','Mantua'],['Massa-Carrara','Massa and Carrara'],['Matera','Matera'],['Medio Campidano','Medio Campidano'],['Messina','Messina'],['Milano','Milan'],['Modena','Modena'],['Monza e Brianza','Monza and Brianza'],['Napoli','Naples'],['Novara','Novara'],['Nuoro','Nuoro'],['Ogliastra','Ogliastra'],['Olbia-Tempio','Olbia-Tempio'],['Oristano','Oristano'],['Padova','Padua'],['Palermo','Palermo'],['Parma','Parma'],['Pavia','Pavia'],['Perugia','Perugia'],['Pesaro e Urbino','Pesaro and Urbino'],['Pescara','Pescara'],['Piacenza','Piacenza'],['Pisa','Pisa'],['Pistoia','Pistoia'],['Pordenone','Pordenone'],['Potenza','Potenza'],['Prato','Prato'],['Ragusa','Ragusa'],['Ravenna','Ravenna'],['Reggio Calabria','Reggio Calabria'],['Reggio Emilia','Reggio Emilia'],['Rieti','Rieti'],['Rimini','Rimini'],['Roma','Rome'],['Rovigo','Rovigo'],['Salerno','Salerno'],['Sassari','Sassari'],['Savona','Savona'],['Siena','Siena'],['Siracusa','Syracuse'],['Sondrio','Sondrio'],['Taranto','Taranto'],['Teramo','Teramo'],['Terni','Terni'],['Torino','Turin'],['Trapani','Trapani'],['Trento','Trentino'],['Treviso','Treviso'],['Trieste','Trieste'],['Udine','Udine'],['Varese','Varese'],['Venezia','Venice'],['Verbano-Cusio-Ossola','Verbano-Cusio-Ossola'],['Vercelli','Vercelli'],['Verona','Verona'],['Vibo Valentia','Vibo Valentia'],['Vicenza','Vicenza'],['Viterbo','Viterbo']]">Italy</option>
                                    <option value="Japan" data-provinces="[['Aichi','Aichi'],['Akita','Akita'],['Aomori','Aomori'],['Chiba','Chiba'],['Ehime','Ehime'],['Fukui','Fukui'],['Fukuoka','Fukuoka'],['Fukushima','Fukushima'],['Gifu','Gifu'],['Gunma','Gunma'],['Hiroshima','Hiroshima'],['Hokkaidō','Hokkaido'],['Hyōgo','Hyogo'],['Ibaraki','Ibaraki'],['Ishikawa','Ishikawa'],['Iwate','Iwate'],['Kagawa','Kagawa'],['Kagoshima','Kagoshima'],['Kanagawa','Kanagawa'],['Kumamoto','Kumamoto'],['Kyōto','Kyoto'],['Kōchi','Kochi'],['Mie','Mie'],['Miyagi','Miyagi'],['Miyazaki','Miyazaki'],['Nagano','Nagano'],['Nagasaki','Nagasaki'],['Nara','Nara'],['Niigata','Niigata'],['Okayama','Okayama'],['Okinawa','Okinawa'],['Saga','Saga'],['Saitama','Saitama'],['Shiga','Shiga'],['Shimane','Shimane'],['Shizuoka','Shizuoka'],['Tochigi','Tochigi'],['Tokushima','Tokushima'],['Tottori','Tottori'],['Toyama','Toyama'],['Tōkyō','Tokyo'],['Wakayama','Wakayama'],['Yamagata','Yamagata'],['Yamaguchi','Yamaguchi'],['Yamanashi','Yamanashi'],['Ōita','Oita'],['Ōsaka','Osaka']]">Japan</option>
                                    <option value="Malaysia" data-provinces="[['Johor','Johor'],['Kedah','Kedah'],['Kelantan','Kelantan'],['Kuala Lumpur','Kuala Lumpur'],['Labuan','Labuan'],['Melaka','Malacca'],['Negeri Sembilan','Negeri Sembilan'],['Pahang','Pahang'],['Penang','Penang'],['Perak','Perak'],['Perlis','Perlis'],['Putrajaya','Putrajaya'],['Sabah','Sabah'],['Sarawak','Sarawak'],['Selangor','Selangor'],['Terengganu','Terengganu']]">Malaysia</option>
                                    <option value="Netherlands" data-provinces="[]">Netherlands</option>
                                    <option value="New Zealand" data-provinces="[['Auckland','Auckland'],['Bay of Plenty','Bay of Plenty'],['Canterbury','Canterbury'],['Chatham Islands','Chatham Islands'],['Gisborne','Gisborne'],['Hawke's Bay','Hawke’s Bay'],['Manawatu-Wanganui','Manawatū-Whanganui'],['Marlborough','Marlborough'],['Nelson','Nelson'],['Northland','Northland'],['Otago','Otago'],['Southland','Southland'],['Taranaki','Taranaki'],['Tasman','Tasman'],['Waikato','Waikato'],['Wellington','Wellington'],['West Coast','West Coast']]">New Zealand</option>
                                    <option value="Norway" data-provinces="[]">Norway</option>
                                    <option value="Poland" data-provinces="[]">Poland</option>
                                    <option value="Portugal" data-provinces="[['Aveiro','Aveiro'],['Açores','Azores'],['Beja','Beja'],['Braga','Braga'],['Bragança','Bragança'],['Castelo Branco','Castelo Branco'],['Coimbra','Coimbra'],['Faro','Faro'],['Guarda','Guarda'],['Leiria','Leiria'],['Lisboa','Lisbon'],['Madeira','Madeira'],['Portalegre','Portalegre'],['Porto','Porto'],['Santarém','Santarém'],['Setúbal','Setúbal'],['Viana do Castelo','Viana do Castelo'],['Vila Real','Vila Real'],['Viseu','Viseu'],['Évora','Évora']]">Portugal</option>
                                    <option value="Singapore" data-provinces="[]">Singapore</option>
                                    <option value="South Korea" data-provinces="[['Busan','Busan'],['Chungbuk','North Chungcheong'],['Chungnam','South Chungcheong'],['Daegu','Daegu'],['Daejeon','Daejeon'],['Gangwon','Gangwon'],['Gwangju','Gwangju City'],['Gyeongbuk','North Gyeongsang'],['Gyeonggi','Gyeonggi'],['Gyeongnam','South Gyeongsang'],['Incheon','Incheon'],['Jeju','Jeju'],['Jeonbuk','North Jeolla'],['Jeonnam','South Jeolla'],['Sejong','Sejong'],['Seoul','Seoul'],['Ulsan','Ulsan']]">South Korea</option>
                                    <option value="Spain" data-provinces="[['A Coruña','A Coruña'],['Albacete','Albacete'],['Alicante','Alicante'],['Almería','Almería'],['Asturias','Asturias Province'],['Badajoz','Badajoz'],['Balears','Balears Province'],['Barcelona','Barcelona'],['Burgos','Burgos'],['Cantabria','Cantabria Province'],['Castellón','Castellón'],['Ceuta','Ceuta'],['Ciudad Real','Ciudad Real'],['Cuenca','Cuenca'],['Cáceres','Cáceres'],['Cádiz','Cádiz'],['Córdoba','Córdoba'],['Girona','Girona'],['Granada','Granada'],['Guadalajara','Guadalajara'],['Guipúzcoa','Gipuzkoa'],['Huelva','Huelva'],['Huesca','Huesca'],['Jaén','Jaén'],['La Rioja','La Rioja Province'],['Las Palmas','Las Palmas'],['León','León'],['Lleida','Lleida'],['Lugo','Lugo'],['Madrid','Madrid Province'],['Melilla','Melilla'],['Murcia','Murcia'],['Málaga','Málaga'],['Navarra','Navarra'],['Ourense','Ourense'],['Palencia','Palencia'],['Pontevedra','Pontevedra'],['Salamanca','Salamanca'],['Santa Cruz de Tenerife','Santa Cruz de Tenerife'],['Segovia','Segovia'],['Sevilla','Seville'],['Soria','Soria'],['Tarragona','Tarragona'],['Teruel','Teruel'],['Toledo','Toledo'],['Valencia','Valencia'],['Valladolid','Valladolid'],['Vizcaya','Biscay'],['Zamora','Zamora'],['Zaragoza','Zaragoza'],['Álava','Álava'],['Ávila','Ávila']]">Spain</option>
                                    <option value="Sweden" data-provinces="[]">Sweden</option>
                                    <option value="Switzerland" data-provinces="[]">Switzerland</option>
                                    <option value="United Arab Emirates" data-provinces="[['Abu Dhabi','Abu Dhabi'],['Ajman','Ajman'],['Dubai','Dubai'],['Fujairah','Fujairah'],['Ras al-Khaimah','Ras al-Khaimah'],['Sharjah','Sharjah'],['Umm al-Quwain','Umm al-Quwain']]">United Arab Emirates</option>
                                    <option value="United Kingdom" data-provinces="[['British Forces','British Forces'],['England','England'],['Northern Ireland','Northern Ireland'],['Scotland','Scotland'],['Wales','Wales']]">United Kingdom</option>
                                    <option selected value="United States" data-provinces="[['Alabama','Alabama'],['Alaska','Alaska'],['American Samoa','American Samoa'],['Arizona','Arizona'],['Arkansas','Arkansas'],['Armed Forces Americas','Armed Forces Americas'],['Armed Forces Europe','Armed Forces Europe'],['Armed Forces Pacific','Armed Forces Pacific'],['California','California'],['Colorado','Colorado'],['Connecticut','Connecticut'],['Delaware','Delaware'],['District of Columbia','Washington DC'],['Federated States of Micronesia','Micronesia'],['Florida','Florida'],['Georgia','Georgia'],['Guam','Guam'],['Hawaii','Hawaii'],['Idaho','Idaho'],['Illinois','Illinois'],['Indiana','Indiana'],['Iowa','Iowa'],['Kansas','Kansas'],['Kentucky','Kentucky'],['Louisiana','Louisiana'],['Maine','Maine'],['Marshall Islands','Marshall Islands'],['Maryland','Maryland'],['Massachusetts','Massachusetts'],['Michigan','Michigan'],['Minnesota','Minnesota'],['Mississippi','Mississippi'],['Missouri','Missouri'],['Montana','Montana'],['Nebraska','Nebraska'],['Nevada','Nevada'],['New Hampshire','New Hampshire'],['New Jersey','New Jersey'],['New Mexico','New Mexico'],['New York','New York'],['North Carolina','North Carolina'],['North Dakota','North Dakota'],['Northern Mariana Islands','Northern Mariana Islands'],['Ohio','Ohio'],['Oklahoma','Oklahoma'],['Oregon','Oregon'],['Palau','Palau'],['Pennsylvania','Pennsylvania'],['Puerto Rico','Puerto Rico'],['Rhode Island','Rhode Island'],['South Carolina','South Carolina'],['South Dakota','South Dakota'],['Tennessee','Tennessee'],['Texas','Texas'],['Utah','Utah'],['Vermont','Vermont'],['Virgin Islands','U.S. Virgin Islands'],['Virginia','Virginia'],['Washington','Washington'],['West Virginia','West Virginia'],['Wisconsin','Wisconsin'],['Wyoming','Wyoming']]">United States</option>
                                    <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                </select>
                            </div>
                                </div>
                                <fieldset class="">
                                    <div class="text-caption-1 text-secondary mb_8">Postal/Zip Code</div>
                                    <input class="" type="text" placeholder="100000" name="text" tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <div class="tf-cart-tool-btns">
                                    <button type="submit" class="btn-style-2 w-100"><span class="text text-btn-uppercase">Calculator</span></button>
                                    <div class="text-center w-100 text-btn-uppercase tf-mini-cart-tool-close">Cancel</div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-gift">
                        <form class="tf-product-form-addgift">
                            <div class="tf-mini-cart-tool-content">
                                <div class="tf-mini-cart-tool-text">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.65957 3.64545C4.65957 0.73868 7.89921 -0.995558 10.3176 0.617949L11.9997 1.74021L13.6818 0.617949C16.1001 -0.995558 19.3398 0.73868 19.3398 3.64545V4.32992H20.4286C21.9498 4.32992 23.1829 5.56311 23.1829 7.08416V9.10087C23.1829 9.61861 22.7632 10.0383 22.2454 10.0383H21.8528V20.2502C21.8528 20.254 21.8527 20.2577 21.8527 20.2614C21.8467 22.3272 20.1702 24 18.103 24H5.89634C3.82541 24 2.14658 22.3212 2.14658 20.2502V10.0384H1.75384C1.23611 10.0384 0.816406 9.61865 0.816406 9.10092V7.08421C0.816406 5.56304 2.04953 4.32992 3.57069 4.32992H4.65957V3.64545ZM6.53445 4.32992H11.0622V3.36863L9.27702 2.17757C8.10519 1.39573 6.53445 2.2357 6.53445 3.64545V4.32992ZM12.9371 3.36863V4.32992H17.4649V3.64545C17.4649 2.2357 15.8942 1.39573 14.7223 2.17756L12.9371 3.36863ZM3.57069 6.2048C3.08499 6.2048 2.69128 6.59851 2.69128 7.08421V8.16348H8.31067L8.3107 6.2048H3.57069ZM8.31071 10.0384V18.5741C8.31071 18.9075 8.48779 19.2158 8.77577 19.3838C9.06376 19.5518 9.4193 19.5542 9.70953 19.3901L11.9997 18.0953L14.2898 19.3901C14.58 19.5542 14.9356 19.5518 15.2236 19.3838C15.5115 19.2158 15.6886 18.9075 15.6886 18.5741V10.0383H19.9779V20.2137C19.9778 20.2169 19.9778 20.2201 19.9778 20.2233V20.2502C19.9778 21.2857 19.1384 22.1251 18.103 22.1251H5.89634C4.86088 22.1251 4.02146 21.2857 4.02146 20.2502V10.0384H8.31071ZM21.308 8.16344V7.08416C21.308 6.59854 20.9143 6.2048 20.4286 6.2048H15.6886V8.16344H21.308ZM13.8138 6.2048H10.1856V16.9672L11.5383 16.2024C11.8246 16.0405 12.1748 16.0405 12.461 16.2024L13.8138 16.9672V6.2048Z"></path></svg>
                                    </div>
                                    <div class="tf-gift-wrap-infos">
                                        <p>Do you want a gift wrap?</p>
                                        Only
                                        <span class="price fw-6">$5.00</span>
                                    </div>
                                </div>
                                <div class="tf-cart-tool-btns tf-mini-cart-tool-wrap">
                                    <button type="submit" class="btn-style-2 w-100"><span class="text text-btn-uppercase">Add a gift wrap</span></button>
                                    <div class="text-center w-100 text-btn-uppercase tf-mini-cart-tool-close">Cancel</div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-coupon">
                        <div class="tf-mini-cart-tool-content">
                            <label  class="tf-mini-cart-tool-text">
                                <span class="icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_6766_32777)">
                                        <path d="M9.16699 3.33325H3.33366C2.89163 3.33325 2.46771 3.50885 2.15515 3.82141C1.84259 4.13397 1.66699 4.55789 1.66699 4.99992V16.6666C1.66699 17.1086 1.84259 17.5325 2.15515 17.8451C2.46771 18.1577 2.89163 18.3333 3.33366 18.3333H15.0003C15.4424 18.3333 15.8663 18.1577 16.1788 17.8451C16.4914 17.5325 16.667 17.1086 16.667 16.6666V10.8333" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.417 2.0832C15.7485 1.75168 16.1981 1.56543 16.667 1.56543C17.1358 1.56543 17.5855 1.75168 17.917 2.0832C18.2485 2.41472 18.4348 2.86436 18.4348 3.3332C18.4348 3.80204 18.2485 4.25168 17.917 4.5832L10.0003 12.4999L6.66699 13.3332L7.50033 9.99986L15.417 2.0832Z" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_6766_32777">
                                        <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="text-title">Add A Coupon Code</span>
                            </label>
                            <form class="form-add-coupon tf-mini-cart-tool-wrap">
                                <fieldset class="">
                                    <div class="text-caption-1 text-secondary mb_8">Enter Code</div>
                                    <input class="" type="text" placeholder="Discount code" name="text" tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <div class="tf-cart-tool-btns">
                                    <button type="submit" class="btn-style-2 w-100"><span class="text text-btn-uppercase">Save</span></button>
                                    <div class="text-center w-100 text-btn-uppercase tf-mini-cart-tool-close">Cancel</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection