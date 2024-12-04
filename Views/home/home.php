<?php require_once 'banner.php' ?>

<div class="container featured">
    <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab"
                role="tab" aria-controls="products-featured-tab" aria-selected="true">Smartphones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab" role="tab"
                aria-controls="products-sale-tab" aria-selected="false">Tablets</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab"
                aria-controls="products-top-tab" aria-selected="false">Laptops</a>
        </li>
    </ul>

    <div class="tab-content tab-content-carousel">
        <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel"
            aria-labelledby="products-featured-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                    "nav": true, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "600": {
                            "items":2
                        },
                        "992": {
                            "items":3
                        },
                        "1200": {
                            "items":4
                        }
                    }
                }'>
                <?php 
                    if(isset($smartphone) && $smartphone != NULL){
                        foreach($smartphone as $item){
                    
                ?>

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-new">New</span>
                        <a href="?act=product&id=<?=$item['product_id']?>">
                            <img src="uploaded/<?=$item['product_img']?>" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                    to cart</span></a>
                            <a href="popup/quick_view.php" class="btn-product btn-quickview"
                                title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#"><?=$item['category_name'];?></a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="#"><?=$item['product_name'];?> </a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            <?=number_format($item['product_price'],0,",",".")?> đ
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div>
                                <!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color
                                    name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                <?php
            }}else{
            echo "No data found";
            }
            ?>
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel" aria-labelledby="products-sale-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                    "nav": true, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "600": {
                            "items":2
                        },
                        "992": {
                            "items":3
                        },
                        "1200": {
                            "items":4
                        }
                    }
                }'>
                <?php 
                    if(isset($tablet) && $tablet != NULL){
                        foreach($tablet as $item){
                    
                ?>

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-new">New</span>
                        <a href="?act=product&id=<?=$item['product_id']?>">
                            <img src="uploaded/<?=$item['product_img']?>" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                    to cart</span></a>
                            <a href="popup/quick_view.php" class="btn-product btn-quickview"
                                title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#"><?=$item['category_name'];?></a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="#"><?=$item['product_name'];?> </a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            <?=number_format($item['product_price'],0,",",".")?> đ
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div>
                                <!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color
                                    name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                <?php
            }}else{
            echo "No data found";
            }
            ?>
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel" aria-labelledby="products-top-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                    "nav": true, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "600": {
                            "items":2
                        },
                        "992": {
                            "items":3
                        },
                        "1200": {
                            "items":4
                        }
                    }
                }'>
                <?php 
                    if(isset($Laptop) && $Laptop != NULL){
                        foreach($Laptop as $item){
                    
                ?>

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-new">New</span>
                        <a href="?act=product&id=<?=$item['product_id']?>">
                            <img src="uploaded/<?=$item['product_img']?>" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                    to cart</span></a>
                            <a href="popup/quick_view.php" class="btn-product btn-quickview"
                                title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#"><?=$item['category_name'];?></a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="#"><?=$item['product_name'];?> </a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            <?=number_format($item['product_price'],0,",",".")?> đ
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div>
                                <!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                    name</span></a>
                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color
                                    name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                <?php
            }}else{
            echo "No data found";
            }
            ?>
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->
</div><!-- End .container -->

<div class="mb-7 mb-lg-11"></div><!-- End .mb-7 -->

<div class="container">
    <div class="cta cta-border cta-border-image mb-5 mb-lg-7" style="background-image: url(uploaded/bg-1.jpg);">
        <div class="cta-border-wrapper bg-white">
            <div class="row justify-content-center">
                <div class="col-md-11 col-xl-11">
                    <div class="cta-content">
                        <div class="cta-heading">
                            <h3 class="cta-title text-right"><span class="text-primary">New Deals</span>
                                <br>Start Daily at 12pm e.t.
                            </h3><!-- End .cta-title -->
                        </div><!-- End .cta-heading -->

                        <div class="cta-text">
                            <p>Get <span class="text-dark font-weight-normal">FREE SHIPPING* & 5%
                                    rewards</span> on <br>every order with Molla Theme rewards program</p>
                        </div><!-- End .cta-text -->
                        <a href="#" class="btn btn-primary btn-round"><span>Add to Cart for
                                $50.00/yr</span><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .cta-content -->
                </div><!-- End .col-xl-7 -->
            </div><!-- End .row -->
        </div><!-- End .bg-white -->
    </div><!-- End .cta -->
