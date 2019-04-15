<!DOCTYPE html>
<html lang="es">
<head>
    <title>Detalle del Producto</title>
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
    <!-- flexslider -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flexslider.css') }}" type="text/css" media="screen" />
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
   @include('layouts.frontend.productos.partial.header')
    <!-- Single Page -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Detalle del producto
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>
            <!-- //tittle heading -->
            <div class="col-md-5 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset('uploads/products/'.$ProductoDetalle->image) }}">
                                <div class="thumb-image">
                                    <img src="{{ asset('uploads/products/'.$ProductoDetalle->image) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                            <li data-thumb="{{ asset('assets/frontend/images/se2.jpg') }}">
                                <div class="thumb-image">
                                    <img src="{{ asset('assets/frontend/images/se2.jpg') }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                            <li data-thumb="{{ asset('assets/frontend/images/se3.jpg') }}">
                                <div class="thumb-image">
                                    <img src="{{ asset('assets/frontend/images/se3.jpg') }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 single-right-left simpleCart_shelfItem">
                <h3>{{ $ProductoDetalle->name }}</h3>
                <div class="rating1">
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" checked="">
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span>
                </div>
                <p>
                    <span class="item_price">${{ $ProductoDetalle->Precio_venta }}</span>
                    <del>$450</del>
                    <label>Free delivery</label>
                </p>
                <div class="single-infoagile">
                    <ul>
                        <li>
                            <h4><strong>Ficha Tecnica:</strong></h4>
                        </li>
                        <li>
                            Modelo : <strong>{{ $ProductoDetalle->modelo }}</strong>
                        </li>
                        <li>
                            Numero de serie : <strong>{{ $ProductoDetalle->Num_serie }}</strong>
                        </li>
                        <li>
                            6 offer from
                            <span class="item_price">$285.00</span>
                        </li>
                    </ul>
                </div>
                <div class="product-single-w3l">
                    <p>
                        <h4><strong>Caracteristicas Generales</strong></h4></p>
                    <ul>
                        <li>
                            {{ $ProductoDetalle->caracteristicas }}
                        </li>
                        <li>
                            Ambi Pur is a brand of air freshener products available in the United States, Europe, Asia and Oceania.
                        </li>
                        <li>
                            Their range of products may be used in the home or in the car with a variety of smells and properties such as odor neutralisation.
                        </li>
                        <li>
                            Transforms your home from smelly to smiley
                        </li>
                    </ul>
                    <p>
                        <i class="fa fa-refresh" aria-hidden="true"></i>All food products are
                        <label>returnable.</label>
                    </p>
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value=" " />
                                <input type="hidden" name="item_name" value="{{ $ProductoDetalle->name }}" />
                                <input type="hidden" name="amount" value="{{ $ProductoDetalle->Precio_venta }}" />
                                <!--<input type="hidden" name="discount_amount" value="1.00" />-->
                                <input type="hidden" name="currency_code" value="USD" />
                                <input type="hidden" name="return" value=" " />
                                <input type="hidden" name="cancel_return" value=" " />
                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>
                    </div>

                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //Single Page -->
    @include('layouts.frontend.productos.partial.footer')