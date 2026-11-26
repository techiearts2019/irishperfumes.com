<!-- Top Bar-->
<div class="tf-topbar topbar-white bg-main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-12 text-center">
                <div class="wrapper-slider-topbar">
                    <div dir="ltr" class="swiper tf-sw-top_bar" data-preview="1" data-space="0" data-loop="true" data-speed="2000" data-auto-play="true" data-delay="2000">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p class="top-bar-text text-line-clamp-1 text-btn-uppercase fw-semibold letter-1">Free shipping on all orders over <span class="text-primary">$20.00</span></p>
                            </div>
                            <div class="swiper-slide">
                                <p class="top-bar-text text-line-clamp-1 text-btn-uppercase fw-semibold letter-1">Midseason Sale: 20% Off - Auto Applied at Checkout - Limited Time Only.</p>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-topbar nav-next-topbar"><span class="icon icon-arrLeft"></span></div>
                    <div class="navigation-topbar nav-prev-topbar"><span class="icon icon-arrRight"></span></div> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Top Bar -->
<header id="header" class="header-default">
    <div class="container">
        <div class="row wrapper-header align-items-center">
            <div class="col-md-4 col-3 d-xl-none">
                <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" aria-controls="mobileMenu">
                    <i class="icon icon-categories"></i>
                </a>
            </div>
            <div class="col-xl-3 col-md-4 col-6">
                <a href="index.html" class="logo-header">
                    <img src="{{ asset('asset/images/logo.webp') }}" alt="logo" class="logo">
                </a>
            </div>
            <div class="col-xl-6 d-none d-xl-block">
                <nav class="box-navigation text-center">
                    <ul class="box-nav-ul d-flex align-items-center justify-content-center">
                        <li @class(['menu-item', 'active' => request()->is('/')])><a href="{{ config('app.url') }}" class="item-link">Home</a></li>
                        <li @class(['menu-item', 'active' => request()->is('new-arrivals')])><a href="{{ route('shop', 'new-arrivals') }}" class="item-link">New Arrivals</a></li>
                        <li @class(['menu-item', 'active' => request()->is('our-collections')])><a href="{{ route('shop', 'our-collections') }}" class="item-link">Our Collections</a></li>
                        <li @class(['menu-item', 'active' => request()->is('best-sellers')])><a href="{{ route('shop', 'best-sellers') }}" class="item-link">Best Sellers</a></li>
                        <li @class(['menu-item', 'active' => request()->is('find-us')])><a href="{{ route('find-us') }}" class="item-link">Find Us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-xl-3 col-md-4 col-3">
                <ul class="nav-icon d-flex justify-content-end align-items-center">
                    <li class="nav-account">
                        <a href="#" class="nav-icon-item">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>
                    <!--<li class="nav-search"><a href="#search" data-bs-toggle="modal" class="nav-icon-item">
                        <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>    
                    </a></li>-->
                    <li class="nav-cart"><a href="" data-bs-toggle="modal" class="nav-icon-item">
                        <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.5078 10.8734V6.36686C16.5078 5.17166 16.033 4.02541 15.1879 3.18028C14.3428 2.33514 13.1965 1.86035 12.0013 1.86035C10.8061 1.86035 9.65985 2.33514 8.81472 3.18028C7.96958 4.02541 7.49479 5.17166 7.49479 6.36686V10.8734M4.11491 8.62012H19.8877L21.0143 22.1396H2.98828L4.11491 8.62012Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>  
                        <span class="count-box">1</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>