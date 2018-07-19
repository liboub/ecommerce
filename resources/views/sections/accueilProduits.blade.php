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
                    <h1 class="text-center"><a>Produits populaires</a></h1>
                    <div class="col-md-12">
                        <div class="popular__product__container product__list clearfix">

                            @foreach($composants as $composant)
                            <!-- Start Single Product -->
                            <div class="single__pro">
                                <div class="product">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="{{ route('shop.show',$composant->id) }}">
                                                <img src="{!! asset('storage/'.$composant->image) !!}" alt="product images">
                                            </a>
                                        </div>
                                    </div>
                                    <h3><a href="{{ route('shop.show',$composant->id) }}">{{$composant->modele}}</a></h3>
                                    <ul class="product__price">
                                        <li class="new__price">{{$composant->prix}} €</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            @endforeach
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
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
