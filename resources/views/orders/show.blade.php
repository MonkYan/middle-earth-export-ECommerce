
@extends('layouts.app')
@section('title', 'Order Detail')

@section('content')
    <div class="shop-detail">
        <div class="breadcrumb-area">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><span>Shop</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-12">
                <div class="product-detail-img">
                    <div class="large-image">
                        <div class="tab-content" id="myTabContent-1">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                <img src="{{ $product->image_url }}" alt="image">
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                <img src="{{ $product->image_url }}" alt="image">
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-3">
                                <img src="{{ $product->image_url }}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="thumb-img-tabs">
                        <ul class="nav nav-tabs" id="myTab1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"><img src="{{ $product->image_url }}" alt="Product image"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{ $product->image_url }}" alt="Product image"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ $product->image_url }}" alt="Product image"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-12">
                <div class="product-detail-content">
                    <div class="title">
                        <h1>{{ $product->title }}</h1>
                    </div>
                    <div class="rating" title="Rating {{ $product->rating }}">Rating
                        <span class="count">{{ str_repeat('★', floor($product->rating)) }}{{ str_repeat('☆', 5 - floor($product->rating)) }}
                        </span>
                    </div>
                    <div class="price">{{ $product->price }}
                    </div>
                    <div class="desc">
                        <p>{!! $product->description !!}</p>
                    </div>
                    <div class="attribute">
                        <p><span>Brands:</span>Lorem amet</p>
                        <p><span>Product Code:</span>{{ $sku->id }}</p>
                        <p><span>Stock:</span><span class="instock">In Stock</span></p>
                    </div>
                    <div class="color">
                        <p>Color<span>*</span></p>
                        <ul>
                            <li><a href="#"><span class="red"></span></a></li>
                            <li><a href="#"><span class="green"></span></a></li>
                            <li><a href="#"><span class="orange"></span></a></li>
                            <li><a href="#"><span class="black"></span></a></li>
                        </ul>
                    </div>
                    <div class="size">
                        <p>Size<span>*</span></p>
                        <ul>
                            <li><a href="#">S</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">XL</a></li>
                        </ul>
                    </div>
                    <div class="quantity">
                        <label>Quantity:</label>
                        <div class="cart-plus-minus">
                            <input type="text" value="1">
                            <div class="dec qtybutton">-</div>
                            <div class="inc qtybutton">+</div>
                        </div>
                    </div>
                    <div class="cart-options">
                        <form action="#" class="cart-form">
                            <button class="btn theme-btn">Add To Cart</button>
                        </form>
                        <ul>
                            <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="share-it">
                        <ul>
                            <li><label>Share it:</label></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-tabs">
            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab-4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-5" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Reviews (2)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-6" data-toggle="tab" href="#tab6" role="tab" aria-controls="tab6" aria-selected="false">Tags</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent-2">
                <div class="tab-pane fade show active" id="tab4" role="tabpanel" aria-labelledby="tab-4">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>
                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab-5">
                    <div class="review-area">
                        <div class="product-comments">
                            <div class="comments">
                                <div class="comments-img">
                                    <img src="assets/images/01.png" alt="image">
                                </div>
                                <div class="comments-content">
                                    <h4>Jane Doe -
                                        <span>April 5, 2019</span>
                                    </h4>
                                    <div class="pro-rating">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                            </div>
                            <div class="comments">
                                <div class="comments-img">
                                    <img src="assets/images/02.png" alt="image">
                                </div>
                                <div class="comments-content">
                                    <h4>Jone Doe -
                                        <span>April 4, 2019</span>
                                    </h4>
                                    <div class="pro-rating">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="review-box">
                            <h4>Add a Review</h4>
                            <div class="your-rating">
                                <span>Your Rating:</span>
                                <div class="rating-list">
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                </div>
                            </div>
                            <form class="review-form" action="#">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <label for="message">Your Review</label>
                                        <textarea name="message" id="message" cols="30" rows="10" spellcheck="false"></textarea>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="r-name">Name</label>
                                        <input type="text" id="r-name">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="r-email">Email</label>
                                        <input type="email" id="r-email">
                                    </div>
                                    <div class="col-xl-12">
                                        <button class="btn theme-btn">Add your Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab-6">
                    <form action="#">
                        <div class="tags">
                            <input type="text" name="tag">
                            <button class="btn theme-btn">Tags</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="related-product col-12">
                <div class="titlebar">
                    <h1>Related Products</h1>
                    <div class="next-back">
                        <span><a data-slide="prev" href="#Carousel-2" class="left carousel-control">Back</a></span>
                        <span><a data-slide="next" href="#Carousel-2" class="right carousel-control">Next</a></span>
                    </div>
                </div>
                <div class="carousel-area">
                    <div id="Carousel-2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="product-item">
                                    <div class="row">
                                        <Ul>
                                            <li>
                                                <div class="product-grid">
                                                    <div class="product-image">
                                                        <a href="configurable.html">
                                                            <img class="pic-1" src="assets/images/products/women-9-1.jpg" alt="Product image">
                                                            <img class="pic-2" src="assets/images/products/women-9-2.jpg" alt="Product image">
                                                        </a>
                                                        <ul class="social">
                                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-tip="Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                            <li><a href="#" data-tip="Compare"><i class="fas fa-exchange-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="title">Lorem ipsum dolor</h3>
                                                    <div class="product-content">
                                                        <div class="price">$16.00
                                                            <span>$20.00</span>
                                                        </div>
                                                        <a class="add-to-cart" href="cart.html">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product-grid">
                                                    <div class="product-image">
                                                        <a href="configurable.html">
                                                            <img class="pic-1" src="assets/images/products/women-4-1.jpg" alt="Product image">
                                                            <img class="pic-2" src="assets/images/products/women-4-2.jpg" alt="Product image">
                                                        </a>
                                                        <ul class="social">
                                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-tip="Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                            <li><a href="#" data-tip="Compare"><i class="fas fa-exchange-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="title">Lorem ipsum dolor</h3>
                                                    <div class="product-content">
                                                        <div class="price">$16.00
                                                            <span>$20.00</span>
                                                        </div>
                                                        <a class="add-to-cart" href="cart.html">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product-grid">
                                                    <div class="product-image">
                                                        <a href="configurable.html">
                                                            <img class="pic-1" src="assets/images/products/men-7-1.jpg" alt="Product image">
                                                            <img class="pic-2" src="assets/images/products/men-7-2.jpg" alt="Product image">
                                                        </a>
                                                        <ul class="social">
                                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-tip="Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                            <li><a href="#" data-tip="Compare"><i class="fas fa-exchange-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="title">Lorem ipsum dolor</h3>
                                                    <div class="product-content">
                                                        <div class="price">$16.00
                                                            <span>$20.00</span>
                                                        </div>
                                                        <a class="add-to-cart" href="cart.html">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product-grid">
                                                    <div class="product-image">
                                                        <a href="configurable.html">
                                                            <img class="pic-1" src="assets/images/products/men-8-1.jpg" alt="Product image">
                                                            <img class="pic-2" src="assets/images/products/men-8-2.jpg" alt="Product image">
                                                        </a>
                                                        <ul class="social">
                                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-tip="Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                            <li><a href="#" data-tip="Compare"><i class="fas fa-exchange-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="title">Lorem ipsum dolor</h3>
                                                    <div class="product-content">
                                                        <div class="price">$16.00
                                                            <span>$20.00</span>
                                                        </div>
                                                        <a class="add-to-cart" href="cart.html">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </Ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="product-item">
                                    <div class="row">
                                        <Ul>
                                            <li>
                                                <div class="product-grid">
                                                    <div class="product-image">
                                                        <a href="configurable.html">
                                                            <img class="pic-1" src="assets/images/products/men-4-1.jpg" alt="Product image">
                                                            <img class="pic-2" src="assets/images/products/men-4-2.jpg" alt="Product image">
                                                        </a>
                                                        <ul class="social">
                                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-tip="Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                            <li><a href="#" data-tip="Compare"><i class="fas fa-exchange-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="title">Lorem ipsum dolor</h3>
                                                    <div class="product-content">
                                                        <div class="price">$16.00
                                                            <span>$20.00</span>
                                                        </div>
                                                        <a class="add-to-cart" href="cart.html">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product-grid">
                                                    <div class="product-image">
                                                        <a href="configurable.html">
                                                            <img class="pic-1" src="assets/images/products/women-3-1.jpg" alt="Product image">
                                                            <img class="pic-2" src="assets/images/products/women-3-2.jpg" alt="Product image">
                                                        </a>
                                                        <ul class="social">
                                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-tip="Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                            <li><a href="#" data-tip="Compare"><i class="fas fa-exchange-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="title">Lorem ipsum dolor</h3>
                                                    <div class="product-content">
                                                        <div class="price">$16.00
                                                            <span>$20.00</span>
                                                        </div>
                                                        <a class="add-to-cart" href="cart.html">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product-grid">
                                                    <div class="product-image">
                                                        <a href="configurable.html">
                                                            <img class="pic-1" src="assets/images/products/men-3-1.jpg" alt="Product image">
                                                            <img class="pic-2" src="assets/images/products/men-3-2.jpg" alt="Product image">
                                                        </a>
                                                        <ul class="social">
                                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-tip="Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                            <li><a href="#" data-tip="Compare"><i class="fas fa-exchange-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="title">Lorem ipsum dolor</h3>
                                                    <div class="product-content">
                                                        <div class="price">$16.00
                                                            <span>$20.00</span>
                                                        </div>
                                                        <a class="add-to-cart" href="cart.html">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product-grid">
                                                    <div class="product-image">
                                                        <a href="configurable.html">
                                                            <img class="pic-1" src="assets/images/products/women-8-1.jpg" alt="Product image">
                                                            <img class="pic-2" src="assets/images/products/women-8-2.jpg" alt="Product image">
                                                        </a>
                                                        <ul class="social">
                                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-tip="Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                                            <li><a href="#" data-tip="Compare"><i class="fas fa-exchange-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="title">Lorem ipsum dolor</h3>
                                                    <div class="product-content">
                                                        <div class="price">$16.00
                                                            <span>$20.00</span>
                                                        </div>
                                                        <a class="add-to-cart" href="cart.html">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </Ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-body product-info">
                    <div class="row">
                        <div class="col-5">
                            <img class="cover" src="{{ $product->image_url }}" alt="">
                        </div>
                        <div class="col-7">
                            <div class="title">{{ $product->title }}</div>
                            <div class="price"><label>价格</label><em>￥</em><span>{{ $product->price }}</span></div>
                            <div class="sales_and_reviews">
                                <div class="sold_count">累计销量 <span class="count">{{ $product->sold_count }}</span></div>
                                <div class="review_count">累计评价 <span class="count">{{ $product->review_count }}</span></div>
                                <div class="rating" title="评分 {{ $product->rating }}">评分 <span class="count">{{ str_repeat('★', floor($product->rating)) }}{{ str_repeat('☆', 5 - floor($product->rating)) }}</span></div>
                            </div>
                            <div class="skus">
                                <label>选择</label>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    @foreach($product->skus as $sku)
                                        <label class="btn sku-btn" title="{{ $sku->description }}" >
                                            <input type="radio" name="skus" autocomplete="off" value="{{ $sku->id }}"> {{ $sku->title }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="cart_amount"><label>数量</label><input type="text" class="form-control form-control-sm" value="1"><span>件</span><span class="stock"></span></div>
                            <div class="buttons">
                                <button class="btn btn-success btn-favor">❤ 收藏</button>
                                <button class="btn btn-primary btn-add-to-cart">加入购物车</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#product-detail-tab" aria-controls="product-detail-tab" role="tab" data-toggle="tab" aria-selected="true">商品详情</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#product-reviews-tab" aria-controls="product-reviews-tab" role="tab" data-toggle="tab" aria-selected="false">用户评价</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="product-detail-tab">
                                {!! $product->description !!}
                            </div>
                            <div role="tabpanel" class="tab-pane" id="product-reviews-tab">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