</div><!-- End .container -->

<div class="bg-light deal-container pt-7 pb-7 mb-5">
    <div class="container">
        <div class="heading text-center mb-4">
            <h2 class="title">Deals & Outlet</h2><!-- End .title -->
            <p class="title-desc">Today’s deal and more</p><!-- End .title-desc -->
        </div><!-- End .heading -->

        <div class="row">
            <div class="col-lg-6 deal-col">
                <div class="deal" style="background-image: url('uploaded/deal/bg-1.jpg');">
                    <div class="deal-top">
                        <h2>Deal of the Day.</h2>
                        <h4>Limited quantities. </h4>
                    </div><!-- End .deal-top -->

                    <div class="deal-content">
                        <h3 class="product-title"><a href="?act=product&id=<?=$item['product_id']?>">Home Smart Speaker
                                with Google
                                Assistant</a></h3><!-- End .product-title -->

                        <div class="product-price">
                            <span class="new-price">$129.00</span>
                            <span class="old-price">Was $150.99</span>
                        </div><!-- End .product-price -->

                        <a href="?act=product&id=<?=$item['product_id']?>" class="btn btn-link"><span>Shop Now</span><i
                                class="icon-long-arrow-right"></i></a>
                    </div><!-- End .deal-content -->

                    <div class="deal-bottom">
                        <div class="deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->
                    </div><!-- End .deal-bottom -->
                </div><!-- End .deal -->
            </div><!-- End .col-lg-6 -->
            <div class="col-lg-6">
                <div class="products">
                    <div class="row">
                        <div class="col-6">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="?act=product&id=<?=$item['product_id']?>">
                                        <img src="uploaded/product-5.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quick_view.php" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Digital Cameras</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="?act=product&id=<?=$item['product_id']?>">Canon -
                                            EOS 5D Mark IV
                                            DSLR Camera</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$3,599.99</span>
                                        <span class="old-price">Was $3,999.99</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 -->

                        <div class="col-6">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="?act=product&id=<?=$item['product_id']?>">
                                        <img src="uploaded/product-6.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quick_view.php" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Computers & Tablets</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="?act=product&id=<?=$item['product_id']?>">Apple -
                                            Smart Keyboard
                                            Folio for 11-inch iPad Pro</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$179.00</span>
                                        <span class="old-price">Was $200.99</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->
                </div><!-- End .products -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->

        <div class="more-container text-center mt-3 mb-0">
            <a href="#" class="btn btn-outline-dark-2 btn-round btn-more"><span>Shop more Outlet
                    deals</span><i class="icon-long-arrow-right"></i></a>
        </div><!-- End .more-container -->
    </div><!-- End .container -->
</div><!-- End .deal-container -->

<div class="container">
    <div class="owl-carousel mt-5 mb-5 owl-simple" data-toggle="owl" data-owl-options='{
                "nav": false, 
                "dots": false,
                "margin": 30,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":2
                    },
                    "420": {
                        "items":3
                    },
                    "600": {
                        "items":4
                    },
                    "900": {
                        "items":5
                    },
                    "1024": {
                        "items":6
                    }
                }
            }'>
        <a href="#" class="brand">
            <img src="assets/site/images/brands/1.png" alt="Brand Name">
        </a>

        <a href="#" class="brand">
            <img src="assets/site/images/brands/2.png" alt="Brand Name">
        </a>

        <a href="#" class="brand">
            <img src="assets/site/images/brands/3.png" alt="Brand Name">
        </a>

        <a href="#" class="brand">
            <img src="assets/site/images/brands/4.png" alt="Brand Name">
        </a>

        <a href="#" class="brand">
            <img src="assets/site/images/brands/5.png" alt="Brand Name">
        </a>

        <a href="#" class="brand">
            <img src="assets/site/images/brands/6.png" alt="Brand Name">
        </a>
    </div><!-- End .owl-carousel -->
