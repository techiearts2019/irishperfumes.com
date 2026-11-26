@extends('frontend.layouts.master')

@section('title', config('app.name'))
@section('keywords', config('app.name').")
@section('description', config('app.name').")
@section('body_menu')
@include('frontend.layouts.header')
@include('frontend.layouts.homeslider')
@endsection
@section('body_content')
<section class="flat-spacing">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">Shop by Category</h3>
            <p class="subheading text-secondary">Fresh styles just in! Elevate your look.</p>
        </div>
        <div class="tf-grid-layout tf-col-2 md-col-3">
            <div class="collection-position-2 style-6 hover-img wow fadeInUp" data-wow-delay="0s">
                <a class="img-style">
                    <img class=" ls-is-cached lazyloaded" data-src="{{ asset('asset/images/home-category-men.jpg') }}" src="{{ asset('asset/images/home-category-men.jpg') }}" alt="banner-cls">
                </a>
                <div class="content">
                    <a href="" class="cls-btn"><h6 class="text">Men</h6></a>
                </div>
            </div>
            <div class="collection-position-2 style-6 hover-img wow fadeInUp" data-wow-delay="0.1s">
                <a class="img-style">
                    <img class=" ls-is-cached lazyloaded" data-src="{{ asset('asset/images/home-category-men.jpg') }}" src="{{ asset('asset/images/home-category-men.jpg') }}" alt="banner-cls">
                </a>
                <div class="content">
                    <a href="" class="cls-btn"><h6 class="text">Women</h6></a>
                </div>
            </div>
            <div class="collection-position-2 style-6 hover-img wow fadeInUp" data-wow-delay="0.2s">
                <a class="img-style">
                    <img class=" ls-is-cached lazyloaded" data-src="{{ asset('asset/images/home-category-men.jpg') }}" src="{{ asset('asset/images/home-category-men.jpg') }}" alt="banner-cls">
                </a>
                <div class="content">
                    <a href="" class="cls-btn"><h6 class="text">Unisex</h6></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /grid collection -->
<!-- Top picks -->
<section class="flat-spacing">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">Today's Top Picks</h3>
            <p class="subheading text-secondary">Fresh styles just in! Elevate your look.</p>
        </div>
        <div class="tf-grid-layout tf-col-2 lg-col-3 xl-col-4">
            <div class="card-product">
                <div class="card-product-wrapper">
                    <a href="#" class="product-img">
                        <img class="lazyload img-product" data-src="{{ asset('asset/images/products/womens/women-19.jpg') }}" src="{{ asset('asset/images/products/womens/women-19.jpg') }}" alt="image-product">
                        <img class="lazyload img-hover" data-src="{{ asset('asset/images/products/womens/women-20.jpg') }}" src="{{ asset('asset/images/products/womens/women-20.jpg') }}" alt="image-product">
                    </a>
                    <div class="list-btn-main">
                        <a href="#!" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                    </div> 
                </div>
                <div class="card-product-info">
                    <a href="#" class="title link">V-neck cotton T-shirt</a>
                    <span class="price">$59.99</span>
                    
                </div>
            </div>
            <div class="card-product">
                <div class="card-product-wrapper">
                    <a href="#" class="product-img">
                        <img class="lazyload img-product" data-src="{{ asset('asset/images/products/womens/women-176.jpg') }}" src="{{ asset('asset/images/products/womens/women-176.jpg') }}" alt="image-product">
                        <img class="lazyload img-hover" data-src="{{ asset('asset/images/products/womens/women-179.jpg') }}" src="{{ asset('asset/images/products/womens/women-179.jpg') }}" alt="image-product">
                    </a>
                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                    <div class="marquee-product bg-main">
                        <div class="marquee-wrapper">
                            <div class="initial-child-container">
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                            </div>
                        </div>
                        <div class="marquee-wrapper">
                            <div class="initial-child-container">
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-btn-main">
                        <a href="#" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                    </div> 
                </div>
                <div class="card-product-info">
                    <a href="#" class="title link">Polarized sunglasses</a>
                    <span class="price"><span class="old-price">$98.00</span> $79.99</span>
                </div>
            </div>
            <div class="card-product">
                <div class="card-product-wrapper">
                    <a href="#" class="product-img">
                        <img class="lazyload img-product" data-src="{{ asset('asset/images/products/womens/women-19.jpg') }}" src="{{ asset('asset/images/products/womens/women-19.jpg') }}" alt="image-product">
                        <img class="lazyload img-hover" data-src="{{ asset('asset/images/products/womens/women-20.jpg') }}" src="{{ asset('asset/images/products/womens/women-20.jpg') }}" alt="image-product">
                    </a>
                    <div class="list-btn-main">
                        <a href="#!" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                    </div> 
                </div>
                <div class="card-product-info">
                    <a href="#" class="title link">V-neck cotton T-shirt</a>
                    <span class="price">$59.99</span>
                    
                </div>
            </div>
            <div class="card-product">
                <div class="card-product-wrapper">
                    <a href="#" class="product-img">
                        <img class="lazyload img-product" data-src="{{ asset('asset/images/products/womens/women-19.jpg') }}" src="{{ asset('asset/images/products/womens/women-19.jpg') }}" alt="image-product">
                        <img class="lazyload img-hover" data-src="{{ asset('asset/images/products/womens/women-20.jpg') }}" src="{{ asset('asset/images/products/womens/women-20.jpg') }}" alt="image-product">
                    </a>
                    <div class="list-btn-main">
                        <a href="#!" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                    </div> 
                </div>
                <div class="card-product-info">
                    <a href="#" class="title link">V-neck cotton T-shirt</a>
                    <span class="price">$59.99</span>
                    
                </div>
            </div>
            <div class="card-product">
                <div class="card-product-wrapper">
                    <a href="#" class="product-img">
                        <img class="lazyload img-product" data-src="{{ asset('asset/images/products/womens/women-176.jpg') }}" src="{{ asset('asset/images/products/womens/women-176.jpg') }}" alt="image-product">
                        <img class="lazyload img-hover" data-src="{{ asset('asset/images/products/womens/women-179.jpg') }}" src="{{ asset('asset/images/products/womens/women-179.jpg') }}" alt="image-product">
                    </a>
                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                    <div class="marquee-product bg-main">
                        <div class="marquee-wrapper">
                            <div class="initial-child-container">
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                            </div>
                        </div>
                        <div class="marquee-wrapper">
                            <div class="initial-child-container">
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                </div>
                                <div class="marquee-child-item">
                                    <span class="icon icon-lightning text-critical"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-btn-main">
                        <a href="#" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                    </div> 
                </div>
                <div class="card-product-info">
                    <a href="#" class="title link">Polarized sunglasses</a>
                    <span class="price"><span class="old-price">$98.00</span> $79.99</span>
                </div>
            </div>
            <div class="card-product">
                <div class="card-product-wrapper">
                    <a href="#" class="product-img">
                        <img class="lazyload img-product" data-src="{{ asset('asset/images/products/womens/women-19.jpg') }}" src="{{ asset('asset/images/products/womens/women-19.jpg') }}" alt="image-product">
                        <img class="lazyload img-hover" data-src="{{ asset('asset/images/products/womens/women-20.jpg') }}" src="{{ asset('asset/images/products/womens/women-20.jpg') }}" alt="image-product">
                    </a>
                    <div class="list-btn-main">
                        <a href="#!" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                    </div> 
                </div>
                <div class="card-product-info">
                    <a href="#" class="title link">V-neck cotton T-shirt</a>
                    <span class="price">$59.99</span>
                    
                </div>
            </div>
            <div class="card-product">
                <div class="card-product-wrapper">
                    <a href="#" class="product-img">
                        <img class="lazyload img-product" data-src="{{ asset('asset/images/products/womens/women-19.jpg') }}" src="{{ asset('asset/images/products/womens/women-19.jpg') }}" alt="image-product">
                        <img class="lazyload img-hover" data-src="{{ asset('asset/images/products/womens/women-20.jpg') }}" src="{{ asset('asset/images/products/womens/women-20.jpg') }}" alt="image-product">
                    </a>
                    <div class="list-btn-main">
                        <a href="#!" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                    </div> 
                </div>
                <div class="card-product-info">
                    <a href="#" class="title link">V-neck cotton T-shirt</a>
                    <span class="price">$59.99</span>
                    
                </div>
            </div>
            <div class="card-product">
                <div class="card-product-wrapper">
                    <a href="#" class="product-img">
                        <img class="lazyload img-product" data-src="{{ asset('asset/images/products/womens/women-19.jpg') }}" src="{{ asset('asset/images/products/womens/women-19.jpg') }}" alt="image-product">
                        <img class="lazyload img-hover" data-src="{{ asset('asset/images/products/womens/women-20.jpg') }}" src="{{ asset('asset/images/products/womens/women-20.jpg') }}" alt="image-product">
                    </a>
                    <div class="list-btn-main">
                        <a href="#!" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                    </div> 
                </div>
                <div class="card-product-info">
                    <a href="#" class="title link">V-neck cotton T-shirt</a>
                    <span class="price">$59.99</span>
                    
                </div>
            </div>
        </div>
        <div class="sec-btn text-center mt-5">
            <a href="shop-default-grid.html" class="btn-line">View All Products</a>
        </div>
    </div>
</section>
<!-- /Top picks -->
<!-- /Banner parallax -->
<section class="flat-banner-parallax-v2" style="background-image: url('{{ asset('asset/images/banner/banner-cosmetic.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="fl-content">
                    <div class="title-top">
                        <span class="subtitle text-btn-uppercase text-secondary-2 wow fadeInUp" data-wow-delay="0s">Skin care</span>
                        <h3 class="title wow fadeInUp" data-wow-delay="0.1s">Must-Have Beauty Products for Glowing Skin</h3>
                        <p class="body-text-1 wow fadeInUp" data-wow-delay="0.2s">How to Choose the Perfect Skincare Routine for Your Skin Type</p>
                    </div>
                    <div class=" wow fadeInUp" data-wow-delay="0.3s">
                        <a href="shop-default-grid.html" class="tf-btn btn-fill"><span class="text">Buy at a discount - $69.99</span><i class="icon icon-arrowUpRight"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Banner parallax -->
<!-- Testimonial -->
<section class="flat-spacing">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">Customer Say!</h3>
            <p class="subheading">Our customers adore our products, and we constantly aim to delight them.</p>
        </div>
        <div dir="ltr" class="swiper tf-sw-testimonial wow fadeInUp" data-wow-delay="0.1s" data-preview="2" data-tablet="1.3" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-item hover-img">
                        <div class="img-style">
                            <img data-src="{{ asset('asset/images/testimonial/tes-3.jpg') }}" src="{{ asset('asset/images/testimonial/tes-3.jpg') }}" alt="img-testimonial">
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
                                    <img src="{{ asset('asset/images/testimonial/tes-3.jpg') }}" alt="avt">
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
                            <img data-src="{{ asset('asset/images/testimonial/tes-4.jpg') }}" src="{{ asset('asset/images/testimonial/tes-4.jpg') }}" alt="img-testimonial">
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
                                    <img src="{{ asset('asset/images/testimonial/tes-4.jpg') }}" alt="avt">
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
                            <img data-src="{{ asset('asset/images/testimonial/tes-1.jpg') }}" src="{{ asset('asset/images/testimonial/tes-1.jpg') }}" alt="img-testimonial">
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
                                    <img src="{{ asset('asset/images/avatar/user-4.jpg') }}" alt="avt">
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
<!-- Iconbox -->
<section class="flat-spacing line-top-container">
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
@endsection
@section('body_footer')
@include('frontend.layouts.footer')
@endsection

