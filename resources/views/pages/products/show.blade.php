@extends('templates.main')
@push('content')
{{-- @php
    dd($page_datas->data2)
@endphp --}}
@php
  $jumlahReview = count($page_datas->data['review'])
@endphp
  <div class="ps-product--detail pt-60">
    <div class="ps-container">
      <div class="row">
        <div class="col-lg-10 col-md-12 col-lg-offset-1">
          <div class="ps-product__thumbnail">
            <div class="ps-product__preview">
              <div class="ps-product__variants">

                @foreach ($page_datas->data['galeri'] as $galeri)
                  <div class="item"><img src="{{$galeri}}" alt=""></div>
                @endforeach

              </div>
              {{-- <a class="popup-youtube ps-product__video" href="http://www.youtube.com/watch?v=0O2aH4XLbto"> --}}
              <img src="images/shoe-detail/1.jpg" alt="">
              {{-- <i class="fa fa-play"></i> --}}
              {{-- </a> --}}
            </div>
            <div class="ps-product__image">
              @foreach ($page_datas->data['galeri'] as $galeri)
              <div class="item"><img class="zoom" src="{{$galeri}}" alt="" data-zoom-image="{{$galeri}}"></div>    
              @endforeach
            </div>
          </div>
          <div class="ps-product__thumbnail--mobile">
            <div class="ps-product__main-img"><img src="{{$page_datas->data['thumbnail']}}" alt=""></div>
            <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on">
              @foreach ($page_datas->data['galeri'] as $galeri)
               <img src="{{$galeri}}" alt="">    
              @endforeach
            </div>
          </div>
          <div class="ps-product__info">
            <div class="ps-product__rating">
                @php
                  $rating = floor(($page_datas->data['rating']['indikator'] + $page_datas->data['rating']['user_rate']) / 2);
                @endphp
                <select class="ps-rating">
                  <option value="1" {{ ($rating == 1) ? 'selected' : '' }}>1</option>
                  <option value="2" {{ ($rating == 2) ? 'selected' : '' }}>2</option>
                  <option value="3" {{ ($rating == 3) ? 'selected' : '' }}>3</option>
                  <option value="4" {{ ($rating == 4) ? 'selected' : '' }}>4</option>
                  <option value="5" {{ ($rating == 5) ? 'selected' : '' }}>5</option>
                </select>
            </div>
            <h1>{{$page_datas->data['nama']}}</h1>
            <p class="ps-product__category"><a href="#"> Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p>
            <h3 class="ps-product__price">Rp. @money($page_datas->data['harga']) {{-- <del>£ 330</del> --}}</h3>
            <div class="ps-product__block ps-product__quickview">
              <h4>QUICK REVIEW</h4>
              <p>{{$page_datas->data['deskripsi']}}</p>
            </div>
            {{-- <div class="ps-product__block ps-product__style">
              <h4>CHOOSE YOUR STYLE</h4>
              <ul>
                <li><a href="product-detail.html"><img src="images/shoe/sidebar/1.jpg" alt=""></a></li>
                <li><a href="product-detail.html"><img src="images/shoe/sidebar/2.jpg" alt=""></a></li>
                <li><a href="product-detail.html"><img src="images/shoe/sidebar/3.jpg" alt=""></a></li>
                <li><a href="product-detail.html"><img src="images/shoe/sidebar/2.jpg" alt=""></a></li>
              </ul>
            </div> --}}
            <div class="ps-product__block ps-product__size">
              <h4>Jumlah</h4>
              {{-- <select class="ps-select selectpicker">
                <option value="1">Select Size</option>
                <option value="2">4</option>
                <option value="3">4.5</option>
                <option value="3">5</option>
                <option value="3">6</option>
                <option value="3">6.5</option>
                <option value="3">7</option>
                <option value="3">7.5</option>
                <option value="3">8</option>
                <option value="3">8.5</option>
                <option value="3">9</option>
                <option value="3">9.5</option>
                <option value="3">10</option>
              </select> --}}
              <div class="form-group">
              <input class="form-control" type="number" id="add-to-cart-qty" data-init-qty={{ $page_datas->data['cart'] ? $page_datas->data['cart'] : 0 }} value="{{ $page_datas->data['cart'] ? $page_datas->data['cart'] : '1' }}" min="0" step="1">
              </div>
            </div>
            <div class="ps-product__shopping"><a class="ps-btn mb-10" id="add-to-cart" href="javascript:void(0);" data-label-update="Update Cart<i class='ps-icon-next'></i>" data-label-add="Add to cart<i class='ps-icon-next'></i>">{{ $page_datas->data['cart'] ? 'Update Cart' : 'Add to cart' }}<i class="ps-icon-next"></i></a>
              <div class="ps-product__actions"><a class="mr-10" href="whishlist.html"><i class="ps-icon-heart"></i></a><a href="compare.html"><i class="ps-icon-share"></i></a></div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="ps-product__content mt-50">
            <ul class="tab-list" role="tablist">
              <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Overview</a></li>
              <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Review</a></li>
              {{-- <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">PRODUCT TAG</a></li>
              <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab">ADDITIONAL</a></li> --}}
            </ul>
          </div>
          <div class="tab-content mb-60">
            <div class="tab-pane active" role="tabpanel" id="tab_01">
              <p>{{$page_datas->data['deskripsi']}}</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab_02">
              <p class="mb-20">{{$jumlahReview}} review for <strong>{{$page_datas->data['nama']}}</strong></p>
              @foreach ($page_datas->data['review'] as $review)
              <div class="ps-review">
                  <div class="ps-review__thumbnail"><img src="{{$review['thumbnail']}}" alt=""></div>
                  <div class="ps-review__content">
                    <header>
                      <select class="ps-rating">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="5">5</option>
                      </select>
                      <p>By<a href=""> {{$review['nama']}}</a> - {{$review['tanggal']}}</p>
                    </header>
                    <p>{{$review['komentar']}}</p>
                  </div>    
              @endforeach
              </div>
              <form class="ps-product__review" action="_action" method="post">
                <h4>ADD YOUR REVIEW</h4>
                <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <div class="form-group">
                          <label>Name:<span>*</span></label>
                          <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                          <label>Email:<span>*</span></label>
                          <input class="form-control" type="email" placeholder="">
                        </div>
                        <div class="form-group">
                          <label>Your rating<span></span></label>
                          <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                        <div class="form-group">
                          <label>Your Review:</label>
                          <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                          <button class="ps-btn ps-btn--sm">Submit<i class="ps-icon-next"></i></button>
                        </div>
                      </div>
                </div>
              </form>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab_03">
              <p>Add your tag <span> *</span></p>
              <form class="ps-product__tags" action="_action" method="post">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="">
                  <button class="ps-btn ps-btn--sm">Add Tags</button>
                </div>
              </form>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab_04">
              <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Enter your addition here..."></textarea>
              </div>
              <div class="form-group">
                <button class="ps-btn" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                <h3 class="ps-section__title" data-mask="Related item">- YOU MIGHT ALSO LIKE</h3>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
              </div>
        </div>
      </div>
      <div class="ps-section__content">
        <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
          @foreach ($page_datas->data2['data'] as $produk)
            <div class="ps-shoes--carousel">
                {{-- <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/1.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                </div> --}}
              <div class="grid-item kids">
                <div class="grid-item__content-wrapper">
                  <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail">
                          @if ($produk['promo'])
                          <div class="ps-badge"><span>Promo</span></div>
                          @endif
                          <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                          <div class="ps-shoe__image-cover" style="background-image: url('{{ $produk['thumbnail'] }}')"></div>
                          <a class="ps-shoe__overlay" href="{{ route('products.show', $produk['id']) }}"></a>
                        </div>
                    <div class="ps-shoe__content">
                      <div class="ps-shoe__variants">
                        
                        <div class="ps-shoe__variant normal" style="padding-top: 10px">
                          @foreach ($produk['galeri'] as $galeri)
                            <img style="max-height: 50px;width:auto !important" src="{{$galeri}}" alt="">
                          @endforeach
                        </div>
                        
                        @php
                          $rating = floor(($produk['rating']['indikator'] + $produk['rating']['user_rate']) / 2);
                        @endphp
                        <select class="ps-rating ps-shoe__rating">
                          <option value="1" {{ ($rating == 1) ? 'selected' : '' }}>1</option>
                          <option value="2" {{ ($rating == 2) ? 'selected' : '' }}>2</option>
                          <option value="3" {{ ($rating == 3) ? 'selected' : '' }}>3</option>
                          <option value="4" {{ ($rating == 4) ? 'selected' : '' }}>4</option>
                          <option value="5" {{ ($rating == 5) ? 'selected' : '' }}>5</option>
                        </select>
                        <span>({{$produk['rating']['frekuensi']}} review)</span>
                        {{-- <select disabled class="ps-rating ps-shoe__rating">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select> --}}
                      </div>
                      <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{ route('products.show', $produk['id']) }}">{{$produk['nama']}}</a>
                        {{-- <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p> --}}
                        <p class="ps-shoe__categories">{{-- <del>£220</del> --}}Rp. @money($produk['harga'])</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>          
          @endforeach
    
        </div>
      </div>
    </div>
  </div>
  <div class="ps-subscribe">
    <div class="ps-container">
      <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
              <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
              <form class="ps-subscribe__form" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="">
                <button>Sign up now</button>
              </form>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
              <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
            </div>
      </div>
    </div>
  </div>
@endpush

@php
  $cart = [
    'id' => $page_datas->data['id'],
    'nama' => $page_datas->data['nama'],
    'harga' => $page_datas->data['harga'],
    'promo' => $page_datas->data['promo'],
    'thumbnail' => $page_datas->data['thumbnail'],
  ];  
@endphp

@push('scripts')
  var this_product = JSON.parse('{!! json_encode($cart, JSON_HEX_TAG) !!} ');
  var cart = window.cart; 
  var is_cart_busy = false;
  var totQty = 0;
  var totPrice = 0;
  
  var cart_add_label = $('#add-to-cart').html();
  var cart_add_label_add = $('#add-to-cart').attr('data-label-add');
  var cart_add_label_update = $('#add-to-cart').attr('data-label-update');
  cart.defineOnSuccess(function(_data){
    console.log(_data);

    // ui
    is_cart_busy = false;
    var matched = false;
    Object.keys(_data).forEach(function(key){
      // update cart list 

      // update current qty
      if(_data[key]['id'] == this_product['id']){
        if(_data[key]['qty'] > 0){
          $('#add-to-cart-qty')
          .val(_data[key]['qty'])
          .attr('data-init-qty',_data[key]['qty']);
          matched = true;
        }
      }

      if (key < 1) {
        $('#cart-temp-item').html('');
      }

      setListCart(_data[key]);
      setIconTotalCart(_data);
      setTotPrice_Qty(_data[key]);
    });

    if(!matched){
      $('#add-to-cart-qty')
        .val(1)
        .attr('data-init-qty',0);
      $('#add-to-cart')
        .html(cart_add_label_add)
        .removeClass('cart-loading');     
        console.log('empty')
    }else{
      $('#add-to-cart')
        .html(cart_add_label_update)
        .removeClass('cart-loading')
        ;
    }
  });
  cart.defineOnError(function(_error){
    console.log(_error);

    // ui
    is_cart_busy = false;
    $('#add-to-cart')
      .removeClass('cart-loading')
      .html(cart_add_label);
  });  
  $('#add-to-cart').on('click', function(){
    // get qty 
    var qty = $('#add-to-cart-qty').val();
    if(!qty || qty < 0) alert('Jumlah tidak boleh kurang dari 0');
    console.log(qty);
    console.log($('#add-to-cart-qty').attr('data-init-qty'));
    if(qty == $('#add-to-cart-qty').attr('data-init-qty')) return;

    // ui
    if(is_cart_busy) return;
    is_cart_busy = true;
    $(this)
      .addClass('cart-loading')
      .html('PROCESSING <span class="fa fa-circle-o-notch fa-spin"></span>');

    // merge data
    var data_product = {
      'cart' : this_product
    };
    data_product.cart['qty'] = qty;

    // push data
    cart.update(
      JSON.stringify(data_product),
      '{{ route('cart.store') }}',
      '{{ csrf_token() }}'
    );

    if(qty == 0) $('#add-to-cart-qty').val(1);
  });

  function setListCart (item) 
  {
    // check promo & set total price
    if (item.promo !== null) {
      var totPrice = (item.promo.harga * parseInt(item.qty));
    } else {
      var totPrice = (item.harga * parseInt(item.qty));
    }

    // clone list cart
    var listItem = $('#list-cart-item').clone();

    listItem.show();
    listItem.removeAttr('id');
    listItem.find('#link-thumbnail-item').attr('href', '{{ route("products.index") }}/' + item.id);
    listItem.find('#thumbnail-item').attr('src', item.thumbnail);
    listItem.find('#link-item').attr('href', '{{ route("products.index") }}/' + item.id).html(item.nama);
    listItem.find('#qty-item').html('Quantity:<i>' + item.qty + '</i>');
    listItem.find('#total-item').html('Total:<i>' + 'Rp ' + window.numberFormat.set(totPrice) + '</i>');

    $('#cart-temp-item').append(listItem);
  }

  function setIconTotalCart (item) 
  {
    $('#total-item-cart').html('<i>'+ item.length +'</i>');
  }

  function setTotPrice_Qty (item)
  {
    totQty += parseInt(item.qty);
    totPrice += parseInt(item.qty) * ((item.promo !== null) ? item.promo.harga : item.harga);

    $('#tot-qty').html('Number of items:<span>'+ totQty +'</span>');
    $('#tot-price').html('Item Total:<span>Rp '+ window.numberFormat.set(totPrice) +'</span>');

    $('#cart-total').removeClass('hide');
  }
@endpush