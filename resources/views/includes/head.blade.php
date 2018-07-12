<?php
/**
 * Created by PhpStorm.
 * User: libou
 * Date: 04/07/18
 * Time: 11:16
 */
?>

        <!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @if(isset($title))
            {{ $title }}
        @endif
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <!--<link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- Owl Carousel main css -->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >

    <!-- This core.css file contents all plugings css file. -->
    <link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css" >

    <!-- Theme shortcodes/elements style -->
    <link href="{{ asset('css/shortcode/shortcodes.css') }}" rel="stylesheet" type="text/css" >

    <!-- Theme main style -->
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" >

    <!-- Responsive css -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >

    <!-- User style -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >

    <!-- Modernizr JS -->
    <script type="text/javascript" src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>