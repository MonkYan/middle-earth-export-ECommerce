<link rel="stylesheet" href="{{ URL::asset('css/all.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/meanmenu.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">


@extends('layouts.app')
@section('title', 'Product List')
@section('content')
    <div class="wrapper">
        <section class="slidebar">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url('/public/images/slider/slider01-1.jpg')">
                        <div class="carousel_caption">
                            <h1>Appearance</h1>
                            <h2>Classic Design For Office</h2>
                            <p>It is a long established fact that a reader will be happy</p>
                            <a href="shop.html">View Now</a>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('/public/images/slider/slider01-2.jpg')">
                        <div class="carousel_caption">
                            <h1>Megastore</h1>
                            <h2>Design Event on Pixel Mart</h2>
                            <p>It is a long established fact that a reader will be happy</p>
                            <a href="shop.html">More View</a>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('/public/images/slider/slider01-3.jpg')">
                        <div class="carousel_caption">
                            <h1>Clearance</h1>
                            <h2>Retail Design Show Event</h2>
                            <p>It is a long established fact that a reader will be happy</p>
                            <a href="shop.html">View Now</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section class="product-carousel">
{{--            <div class="offer-arrival">--}}
{{--              <div class="titlebar">--}}
{{--                    <div class="title">--}}
{{--                        <h1><a href="{{ route('products.indexmilk') }}">New Arrival</a></h1>--}}
{{--                    </div>--}}
{{--                    <div class="next-back">--}}
{{--                        <span><a data-slide="prev" href="#Carousel-1" class="left carousel-control">Back</a></span>--}}
{{--                        <span><a data-slide="next" href="#Carousel-1" class="right carousel-control">Next</a></span>--}}
{{--                     </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-area">--}}
{{--                    <div id="Carousel-1" class="carousel slide" data-ride="carousel">--}}
{{--                    <!-- Carousel items -->--}}
{{--                        <div class="carousel-inner">--}}
{{--                            <div class="carousel-item active">--}}
{{--                                <div class="product-item">--}}
{{--                                    <div class="row">--}}
{{--                                        @foreach($category1->products as $product)--}}
{{--                                        <div class="col-3 product-item">--}}
{{--                                            <div class="product-content">--}}
{{--                                                <div class="top">--}}
{{--                                                    <div class="img">--}}
{{--                                                        <a href="{{ route('products.show', ['product' => $product->id]) }}">--}}
{{--                                                        <img src="{{ $product->image_url }}" alt="">--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="price"><b>$</b>{{ $product->price }}</div>--}}
{{--                                                    <div class="title"><a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="bottom">--}}
{{--                                                <div class="sold_count">Quantity of sale <span>{{ $product->sold_count }}</span></div>--}}
{{--                                                <div class="review_count">Review <span>{{ $product->review_count }}</span></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--          </div>--}}
            <div class="category-bar-one">
                <div class="titlebar">
                    <div class="title">
                        <h1><a href="{{ route('products.indexmilk') }}">Milk Powder</a></h1>
                    </div>
                    <div class="next-back">
                        <span><a href="shop.html">View All</a></span>
                    </div>
                </div>
                <div class="product-area">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="catCarousel-bar">
                                <div id="catCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#catCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#catCarousel" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="arrival-item">
                                                <img class="pic-1" src="{{url::asset('images/products/milkpowder/milkpowder_1.jpg')}}" alt="Product image">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="arrival-item">
                                                <img class="pic-2" src="{{url::asset('images/products/milkpowder/milkpowerd_2.jpg')}}" alt="Product image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 px-0">
{{--                            <h1>tseting</h1>--}}
                            <div class="row products-list">
                                @foreach($category1->products as $product)
                                    <div class="col-4 product-item">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                                    <img class="pic-1" src="{{ $product->image_url }}" alt="Product image">
                                                </a>
                                                <ul class="social">
                                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" data-tip="Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                    <li><a href="#" data-tip="Compare"><i class="fas fa-exchange-alt"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="title"><a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a></h3>
                                            <div class="product-content">
                                                <div class="price"><b>$</b>{{ $product->price }}</div>
                                                <a class="add-to-cart" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category-bar-two">
                <div class="titlebar">
                    <div class="title">
                        <h1><a href="{{ route('products.indexhealth') }}">Health</a></h1>
                    </div>
                    <div class="next-back">
                        <span><a href="shop.html">View All</a></span>
                    </div>
                </div>
                <div class="product-area">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="catCarousel-bar">
                                <div id="catCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#catCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#catCarousel" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="arrival-item">
                                                <img class="pic-1" src="assets/images/products/furniture-1.jpg" alt="Product image">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="arrival-item">
                                                <img cla ss="pic-1" src="assets/images/products/furniture-2.jpg" alt="Product image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 px-0">
                            <div class="row products-list">
                                @foreach($category2->products as $product)
                                    <div class="col-3 product-item">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                                    <img class="pic-1" src="{{ $product->image_url }}" alt="Product image">
                                                </a>
                                                <ul class="social">
                                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" data-tip="Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                    <li><a href="#" data-tip="Compare"><i class="fas fa-exchange-alt"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="title"><a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a></h3>
                                            <div class="product-content">
                                                <div class="price"><b>$</b>{{ $product->price }}</div>
                                                <a class="add-to-cart" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category-bar-three">
                <div class="titlebar">
                    <div class="title">
                        <h1><a href="{{ route('products.indexhealth') }}">Others</a></h1>
                    </div>
                    <div class="next-back">
                        <span><a href="shop.html">View All</a></span>
                    </div>
                </div>
                <div class="product-area">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="catCarousel-bar">
                                <div id="catCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#catCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#catCarousel" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="arrival-item">
                                                <img class="pic-1" src="assets/images/products/furniture-1.jpg" alt="Product image">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="arrival-item">
                                                <img cla ss="pic-1" src="assets/images/products/furniture-2.jpg" alt="Product image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 px-0">
                            <div class="row products-list">
                                @foreach($category3->products as $product)
                                    <div class="col-3 product-item">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                    <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                                        <img class="pic-1" src="{{ $product->image_url }}" alt="Product image">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                        <li><a href="#" data-tip="Compare"><i class="fas fa-exchange-alt"></i></a></li>
                                                    </ul>
                                            </div>
                                            <h3 class="title"><a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a></h3>
                                            <div class="product-content">
                                                <div class="price"><b>$</b>{{ $product->price }}</div>
                                                <a class="add-to-cart" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2><a href="{{ route('products.indexhealth') }}">Health</a></h2>
            <div class="row products-list">
                @foreach($category2->products as $product)
                    <div class="col-3 product-item">
                        <div class="product-content">
                            <div class="top">
                                <div class="img">
                                    <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                        <img src="{{ $product->image_url }}" alt="">
                                    </a>
                                </div>
                                <div class="price"><b>$</b>{{ $product->price }}</div>
                                <div class="title">
                                    <a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="sold_count">Quantity of sale <span>{{ $product->sold_count }}</span></div>
                                <div class="review_count">Review <span>{{ $product->review_count }}</span></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
