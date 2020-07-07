<?php

    // Home
    Breadcrumbs::for('home', function ($trail) {
        $trail->push('Home', route('homepage'));
    });

    // Home > About
    Breadcrumbs::for('about-us', function ($trail) {
        $trail->parent('home');
        $trail->push('About-us', route('about-us'));
    });

    // Home > Category
    Breadcrumbs::for('category', function ($trail) {
        $trail->parent('home');
        $trail->push('Product-Categories', route('category'));
    });

    // Home > Category > Product Detail
    Breadcrumbs::for('product-detail', function ($trail, $product) {
        $trail->parent('category');
        $trail->push($product->product_title, route('product-detail', $product));
    });

    // Home > Brand
    Breadcrumbs::for('brand', function ($trail) {
        $trail->parent('home');
        $trail->push('Brands', route('brand'));
    });

    // Home > Shipping Policy
    Breadcrumbs::for('shipping-policy', function ($trail) {
        $trail->parent('home');
        $trail->push('Shipping-Policy', route('shipping-policy'));
    });

    // Home > Guarantee
    Breadcrumbs::for('guarantee', function ($trail) {
        $trail->parent('home');
        $trail->push('Guarantee', route('guarantee'));
    }); 

    // Home > Payment
    Breadcrumbs::for('payment', function ($trail) {
        $trail->parent('home');
        $trail->push('Payment', route('payment'));
    }); 

    // Home > Contact Us
    Breadcrumbs::for('contact-us', function ($trail) {
        $trail->parent('home');
        $trail->push('Contact-Us', route('contact-us'));
    }); 

    // Home > Search 
    Breadcrumbs::for('search', function ($trail) {
        $trail->parent('home');
        $trail->push('Search Products', route('search'));
    }); 

    // Home > Cart 
    Breadcrumbs::for('cart', function ($trail) {
        $trail->parent('home');
        $trail->push('Cart', route('cart'));
    });