</div><!-- End .container -->

<div class="container">
    <hr class="mt-3 mb-6">
</div><!-- End .container -->

<?php require_once 'trending.php'; ?>

<div class="container">
    <hr class="mt-5 mb-6">
</div><!-- End .container -->

<div class="container">
    <hr class="mt-5 mb-6">
</div><!-- End .container -->

<div class="container top">
    <div class="heading heading-flex mb-3">
        <div class="heading-left">
            <h2 class="title">Top Selling Products</h2><!-- End .title -->
        </div><!-- End .heading-left -->

        <div class="heading-right">
            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab"
                        aria-controls="top-all-tab" aria-selected="true">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="top-tv-link" data-toggle="tab" href="#top-tv-tab" role="tab"
                        aria-controls="top-tv-tab" aria-selected="false">Iphone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="top-computers-link" data-toggle="tab" href="#top-computers-tab" role="tab"
                        aria-controls="top-computers-tab" aria-selected="false">Samsung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="top-phones-link" data-toggle="tab" href="#top-phones-tab" role="tab"
                        aria-controls="top-phones-tab" aria-selected="false">Xiaomi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="top-watches-link" data-toggle="tab" href="#top-watches-tab" role="tab"
                        aria-controls="top-watches-tab" aria-selected="false">OOPO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="top-acc-link" data-toggle="tab" href="#top-acc-tab" role="tab"
                        aria-controls="top-acc-tab" aria-selected="false">MacBook</a>
                </li>
            </ul>
        </div><!-- End .heading-right -->
    </div><!-- End .heading -->
    <div class="tab-content tab-content-carousel just-action-icons-sm">
        <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                    "nav": true, 
                    "dots": false,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>

                <?php
                foreach($trendingSellAll as $key => $value ){
                        extract($value);
                ?>
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/site/images/shop/<?=$product_img?>" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                    cart</span></a>
                            <a href="popup/quick_view.php" class="btn-product btn-quickview"
                                title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#"><?=$category_name;?></a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="#"><?=$product_name;?></a>
                        </h3><!-- End .product-title -->
                        <div class="product-price">
                            <?=$product_price;?>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div>
                                <!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                <?php
                }
                ?>



            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="top-tv-tab" role="tabpanel" aria-labelledby="top-tv-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                    "nav": true, 
                    "dots": false,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
                <?php if (!empty($trendingSell) ){
                    foreach($trendingSell[0] as $key => $value ){
                            extract($value);
                    ?>
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/site/images/shop/<?=$product_img?>" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                    cart</span></a>
                            <a href="popup/quick_view.php" class="btn-product btn-quickview"
                                title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#"><?=$category_name;?></a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="#"><?=$product_name;?></a>
                        </h3><!-- End .product-title -->
                        <div class="product-price">
                            <?=$product_price;?>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div>
                                <!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                <?php 
                    }   
                    }else{
                        echo "No data available";
                    } ?>
            </div>
        </div><!-- End .owl-carousel -->
        <div class="tab-pane p-0 fade" id="top-computers-tab" role="tabpanel" aria-labelledby="top-computers-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                    "nav": true, 
                    "dots": false,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
                <?php if (!empty($trendingSell) ){
                    foreach($trendingSell[1] as $key => $value ){
                            extract($value);
                    ?>
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/site/images/shop/<?=$product_img?>" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                    cart</span></a>
                            <a href="popup/quick_view.php" class="btn-product btn-quickview"
                                title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#"><?=$category_name;?></a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="#"><?=$product_name;?></a>
                        </h3><!-- End .product-title -->
                        <div class="product-price">
                            <?=$product_price;?>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div>
                                <!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                <?php 
                    }   
                    }else{
                        echo "No data available";
                    } ?>
            </div>
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="top-phones-tab" role="tabpanel" aria-labelledby="top-phones-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                    "nav": true, 
                    "dots": false,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
                <?php if (!empty($trendingSell) ){
                    foreach($trendingSell[2] as $key => $value ){
                            extract($value);
                    ?>
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/site/images/shop/<?=$product_img?>" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                    cart</span></a>
                            <a href="popup/quick_view.php" class="btn-product btn-quickview"
                                title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#"><?=$category_name;?></a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="#"><?=$product_name;?></a>
                        </h3><!-- End .product-title -->
                        <div class="product-price">
                            <?=$product_price;?>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div>
                                <!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                <?php 
                    }   
                    }else{
                        echo "No data available";
                    } ?>
            </div>
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="top-watches-tab" role="tabpanel" aria-labelledby="top-watches-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                    "nav": true, 
                    "dots": false,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
                <?php if (!empty($trendingSell) ){
                    foreach($trendingSell[3] as $key => $value ){
                            extract($value);
                    ?>
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/site/images/shop/<?=$product_img?>" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                    cart</span></a>
                            <a href="popup/quick_view.php" class="btn-product btn-quickview"
                                title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#"><?=$category_name;?></a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="#"><?=$product_name;?></a>
                        </h3><!-- End .product-title -->
                        <div class="product-price">
                            <?=$product_price;?>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div>
                                <!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                <?php 
                    }   
                    }else{
                        echo "No data available";
                    } ?>
            </div>
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="top-acc-tab" role="tabpanel" aria-labelledby="top-acc-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                    "nav": true, 
                    "dots": false,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
                <?php if (!empty($trendingSell) ){
                    foreach($trendingSell[4] as $key => $value ){
                            extract($value);
                    ?>
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/site/images/shop/<?=$product_img?>" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                    cart</span></a>
                            <a href="popup/quick_view.php" class="btn-product btn-quickview"
                                title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#"><?=$category_name;?></a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="#"><?=$product_name;?></a>
                        </h3><!-- End .product-title -->
                        <div class="product-price">
                            <?=$product_price;?>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div>
                                <!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                <?php 
                    }   
                    }else{
                        echo "No data available";
                    } ?>
            </div>
        </div><!-- .End .tab-pane -->



    </div><!-- End .tab-content -->
