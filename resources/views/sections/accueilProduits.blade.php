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
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title section__title--2 text-center">
                        <h2 class="title__line">Popular Products</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <!-- Start Product MEnu -->
            <div class="htc__product__container product__with__filter  pb--20">
                <div class="row mt--70">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="filter__menu__container">
                            <div class="product__menu">
                                <button data-filter="*"  class="is-checked">All</button>
                                <button data-filter=".cat--1">Furnitures</button>
                                <button data-filter=".cat--2">Bags</button>
                                <button data-filter=".cat--3">Decoration</button>
                                <button data-filter=".cat--4">Accessories</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Filter Menu -->
                <!-- End Filter Menu -->
                <!-- End Product MEnu -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="popular__product__container product__list clearfix">

                            @foreach($composants as $single)
                            <!-- Start Single Product -->
                            <div class="single__pro cat--3">
                                <div class="product">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="{!! asset('storage/'.$single->image) !!}" alt="product images">
                                            </a>
                                        </div>
                                        <div class="popular__product__hover__info">
                                            <ul class="product__action">
                                                <li><a title="Add To Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add To Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <span class="popular__pro__prize">{{$single->prix}}</span>
                                    </div>
                                    <h2><a href="/composant/{n}">{{$single->modele}}</a></h2>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            @endforeachgi
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
