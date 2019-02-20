@extends('templates.main')

@push('content')
  <div class="ps-content pt-80 pb-80">
    <div class="ps-container">
      <div class="ps-cart-listing">
        <table class="table ps-cart__table">
          <thead>
            <tr>
              <th>All Products</th>
              <th>Price</th>
              <th class="text-center">Quantity</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @forelse ($page_datas->data['cart'] as $i => $v)
              <tr class="cart-list" data-cart='{!! json_encode($v, JSON_HEX_TAG) !!}'>
                <td style="width: 45%;">
                  <a class="ps-product__preview" href="{{ route('products.show', $v['id']) }}">
                    <div class="ps-shoe__image-preview-cart mr-15" style="background-image: url('{{ $v['thumbnail'] }}')"></div>
                    <span>{{ $v['nama'] }}</span>
                  </a>
                </td>
                <td>Rp. <span class="cart-price">@money($v['harga'])</span></td>
                <td class="text-center">
                  <div class="form-group--number">
                    <button class="minus cart-remove"><span>-</span></button>
                    <input class="form-control cart-value" type="text" value="{{$v['qty']}}">
                    <button class="plus cart-add"><span>+</span></button>
                  </div>
                </td>
                <td>Rp. <span class="cart-total">@money($v['total'])</span></td>
                <td><div class="ps-remove cart-empty"></div></td>
              </tr>
            @empty
              <tr>
                <td class="text-center" colspan="5">Sorry your cart is empty</td>
              </tr>
            @endforelse
              <tr id="cart-empty" hidden>
                <td class="text-center" colspan="5">Sorry your cart is empty</td>
              </tr>            
          </tbody>
        </table>
        <div class="ps-cart__actions">
          <div class="ps-cart__promotion">
            <div class="form-group">
              <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                <input class="form-control" type="text" placeholder="Promo Code">
              </div>
            </div>
            <div class="form-group">
              <a href="{{ route('products.index') }}" class="ps-btn ps-btn--gray">Continue Shopping</a>
            </div>
          </div>
          <div class="ps-cart__total">
            <h3>Total Price: <span id="cart-final">@money($page_datas->data['total'] ? $page_datas->data['total']['price'] : 0)</span><span style="text-transform: capitalize;">Rp. &nbsp;</span></h3><a class="ps-btn" href="{{ route('checkout') }}">Process to checkout<i class="ps-icon-next"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endpush

@push('scripts')

$('.cart-add').on('click', function(){
  var parent = $(this).closest('.cart-list').find('.cart-value');
  var qty = parent.val();
  qty = parseInt(qty) + parseInt(1);
  parent.find('.cart-value').val(qty);

  updateCart(qty, $(this), null);
});
$('.cart-remove').on('click', function(){
  var parent = $(this).closest('.cart-list').find('.cart-value');
  var qty = parent.val();
  if(qty > 0){
    qty = parseInt(qty) - parseInt(1);
    parent.find('.cart-value').val(qty);
  }

  updateCart(qty, $(this), null);
});
function updateCart(_qty, _elem, _callback){
  var data_cart = JSON.parse( _elem.closest('.cart-list').attr('data-cart') );
  data_cart['qty'] = _qty;

  var cart = window.cart; 
  cart.defineOnSuccess(function(_data){
    console.log(_data);
    var tmp = _elem.closest('.cart-list');
    tmp.attr('data-cart', JSON.stringify(_data));
    tmp.find(".cart-value").val(_data.qty);
    tmp.find(".cart-total").text(_data.total);
    recalculateCart();
  });
  cart.defineOnError(function(_error){
    console.log(_error);
  });

  cart.update(
    JSON.stringify({'cart' : data_cart}),
    '{{ route('cart.store') }}',
    '{{ csrf_token() }}'
  );
}

$('.cart-empty').on('click', function(){
  var parent = $(this).closest('.cart-list');
  var data_cart = JSON.parse( parent.attr('data-cart') );

  var cart = window.cart; 
  cart.defineOnSuccess(function(_data){
    if($('.cart-list').length <= 1){
      $('#cart-empty').removeAttr('hidden');
    }
    parent.remove();
    recalculateCart();
  });
  cart.defineOnError(function(_error){
    console.log(_error);
  });

  var dt = {'id' : data_cart['id']}; 
  cart.remove(
    JSON.stringify(dt),
    '{{ route('cart.destroy', ['id' => 0]) }}',
    '{{ csrf_token() }}'
  );
});

function recalculateCart(_callback){
  var total = parseInt(0);
  $('.cart-list').each(function(key, value){
    var cart = JSON.parse($(value).attr('data-cart'));
    total = parseInt(cart.total) + total;
  });

  $('#cart-final').text(window.numberFormat.set(total));

  if(_callback) _callback()
}
@endpush