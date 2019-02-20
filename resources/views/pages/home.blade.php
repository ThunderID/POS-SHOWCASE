@extends('templates.main')
@push('content')
{{-- @php
  dd($page_datas->data1 )
@endphp --}}
{{-- <div class="ps-banner">
    <div class="rev_slider fullscreenbanner" id="home-banner">
      <ul class="ps-banner">
        <li data-index="rs-29723" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off"><img class="rev-slidebg" src="images/slider/1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
          <div class="tp-caption ps-banner__header" id="layer4" data-x="left" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-60','-70','-70']" data-width="['none','none','none','400']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
            <p>March 2017 <br> BASKETBALL FASHION</p>
          </div>
          <div class="tp-caption ps-banner__title" id="layer24" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','0','0','0']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
            <p>CLOTHING</p>
          </div>
          <div class="tp-caption ps-banner__description" id="layer2-14" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','0','0','0']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
            <p>Supa wanted something that was going to rep his East Coast <br> roots and, more specifically, his hometown of <br/> New York City in a big way.</p>
          </div><a class="tp-caption ps-btn" id="layer34" href="#" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','60','70','70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">Purchase Now<i class="ps-icon-next"></i></a>
        </li>
      </ul>
    </div>
  </div> --}}
  <div class="ps-section masonry-root pt-80 pb-40">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <h3 class="ps-section__title" data-mask="Promotion">- Promotion</h3>
      </div>
      <div class="ps-section__content pb-50">
        <div class="masonry-wrapper" data-col-md="3" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
          <div class="ps-masonry">
            <div class="grid-sizer"></div>
            
            @foreach ($page_datas->data2 as $promo)
            <div class="grid-item">
            <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html">
              <img style="max-height: 150px; padding: 10px;" src="{{$promo['thumbnail']}}" alt=""></a>{{$promo['nama']}}</div>
            </div>    
            @endforeach
            
            {{-- <div class="grid-item">
              <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html"><img src="images/offer/home-2-2.jpg" alt=""></a></div>
            </div>
            <div class="grid-item high">
              <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html"><img src="images/offer/home-2-5.jpg" alt=""></a></div>
            </div>
            <div class="grid-item">
              <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html"><img src="images/offer/home-2-3.jpg" alt=""></a></div>
            </div>
            <div class="grid-item">
              <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html"><img src="images/offer/home-2-4.jpg" alt=""></a></div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ps-section--features-product ps-section masonry-root pt-40 pb-80">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <h3 class="ps-section__title" data-mask="features">- New Product</h3><br>
        <ul>
        <li style="float:right"><a href="/products">See All Product</a></li>
          {{-- <li><a href="#" data-filter=".nike">Nike <sup>1</sup></a></li>
          <li><a href="#" data-filter=".adidas">Adidas <sup>1</sup></a></li>
          <li><a href="#" data-filter=".men">Men <sup>1</sup></a></li>
          <li><a href="#" data-filter=".women">Women <sup>1</sup></a></li>
          <li><a href="#" data-filter=".kids">Kids <sup>4</sup></a></li> --}}
        </ul>
      </div>
      <div class="ps-section__content pb-50">
        <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
          <div class="ps-masonry">
            <div class="grid-sizer"></div>

            @foreach ($page_datas->data1 as $produk)
            
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
            
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ps-section ps-owl-root ps-hotdeal--2 pt-80 pb-80">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
                <h3 class="ps-section__title" data-mask="SALE OFF">- HOT DEAL TODAY</h3>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
              </div>
        </div>
      </div>
      <div class="ps-section__content">
        <div class="row">
          <div class="ps-owl--collection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="50000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="2" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="2" data-owl-duration="1000" data-owl-mousedrag="on">
            <div class="ps-product--hotdeal">
              <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/offer/clothes-1.jpg" alt=""></div>
              <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Slim Fit Men Sport Hoodie</a>
                <p class="ps-product__price">Only: <span>£155</span></p>
                <div class="ps-product__status">
                  <div class="sold">Already sold: <span>10</span></div>
                  <div class="avaiable">avaiable: <span>30</span></div>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
                      <ul class="ps-countdown" data-time="December 1, 2017 00:00:00">
                        <li><span class="hours"></span><p>Hours</p></li>
                        <li class="divider">:</li>
                        <li><span class="minutes"></span><p>minutes</p></li>
                        <li class="divider">:</li>
                        <li><span class="seconds"></span><p>Seconds</p></li>
                      </ul><a class="ps-btn" href="cart.html">Order Today<i class="ps-icon-next"></i></a>
              </div>
            </div>
            <div class="ps-product--hotdeal">
              <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/offer/clothes-2.jpg" alt=""></div>
              <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Mens Long-sleeved Polos</a>
                <p class="ps-product__price">Only: <span>£79</span></p>
                <div class="ps-product__status">
                  <div class="sold">Already sold: <span>10</span></div>
                  <div class="avaiable">avaiable: <span>30</span></div>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
                      <ul class="ps-countdown" data-time="May 1, 2018 00:00:00">
                        <li><span class="hours"></span><p>Hours</p></li>
                        <li class="divider">:</li>
                        <li><span class="minutes"></span><p>minutes</p></li>
                        <li class="divider">:</li>
                        <li><span class="seconds"></span><p>Seconds</p></li>
                      </ul><a class="ps-btn" href="cart.html">Order Today<i class="ps-icon-next"></i></a>
              </div>
            </div>
            <div class="ps-product--hotdeal">
              <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/offer/clothes-1.jpg" alt=""></div>
              <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Slim Fit Men Sport Hoodie</a>
                <p class="ps-product__price">Only: <span>£155</span></p>
                <div class="ps-product__status">
                  <div class="sold">Already sold: <span>10</span></div>
                  <div class="avaiable">avaiable: <span>30</span></div>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
                      <ul class="ps-countdown" data-time="December 1, 2017 00:00:00">
                        <li><span class="hours"></span><p>Hours</p></li>
                        <li class="divider">:</li>
                        <li><span class="minutes"></span><p>minutes</p></li>
                        <li class="divider">:</li>
                        <li><span class="seconds"></span><p>Seconds</p></li>
                      </ul><a class="ps-btn" href="cart.html">Order Today<i class="ps-icon-next"></i></a>
              </div>
            </div>
            <div class="ps-product--hotdeal">
              <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/offer/clothes-2.jpg" alt=""></div>
              <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Mens Long-sleeved Polos</a>
                <p class="ps-product__price">Only: <span>£79</span></p>
                <div class="ps-product__status">
                  <div class="sold">Already sold: <span>10</span></div>
                  <div class="avaiable">avaiable: <span>30</span></div>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
                      <ul class="ps-countdown" data-time="May 1, 2018 00:00:00">
                        <li><span class="hours"></span><p>Hours</p></li>
                        <li class="divider">:</li>
                        <li><span class="minutes"></span><p>minutes</p></li>
                        <li class="divider">:</li>
                        <li><span class="seconds"></span><p>Seconds</p></li>
                      </ul><a class="ps-btn" href="cart.html">Order Today<i class="ps-icon-next"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ps-features pt-80 pb-80">
    <div class="ps-container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
          <div class="ps-iconbox">
            <div class="ps-iconbox__header"><i class="ps-icon-delivery"></i>
              <h3>Free shipping</h3>
              <p>ON ORDER OVER $199</p>
            </div>
            <div class="ps-iconbox__content">
              <p>Want to track a package? Find tracking information and order details from Your Orders.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
          <div class="ps-iconbox">
            <div class="ps-iconbox__header"><i class="ps-icon-money"></i>
              <h3>100% MONEY BACK.</h3>
              <p>WITHIN 30 DAYS AFTER DELIVERY.</p>
            </div>
            <div class="ps-iconbox__content">
              <p>You may return most new, unopened items sold within 30 days of delivery for a full refund.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
          <div class="ps-iconbox">
            <div class="ps-iconbox__header"><i class="ps-icon-customer-service"></i>
              <h3>SUPPORT 24/7.</h3>
              <p>WE CAN HELP YOU ONLINE.</p>
            </div>
            <div class="ps-iconbox__content">
              <p>We offer a 24/7 customer hotline so you’re never alone if you have a question.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="ps-home-partner">
    <div class="ps-container">
      <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="40" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="4" data-owl-item-md="5" data-owl-item-lg="6" data-owl-duration="1000" data-owl-mousedrag="on"><a href="#"><img src="images/partner/1.png" alt=""></a><a href="#"><img src="images/partner/2.png" alt=""></a><a href="#"><img src="images/partner/3.png" alt=""></a><a href="#"><img src="images/partner/4.png" alt=""></a><a href="#"><img src="images/partner/5.png" alt=""></a><a href="#"><img src="images/partner/6.png" alt=""></a><a href="#"><img src="images/partner/7.png" alt=""></a><a href="#"><img src="images/partner/8.png" alt=""></a>
      </div>
    </div>
  </div> --}}
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

@push('scripts')
@endpush