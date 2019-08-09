@extends('layouts.app')
@section('title', $product->title)

@section('content')
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
          <a class="nav-link" href="#product-reviews-tab" aria-controls="product-reviews-tab" role="tab" data-toggle="tab" aria-selected="false">User Review</a>
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
