<?php
/**
 * Created by PhpStorm.
 * User: libou
 * Date: 04/07/18
 * Time: 11:11
 */
?>

@include('includes.head')

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper wrap__box__style--1">
    <!-- Start Header Style -->
    @include('elements.navbar')
    <!-- End Header Style -->

    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12" >
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="Search here... " type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
    </div>
    <!-- End Offset Wrapper -->
    <!-- Start Slider Area -->
    <div class="slider__container slider--four">
        <div class="slider__activation__wrap owl-carousel owl-theme">
            <!-- Start Single Slide -->
            <div class="slide slider__fixed--height" style="background: rgba(0, 0, 0, 0) url(images/slider/bg/3.jpg) no-repeat scroll center center / cover ;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 col-lg-offset-6 col-md-offset-5 col-sm-10 col-sm-offset-2 col-xs-12">
                            <div class="slider__content">
                                <div class="slider__inner">
                                    <h1>Awesome Product Collection</h1>
                                    <h4>In 2017</h4>
                                    <div class="slider__btn">
                                        <a class="htc__btn" href="cart.html">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide -->
        </div>
    </div>
    <!-- Start Slider Area -->
@include('sections.acceuilProduits')
</div>
<!-- Body main wrapper end -->
<!-- QUICKVIEW PRODUCT -->
@include('includes.quickView')
<!-- END QUICKVIEW PRODUCT -->
@include('includes.jsInclude')
</body>

</html>
