<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<div class="container ">
    <div class="nav-header">
        <div class="navbar-header nav-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!--MAIN MENU-->
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav nava nav-header">

                <!--MENU ITEM-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Link 1</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Blog <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Link 1</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Page <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Link 1</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact NDH</a></li>
                <!--/MENU ITEM-->
            </ul>
        </div>
    </div>
