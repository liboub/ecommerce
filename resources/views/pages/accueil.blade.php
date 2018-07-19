<?php
/**
 * Created by PhpStorm.
 * User: libou
 * Date: 04/07/18
 * Time: 11:11
 */
?>

@include('includes.head',['title'=>'Accueil '])

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper wrap__box__style--1">
    <!-- Start Header Style -->
    @include('elements.navbar')
    <!-- End Header Style -->

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
    </div>
    <!-- End Offset Wrapper -->
    <!-- Start Slider Area -->
    <div class="slider__container slider--four">
        <div class="slider__activation__wrap owl-carousel owl-theme">
            <!-- Start Single Slide -->
            <div class="slide slider__fixed--height" style="background: rgba(0, 0, 0, 0) url(images/slider/bg/3.jpg) no-repeat scroll center center / cover ;">

            </div>
            <!-- End Single Slide -->
        </div>
    </div>
    <!-- Start Slider Area -->
@include('sections.accueilProduits')

</div>
<!-- Body main wrapper end -->
@include('includes.jsInclude')
</body>

</html>
