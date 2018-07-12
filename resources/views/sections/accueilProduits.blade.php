<?php
/**
 * Created by PhpStorm.
 * User: libou
 * Date: 04/07/18
 * Time: 11:48
 */
?>
<div class="custop__container bg__cat--2 mt--100">
    <div class="popular__product--2">
        <div class="container-fluid">
                <!-- End Product MEnu -->
                <div class="row">
                    <h1 class="text-center"><a>Popular products</a></h1>
                    <div class="col-md-12">
                        <div class="popular__product__container product__list clearfix">

                            @foreach($composants as $single)
                            <!-- Start Single Product -->
                            <div class="single__pro">
                                <div class="product">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="{!! asset('storage/'.$single->image) !!}" alt="product images">
                                            </a>
                                        </div>
                                        <div class="popular__product__hover__info">
                                            <ul class="product__action">
                                                <li><a title="Add To Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h3><a href="/composant/{n}">{{$single->modele}}</a></h3>
                                    <ul class="product__price">
                                        <li class="new__price">{{$single->prix}} €</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area -->

@include('includes.footer')

<!-- End Footer Area -->
</div>
