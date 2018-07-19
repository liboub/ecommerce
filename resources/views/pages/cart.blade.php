<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 7/5/2018
 * Time: 11:36 AM
 */
?>

@include('includes.head',['title'=>'Cart'])

<body>

<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">
    <!-- Start Header Style -->
    @include('elements.navbar')
    <!-- End Header Style -->
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif
    <div class="body__overlay"></div>
    <!-- cart-main-area start -->
    <div class="cart-main-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <h2>votre panier</h2>
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart as $single)
                                <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="{{ asset('storage/'.$single->options['image']) }}" alt="product img" /></a></td>
                                    <td class="product-name"><a href="#">{{$single->name}}</a></td>
                                    <td class="product-price"><span class="amount">{{$single->price}}</span></td>
                                    <td class="product-quantity"><input type="number" value="{{$single->qty}}" /></td>
                                    <td class="product-subtotal">{{$single->price}}</td>
                                    <td class="product-remove"><a href="/cartRemove/{{$single->rowId}}">X</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="buttons-cart">
                                    <a href="/shop">Continue Shopping</a>
                                </div>

                            </div>
                            <div class="col-md-4 col-sm-5 col-xs-12">
                                <div class="cart_totals">
                                    <h2>Cart Totals</h2>
                                    <table>
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount">{{Cart::subtotal()}}</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                <ul id="shipping_method">
                                                    <li>
                                                        <input type="radio" />
                                                        <label>
                                                            frais de livraison: <span class="amount">£7.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" />
                                                        <label>
                                                            frais de livraison gratuits
                                                        </label>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                                <p><a class="shipping-calculator-button" href="#">calculer les frais d'envois</a></p>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong><span class="amount">{{Cart::subtotal()}}</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="/cartStore">passer au paiement</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->
    <!-- Start Footer Area -->
    @include('includes.footer')
    <!-- End Footer Area -->
</div>
<!-- Body main wrapper end -->
<!-- Placed js at the end of the document so the pages load faster -->

@include('includes.jsInclude')

</body>

</html>