</div><!-- End .container -->

<div class="container">
    <hr class="mt-5 mb-0">
</div><!-- End .container -->

<div class="icon-boxes-container mt-2 mb-2 bg-transparent">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-rocket"></i>
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                        <p>Orders $50 or more</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-rotate-left"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                        <p>Within 30 days</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-info-circle"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                        <p>when you sign up</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-life-ring"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                        <p>24/7 amazing services</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .icon-boxes-container -->

<div class="container">
    <div class="cta cta-separator cta-border-image cta-half mb-0" style="background-image: url(uploaded/bg-2.jpg);">
        <div class="cta-border-wrapper bg-white">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-wrapper cta-text text-center">
                        <h3 class="cta-title">Shop Social</h3><!-- End .cta-title -->
                        <p class="cta-desc">Donec nec justo eget felis facilisis fermentum. Aliquam
                            porttitor mauris sit amet orci. </p><!-- End .cta-desc -->

                        <div class="social-icons social-icons-colored justify-content-center">
                            <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                                    class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                                    class="icon-twitter"></i></a>
                            <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i
                                    class="icon-instagram"></i></a>
                            <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i
                                    class="icon-youtube"></i></a>
                            <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i
                                    class="icon-pinterest"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .cta-wrapper -->
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <div class="cta-wrapper text-center">
                        <h3 class="cta-title">Get the Latest Deals</h3><!-- End .cta-title -->
                        <p class="cta-desc">and <br>receive <span class="text-primary">$20 coupon</span> for
                            first shopping</p><!-- End .cta-desc -->

                        <form action="#">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your Email Address"
                                    aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-rounded" type="submit"><i
                                            class="icon-long-arrow-right"></i></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                    </div><!-- End .cta-wrapper -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .bg-white -->
    </div><!-- End .cta -->
</div><!-- End .container -->