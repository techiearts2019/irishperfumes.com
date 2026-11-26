@extends('frontend.layouts.master')

@section('title', config('app.name'))
@section('keywords', config('app.name').")
@section('description', config('app.name').")
@section('body_menu')
@include('frontend.layouts.header')
@endsection
@section('body_content')
<section class="flat-spacing pt-4">
    <div class="container">
        <h4 class="heading mb-3">{{ ucwords(Str::replace('-', ' ', basename(request()->path()))) }}</h4>
        <div class="tf-shop-control">
            <div class="tf-control-filter">
                <button id="filterShop" class="filterShop tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filters</span></button>
                <div class="d-none d-lg-flex shop-sale-text">
                    <i class="icon icon-checkCircle"></i>
                    <p class="text-caption-1">Shop sale items only</p>
                </div>
            </div>
            <div class="tf-control-sorting float-end">
                <p class="d-none d-lg-block text-caption-1">Sort by:</p>
                <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                    <div class="btn-select">
                        <span class="text-sort-value">Best selling</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>
                    <div class="dropdown-menu">
                        <div class="select-item" data-sort-value="best-selling">
                            <span class="text-value-item">Best selling</span>
                        </div>
                        <div class="select-item" data-sort-value="a-z">
                            <span class="text-value-item">Alphabetically, A-Z</span>
                        </div>
                        <div class="select-item" data-sort-value="z-a">
                            <span class="text-value-item">Alphabetically, Z-A</span>
                        </div>
                        <div class="select-item" data-sort-value="price-low-high">
                            <span class="text-value-item">Price, low to high</span>
                        </div>
                        <div class="select-item" data-sort-value="price-high-low">
                            <span class="text-value-item">Price, high to low</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-control-shop">
            <div class="meta-filter-shop">
                <div id="product-count-grid" class="count-text"></div>
                <div id="product-count-list" class="count-text"></div>
                <div id="applied-filters"></div>
                <button id="remove-all" class="remove-all-filters text-btn-uppercase" style="display: none;">REMOVE ALL <i class="icon icon-close"></i></button>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <div class="sidebar-filter canvas-filter left p-3 border rounded">
                        <div class="canvas-wrapper">
                            <div class="canvas-header d-flex d-xl-none">
                                <h5>Filters</h5>
                                <span class="icon-close close-filter"></span>
                            </div>
                            <div class="canvas-body">
                                <div class="widget-facet facet-fieldset">
                                    <h6 class="facet-title">Categories</h6>
                                    <div class="box-fieldset-item">
                                        <fieldset class="fieldset-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="nike">
                                            <label for="nike">Nike <span class="count-brand">(112)</span></label>
                                        </fieldset>
                                        <fieldset class="fieldset-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="LV">
                                            <label for="LV">Louis Vuitton <span class="count-brand">(2)</span></label>
                                        </fieldset>
                                        <fieldset class="fieldset-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="hermes">
                                            <label for="hermes">Hermes <span class="count-brand">(42)</span></label>
                                        </fieldset>
                                        <fieldset class="fieldset-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="gucci">
                                            <label for="gucci">Gucci <span class="count-brand">(13)</span></label>
                                        </fieldset>
                                        <fieldset class="fieldset-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="zalando">
                                            <label for="zalando">Zalando <span class="count-brand">(54)</span></label>
                                        </fieldset>
                                        <fieldset class="fieldset-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="adidas">
                                            <label for="adidas">Adidas <span class="count-brand">(93)</span></label>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="widget-facet facet-price">
                                    <h6 class="facet-title">Price</h6>
                                    <div class="price-val-range" id="price-value-range" data-min="0" data-max="500"></div>
                                    <div class="box-price-product">
                                        <div class="box-price-item">
                                            <span class="title-price">Min price</span>
                                            <div class="price-val" id="price-min-value" data-currency="$"></div>
                                        </div>
                                        <div class="box-price-item">
                                            <span class="title-price">Max price</span>
                                            <div class="price-val" id="price-max-value" data-currency="$"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-facet facet-fieldset">
                                    <h6 class="facet-title">Availability</h6>
                                    <div class="box-fieldset-item">
                                        <fieldset class="fieldset-item">
                                            <input type="radio" name="availability" class="tf-check" id="inStock">
                                            <label for="inStock">In stock <span class="count-stock">(32)</span></label>
                                        </fieldset>
                                        <fieldset class="fieldset-item">
                                            <input type="radio" name="availability" class="tf-check" id="outStock">
                                            <label for="outStock">Out of stock <span class="count-stock">(2)</span></label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="canvas-bottom d-block d-xl-none">
                                <button id="reset-filter" class="tf-btn btn-reset">Reset Filters</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="tf-grid-layout wrapper-shop tf-col-3" id="gridLayout">
                        @for($i = 1; $i <= 6; $i++)
                        <!-- card product 1 -->
                        <div class="card-product grid" data-availability="Out of stock" data-brand="adidas">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{ asset('asset/images/products/womens/women-19.jpg') }}" src="{{ asset('asset/images/products/womens/women-19.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{ asset('asset/images/products/womens/women-20.jpg') }}" src="{{ asset('asset/images/products/womens/women-20.jpg') }}" alt="image-product">
                                </a>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">V-neck cotton T-shirt</a>
                                <span class="price current-price">$59.99</span>
                            </div>
                        </div>
                        <!-- card product 2 -->
                        <div class="card-product grid" data-availability="In stock" data-brand="nike">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Polarized sunglasses</a>
                                <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$79.99</span></div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active line">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-176.jpg" src="images/products/womens/women-176.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-177.jpg" src="images/products/womens/women-177.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endfor

                        <!-- pagination -->
                        <ul class="wg-pagination justify-content-center">
                            <li><a href="#" class="pagination-item text-button">1</a></li>
                            <li class="active"><div class="pagination-item text-button">2</div></li>
                            <li><a href="#" class="pagination-item text-button">3</a></li>
                            <li><a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection
@section('body_footer')
@include('frontend.layouts.footer')
@endsection
@section('contact-us-scripts')
<script type="text/javascript" src="{{ asset('asset/js/shop.js') }}"></script>
@endsection