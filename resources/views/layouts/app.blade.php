<!DOCTYPE html>
<html lang="es">

<head>
    <title>Z-MatrixShop</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/frontend/css/font-awesome.css') }}" rel="stylesheet">
    <!--pop-up-box-->
    <link href="{{ asset('assets/frontend/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//pop-up-box-->
    <!-- price range -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/jquery-ui1.css') }}">
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

    <style>
    @foreach($sliders as $key=>$slider)
         .carousel .item:nth-child({{ $key + 1 }}){    
    
    background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{ asset('uploads/slider/'.$slider->image) }}) no-repeat;
    background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{ asset('uploads/slider/'.$slider->image) }}) no-repeat;
    background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{ asset('uploads/slider/'.$slider->image) }}) no-repeat; 
    background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{ asset('uploads/slider/'.$slider->image) }}) no-repeat;
    background-size:cover;  
    
}
.carousel-caption h2, .carousel-caption h3 {
    font-size: 5em;
    font-weight: 600;
    letter-spacing: 0px;
    text-transform: uppercase;
    text-shadow: 3px 8px 2px rgb(12, 12, 12);
    background: rgba(0, 0, 0, 0.34);
    padding: 35px 0;
}
.carousel-caption h2 span, .carousel-caption h3 span{
    font-weight: 800;
    color: #FF5722;
}
.carousel-caption p {
    letter-spacing: 5px;
    font-size: 24px;
    color: #fff;
    margin: 20px 0;
}
.carousel-caption p span{
    font-size: 40px;
    letter-spacing: 0px;
    font-weight:600;
}
.codes.agileitsbg3 {
    background: #3498DB;  
    padding-bottom: 10em;
}
.codes.agileitsbg4 {
    background: #2ECC71 ; 
    padding-bottom: 10em;
}
.carousel.slide.grid_3.grid_4 {  
    border-top: 10px solid #3ACFD5;
    border-bottom: 10px solid #3a4ed5;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    background-position: 0 0, 100% 0;
    background-repeat: no-repeat;
    -webkit-background-size: 10px 100%;
    -moz-background-size: 10px 100%;
    background-size: 10px 100%;
    background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0dÃ¢â‚¬Â¦0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2xlc3NoYXQtZ2VuZXJhdGVkKSIgLz48L3N2Zz4=),url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0dÃ¢â‚¬Â¦0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2xlc3NoYXQtZ2VuZXJhdGVkKSIgLz48L3N2Zz4=);
    background-image: -webkit-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%), -webkit-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%);
    background-image: -moz-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%), -moz-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%);
    background-image: -o-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%), -o-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%);
    background-image: linear-gradient(to bottom, #3acfd5 0%, #3a4ed5 100%), linear-gradient(to bottom, #3acfd5 0%, #3a4ed5 100%);
}
.carousel-indicators {
    bottom: 4%;
}
@endforeach
    </style>

</head>

<body>
    
    @include('layouts.frontend.partial.header')

    
    <!-- //navigation -->
    <!-- banner -->
    @include('layouts.frontend.partial.slider')
    <!-- //banner -->

    <!-- top Products -->
    <div class="ads-grid">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Nuestros Mejores Productos
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>
            <!-- //tittle heading -->
    @include('layouts.frontend.partial.sidebar')
            <!-- product right -->
            <div class="agileinfo-ads-display col-md-9">
                <div class="wrapper">
                    <!-- first section (nuts) -->
                    <div class="product-sec1">
                        <h3 class="heading-tittle">Nuevos</h3>
                        @foreach($products as $product)
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    <img src="{{ asset('uploads/products/'.$product->image) }}" alt="" style="height: 150px; width: 190px;" >
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="single.html">{{ $product->name }} </a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">${{$product->Precio_venta  }} </span>
                                        <del>$400.00</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="{{ $product->name }}" />
                                                <input type="hidden" name="amount" value="{{ $product->Precio_venta }}" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                               
                            </div>

                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                        
                    </div>

                    <!-- //first section (nuts) -->
                    <!-- second section (nuts special) -->
                    <div class="product-sec1 product-sec2">
                        <div class="col-xs-7 effect-bg">
                            <h3 class="">Pure Energy</h3>
                            <h6>Enjoy our all healthy Products</h6>
                            <p>Get Extra 10% Off</p>
                        </div>
                        <h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
                        <div class="col-xs-5 bg-right-nut">
                            <img src="{{ asset('assets/frontend/images/nut1.png') }}" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- //second section (nuts special) -->
                    <!-- third section (oils) -->
                    <div class="product-sec1">
                        <h3 class="heading-tittle">SmartTvs</h3>
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{ asset('assets/frontend/images/mk4.jpg') }}" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="single.html">Freedom Oil, 1L</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$78.00</span>
                                        <del>$110.00</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Freedom Sunflower Oil, 1L" />
                                                <input type="hidden" name="amount" value="78.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{ asset('assets/frontend/images/mk5.jpg') }}" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="single.html">Saffola Gold, 1L</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$130.00</span>
                                        <del>$150.00</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Saffola Gold, 1L" />
                                                <input type="hidden" name="amount" value="130.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{ asset('assets/frontend/images/mk6.jpg') }}" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="single.html">Fortune Oil, 5L</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$399.99</span>
                                        <del>$500.00</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Fortune Oil, 5L" />
                                                <input type="hidden" name="amount" value="399.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- //third section (oils) -->
                    <!-- fourth section (noodles) -->
                    <div class="product-sec1">
                        <h3 class="heading-tittle">Ropa Y Calzado</h3>
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{ asset('assets/frontend/images/mk7.jpg') }}" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="single.html">Yippee Noodles, 65g</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$15.00</span>
                                        <del>$25.00</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="YiPPee Noodles, 65g" />
                                                <input type="hidden" name="amount" value="15.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{ asset('assets/frontend/images/mk8.jpg') }}" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="single.html">Wheat Pasta, 500g</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$98.00</span>
                                        <del>$120.00</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Wheat Pasta, 500g" />
                                                <input type="hidden" name="amount" value="98.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{ asset('assets/frontend/images/mk9.jpg') }}" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="single.html">Chinese Noodles, 68g</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$11.99</span>
                                        <del>$15.00</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Chinese Noodles, 68g" />
                                                <input type="hidden" name="amount" value="11.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- //fourth section (noodles) -->
                </div>
            </div>
            <!-- //product right -->
        </div>
    </div>
    
    @include('layouts.frontend.partial.footer')


</body>

</html>