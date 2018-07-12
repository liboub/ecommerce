<?php
/**
 * Created by PhpStorm.
 * User: libou
 * Date: 04/07/18
 * Time: 11:33
 */
?>
<header id="header" class="htc-header header--3 bg__white">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                    <div class="logo">
                        <a href="/accueil">
                            <img src="{{ asset('images/logo/uniqlo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- Start MAinmenu Ares -->
                <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                    <nav class="mainmenu__nav hidden-xs hidden-sm">
                        <ul class="main__menu">
                            <li><a href="/accueil">Home</a></li>
                            <li><a href="/shop">Shop</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End MAinmenu Ares -->
                <div class="col-md-2 col-sm-4 col-xs-3">
                    <ul class="menu-extra">
                        @if(isset($search))
                            <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                        @endif
                        <li><a href="login-register.html"><span class="ti-user"></span></a></li>
                        <li><a href="/cart"><span class="ti-shopping-cart"></span></li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
