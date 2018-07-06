<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 7/5/2018
 * Time: 11:36 AM
 */
?>

@include('includes.head',['title'=>'Product'])

<body>

<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">
    <!-- Start Header Style -->
    @include('elements.navbar')
    <!-- End Header Style -->
    <div class="body__overlay"></div>

    <!-- Start Product Details -->
    <section class="htc__product__details pt--120 pb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="product__details__container">
                        <!-- Start Small images -->
                        <ul class="product__small__images hidden" role="tablist">
                            <li role="presentation" class="pot-small-img active">
                                <a href="#img-tab-1" role="tab" data-toggle="tab">
                                    <img src="images/product-details/small-img/1.jpg" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img">
                                <a href="#img-tab-2" role="tab" data-toggle="tab">
                                    <img src="images/product-details/small-img/2.jpg" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img hidden-xs">
                                <a href="#img-tab-3" role="tab" data-toggle="tab">
                                    <img src="images/product-details/small-img/3.jpg" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img hidden-xs hidden-sm">
                                <a href="#img-tab-4" role="tab" data-toggle="tab">
                                    <img src="images/product-details/small-img/4.jpg" alt="small-image">
                                </a>
                            </li>
                        </ul>
                        <!-- End Small images -->
                        <div class="product__big__images ">
                            <div class="portfolio-full-image tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                    <img src="images/product-details/big-img/1.jpg" alt="full-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                    <div class="htc__product__details__inner">
                        <div class="pro__detl__title">
                            <h2>Black Clock</h2>
                        </div>
                        <div class="pro__details">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostr exercitation ullamco laboris nisi ut aliquip ex ea. </p>
                        </div>
                        <ul class="pro__dtl__prize">
                            <li>$10.00</li>
                        </ul>

                        <ul class="pro__dtl__btn">
                            <li class="buy__now__btn"><a href="#">buy now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Details -->
    <!-- Start Product tab -->
    <section class="htc__product__details__tab bg__white pb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <ul class="product__deatils__tab mb--60" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#description" role="tab" data-toggle="tab">Description</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product__details__tab__content">
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="description" class="product__tab__content fade in active">
                            <div class="product__description__wrap">
                                <div class="product__desc">
                                    <h2 class="title__6">Details</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noexercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
                                </div>
                                <div class="pro__feature">
                                    <h2 class="title__6">Caractéristiques</h2>
                                    <ul class="feature__list">
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Marque : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Modèle : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Taille : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Poids : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Consommation : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Frequence : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Capacité : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Socket : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Atx : </b>Oui</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>microATX : </b>Oui</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Type de stockage : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Type de RAM : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Nombre de coeurs : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Nombre de threads : </b>Intel</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i><b>Puissance : </b>Intel</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product tab -->
    <!-- Start Footer Area -->
    @include('includes.footer')
    <!-- End Footer Area -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
@include('includes.jsInclude')


</body>

</html>