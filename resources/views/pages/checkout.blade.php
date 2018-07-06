<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 7/5/2018
 * Time: 11:36 AM
 */
?>

@include('includes.head',['title'=>'Checkout'])

<body>

<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">
    <!-- Start Header Style -->
    @include('elements.navbar')
    <!-- End Header Style -->

    <div class="body__overlay"></div>
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0);">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <nav class="bradcaump-inner hidden">
                                <a class="breadcrumb-item" href="index.html">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Checkout</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Checkout Area -->
    <section class="our-checkout-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="ckeckout-left-sidebar">
                        <!-- Start Checkbox Area -->
                        <div class="checkout-form">
                            <h2 class="section-title-3">Détails de commande</h2>
                            <div class="checkout-form-inner">
                                <div class="single-checkout-box">
                                    <input type="text" placeholder="Prénom*">
                                    <input type="text" placeholder="Nom*">
                                </div>
                                <div class="single-checkout-box">
                                    <input type="email" placeholder="Email*">
                                    <input type="text" placeholder="Télephone*">
                                </div>
                                <div class="single-checkout-box">
                                    <textarea name="message" placeholder="Message*"></textarea>
                                </div>
                                <div class="single-checkout-box select-option mt--40">
                                    <select>
                                        <option>Pays*</option>
                                        <option>France</option>
                                        <option>USA</option>
                                        <option>Allemagne</option>
                                    </select>
                                    <input type="text" placeholder="lol*">
                                </div>
                                <div class="single-checkout-box">
                                    <input type="email" placeholder="Région*">
                                    <input type="text" placeholder="Code postal*">
                                </div>
                                <div class="single-checkout-box checkbox">
                                    <input id="remind-me" type="checkbox">
                                    <label for="remind-me"><span></span>Crée un compte ?</label>
                                </div>
                            </div>
                        </div>
                        <!-- End Checkbox Area -->
                        <!-- Start Payment Box -->
                        <div class="payment-form">
                            <h2 class="section-title-3">Détails du payement</h2>
                            <div class="payment-form-inner">
                                <div class="single-checkout-box">
                                    <input type="text" placeholder="Name on Card*">
                                    <input type="text" placeholder="Card Number*">
                                </div>
                                <div class="single-checkout-box select-option">
                                    <select>
                                        <option>Date*</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                    </select>
                                    <input type="text" placeholder="Security Code*">
                                </div>
                            </div>
                        </div>
                        <!-- End Payment Box -->
                        <!-- Start Payment Way -->
                        <div class="our-payment-sestem">
                            <div class="checkout-btn">
                                <a class="ts-btn btn-light btn-large hover-theme" href="#">CONFIRM & BUY NOW</a>
                            </div>
                        </div>
                        <!-- End Payment Way -->
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="checkout-right-sidebar">
                        <div class="our-important-note">
                            <h2 class="section-title-3">Note :</h2>
                            <p class="note-desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut laborekf et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Area -->
    <!-- Start Footer Area -->
    @include('includes.footer')
    <!-- End Footer Area -->
</div>
<!-- Body main wrapper end -->
<!-- Placed js at the end of the document so the pages load faster -->

@include('includes.jsInclude')

</body>

</html>