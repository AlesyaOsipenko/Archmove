<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- <link rel="stylesheet" href="/normalize.css"> -->
    <!-- <link rel="stylesheet" href="./assets/libs/magnific-popup.css"> -->
    <!-- <link rel="stylesheet" href="/styles.css"> -->

    <?php wp_head(); ?>

    <title>Archmove</title>
</head>
<body>
    
    <header class="header">
        <div class="header__navigation">
            <img class="header__logo" src="<?php bloginfo( 'template_url' ) ?>./assets/images/logoArch.svg"/>

            <div class="header__wrapper">
                <nav class="header__nav">
                    <ul class="nav__list list">
                        <a class="nav__list-item" href="/"><li>Design Gallery</li></a>
                        <a class="nav__list-item" href="/"><li ></li>List of Architect</a>
                        <a class="nav__list-item" href="/"><li></li>Articles</a>
                        <a class="nav__list-item" href="/"><li></li>How it Works</a>
                    </ul>
                </nav>
        
                <div class="header__autorization">
                    <button class="header__search"><img class="header__search" src="./assets/images/icSearh.svg" alt="search-icon"/></button>
                    <button class="header__btn header__signIn">Sign In</button>
                    <button class="header__btn btn header__signUp">Sign Up</button>
                </div>

            </div>
        </div>
    </header>