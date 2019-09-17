@extends('layouts.app')
@section('title', $product->title)

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
                                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"><img src="{{ $product->image_url }}" alt="image" alt="Product image"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{ $product->image_url }}" alt="image" alt="Product image"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ $product->image_url }}" alt="image" alt="Product image"></a>
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
                    <div class="rating">
                        <div class="star" title="Rating {{ $product->rating }}">Rating <span class="count">{{ str_repeat('★', floor($product->rating)) }}{{ str_repeat('☆', 5 - floor($product->rating)) }}</span></div>
                        <a href="#">Add Your Rating</a>
                    </div>
                    <div class="price">${{ $product->price }}
                    </div>
                    <div class="desc">
                        {{ $product->description }}
                    </div>
                    <div class="attribute">
                        <p><span>Brands:</span>Lorem amet</p>
                        <p><span>Product Code:</span>DU01512</p>
                        <p><span>Stock:</span><span class="instock">In Stock</span></p>
                    </div>
                    <div class="skus">
                        <label>Select</label>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            @foreach($product->skus as $sku)
                                <label
                                    class="btn sku-btn"
                                    data-price="{{ $sku->price }}"
                                    data-stock="{{ $sku->stock }}"
                                    data-toggle="tooltip"
                                    title="{{ $sku->description }}"
                                    data-placement="bottom">
                                    <input type="radio" name="skus" autocomplete="off" value="{{ $sku->id }}"> {{ $sku->title }}
                                </label>
                            @endforeach
                        </div>
                    </div>
{{--                    <div class="color">--}}
{{--                        <p>Color<span>*</span></p>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#"><span class="red"></span></a></li>--}}
{{--                            <li><a href="#"><span class="green"></span></a></li>--}}
{{--                            <li><a href="#"><span class="orange"></span></a></li>--}}
{{--                            <li><a href="#"><span class="black"></span></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="size">--}}
{{--                        <p>Size<span>*</span></p>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">S</a></li>--}}
{{--                            <li><a href="#">M</a></li>--}}
{{--                            <li><a href="#">L</a></li>--}}
{{--                            <li><a href="#">XL</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <div class="quantity">
                        <label>Quantity:</label>
                        <div class="cart-plus-minus">
                            <input type="text" value="1">
                            <div class="dec qtybutton">-</div>
                            <div class="inc qtybutton">+</div>
                        </div>
                    </div>
                    <div class="cart-options">
                        <ul>
                            <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <form action="#" class="cart-form">
                                    <button class="btn theme-btn">Add To Cart</button>
                            </form>
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

        <h1>testing 分隔</h1>
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-12">
<div class="card">
  <div class="card-body product-info">
    <div class="row">
      <div class="col-5">
        <img class="cover" src="{{ $product->image_url }}" alt="">
      </div>
      <div class="col-7">
        <div class="title">{{ $product->title }}</div>
        <div class="price"><label>Price</label><em>$</em><span>{{ $product->price }}</span></div>
        <div class="sales_and_reviews">
          <div class="sold_count">Total Sell <span class="count">{{ $product->sold_count }}</span></div>
          <div class="review_count">Total Review <span class="count">{{ $product->review_count }}</span></div>
          <div class="rating" title="Rating {{ $product->rating }}">Rating <span class="count">{{ str_repeat('★', floor($product->rating)) }}{{ str_repeat('☆', 5 - floor($product->rating)) }}</span></div>
        </div>
        <div class="skus">
          <label>Select</label>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
      @foreach($product->skus as $sku)
       <label
      class="btn sku-btn"
      data-price="{{ $sku->price }}"
      data-stock="{{ $sku->stock }}"
      data-toggle="tooltip"
      title="{{ $sku->description }}"
      data-placement="bottom">
    <input type="radio" name="skus" autocomplete="off" value="{{ $sku->id }}"> {{ $sku->title }}
        </label>
        @endforeach
          </div>
        </div>
        <div class="cart_amount"><label>Qty</label><input type="text" class="form-control form-control-sm" value="1"><span></span><span class="stock"></span></div>
        <div class="buttons">
          @if($favored)
            <button class="btn btn-danger btn-disfavor">Dislike</button>
          @else
            <button class="btn btn-success btn-favor">❤ Like</button>
          @endif
          <button class="btn btn-primary btn-add-to-cart">Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-detail">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href="#product-detail-tab" aria-controls="product-detail-tab" role="tab" data-toggle="tab" aria-selected="true">Product Specification</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#product-reviews-tab" aria-controls="product-reviews-tab" role="tab" data-toggle="tab" aria-selected="false">Customer Review</a>
        </li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="product-detail-tab">
          {!! $product->description !!}
        </div>
        <div role="tabpanel" class="tab-pane" id="product-reviews-tab">
            <!-- review list  -->
            <table class="table table-bordered table-striped">
            <thead>
            <tr>
            <td>User</td>
            <td>Product</td>
            <td>Rate</td>
            <td>Review</td>
            <td>Time</td>
            </tr>
            </thead>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
        </div>
    </div>
@endsection

@section('scriptsAfterJs')
  <script>
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip({trigger: 'hover'});
      $('.sku-btn').click(function () {
        $('.product-info .price span').text($(this).data('price'));
        $('.product-info .stock').text('Instock：' + $(this).data('stock') + '件');
      });
      // Listen to the click event of the favorite button
      $('.btn-favor').click(function () {
        // Initiate a post ajax request, requesting the url to be generated by the backend's route() function.
        axios.post('{{ route('products.favor', ['product' => $product->id]) }}')
          .then(function () { // The request will succeed in executing this callback
            swal('Success', '', 'success')
              .then(function () {
                location.reload();
              });
          }, function(error) { // Request failure will execute this callback
            // If the return code is 401, it means no login.
            if (error.response && error.response.status === 401) {
              swal('Please sign in', '', 'error');
            } else if (error.response && error.response.data.msg) {
              // Other msg fields, prompt msg to the user
              swal(error.response.data.msg, '', 'error');
            }  else {
              // Otherwise it should be system errro
              swal('system error', '', 'error');
            }
          });
      });
      $('.btn-disfavor').click(function () {
        axios.delete('{{ route('products.disfavor', ['product' => $product->id]) }}')
          .then(function () {
            swal('Dislike Success', '', 'success')
              .then(function () {
                location.reload();
              });
          });
      });
      // Add to cart button click event
      $('.btn-add-to-cart').click(function () {
        // Request to join the shopping cart interface
        axios.post('{{ route('cart.add') }}', {
          sku_id: $('label.active input[name=skus]').val(),
          amount: $('.cart_amount input').val(),
        })
          .then(function () { // Request to successfully execute this callback
            swal('Item successfully add to cart', '', 'success')
            .then(function() {
          location.href = '{{ route('cart.index') }}';
        });
          }, function (error) { // Request failed to perform this callback
            if (error.response.status === 401) {
              // Http status code is 401 means the user is not logged in.
              swal('Please sign in', '', 'error');
            } else if (error.response.status === 422) {
              // Http status code is 422 for user input verification failure
              var html = '<div>';
              _.each(error.response.data.errors, function (errors) {
                _.each(errors, function (error) {
                  html += error+'<br>';
                })
              });
              html += '</div>';
              swal({content: $(html)[0], icon: 'error'})
            } else {
              // Otherwise should be system error
              swal('system error', '', 'error');
            }
          })
      });
    });
  </script>
@endsection
