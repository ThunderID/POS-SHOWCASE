<div class="header--sidebar"></div>
<header class="header">
  <div class="header__top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 "></div>
        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
          <div class="header__actions"><a href="#">Login & Regiser</a>
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="images/flag/usa.svg" alt=""> USD</a></li>
                <li><a href="#"><img src="images/flag/singapore.svg" alt=""> SGD</a></li>
                <li><a href="#"><img src="images/flag/japan.svg" alt=""> JPN</a></li>
              </ul>
            </div>
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">Japanese</a></li>
                <li><a href="#">Chinese</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navigation">
    <div class="container-fluid">
      <div class="navigation__column left">
        <div class="header__logo"><a class="ps-logo" href="{{ route('index') }}"><img src="/images/logo.png" alt=""></a></div>
      </div>
      <div class="navigation__column center">
        <ul class="main-menu menu">
          <li class="menu-item"><a href="{{ route('index') }}">Home</a></li>
          <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Category</a>
            <div class="mega-menu">
              <div class="mega-wrap">
                @foreach ($category['data'] as $i => $v)
                  <div class="mega-column">
                    <h4 class="mega-heading">
                      {{ $v['nama'] }}
                    </h4>
                    @if (count($v['sub']) != 0)
                      @foreach ($v['sub'] as $i2 => $v2)
                        <ul class="mega-item">
                          <li><a href="{{ route('products.index', ['kategoriId' => $v2['id']]) }}">{{ $v2['nama'] }}</a></li>
                        </ul>
                      @endforeach
                    @endif
                  </div>
                @endforeach
              </div>
            </div>
          </li>
          <li class="menu-item menu-item-has-children dropdown"><a href="#">News</a>
            <ul class="sub-menu">
              <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.html">Blog-grid</a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="blog-grid.html">Blog Grid 1</a></li>
                  <li class="menu-item"><a href="blog-grid-2.html">Blog Grid 2</a></li>
                </ul>
              </li>
              <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
            </ul>
          </li>
          <li class="menu-item menu-item-has-children dropdown"><a href="#">Contact</a>
            <ul class="sub-menu">
              <li class="menu-item"><a href="contact-us.html">Contact Us #1</a></li>
              <li class="menu-item"><a href="contact-us.html">Contact Us #2</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="navigation__column right">
        <form class="ps-search--header" action="{{ route('products.index') }}" method="get">
          <input name="cari" class="form-control" type="text" placeholder="Search Product…">
          <button><i class="ps-icon-search"></i></button>
        </form>
        <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span id="total-item-cart"><i>{{ session()->has('cart') ? count(session()->get('cart')) : '0' }}</i></span><i class="ps-icon-shopping-cart"></i></a>
          <div class="ps-cart__listing">
            <div id="cart-temp-item" class="ps-cart__content">
              @php
                $qtyAll = 0;
                $priceAll = 0;
              @endphp
              @if (session()->has('cart'))
                @foreach (session()->get('cart') as $i => $v)
                  @php
                    $qtyAll += $v['qty'];
                    $priceAll += $v['qty'] * ($v['promo'] != null) ? $v['promo']['harga'] : $v['harga'];
                  @endphp
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="{{ route('products.show', $v['id']) }}"></a><img src="{{ $v['thumbnail'] }}" alt=""></div>
                    <div class="ps-cart-item__content">
                      <a class="ps-cart-item__title" href="product-detail.html">{{ $v['nama'] }}</a>
                      <p class="text-left mb-0"><span>Quantity:<i>{{ $v['qty'] }}</i></span></p>
                      <p class="text-left mb-0"><span>Total:<i>Rp {{ ($v['qty'] * $v['harga']) }}</i></span></p>
                    </div>
                  </div>
                @endforeach
              @else
                <p class="text-center">Sorry your cart is empty</p>
              @endif
            </div>
            <div id="cart-total" class="ps-cart__total {{ !session()->has('cart') ? 'hide' : '' }}">
              <p id="tot-qty" class="mb-1">Number of items:<span>{{ isset($qtyAll) ? $qtyAll : '0' }}</span></p>
              <p id="tot-price" class="mb-1">Item Total:<span>Rp {{ isset($priceAll) ? $priceAll : '0' }}</span></p>
            </div>
            <div id="list-cart-item" class="ps-cart-item" style="display: none"><a class="ps-cart-item__close" href="#"></a>
              <div class="ps-cart-item__thumbnail">
                <a id="link-thumbnail-item" href="#"></a>
                <img id="thumbnail-item" src="" alt="">
              </div>
              <div class="ps-cart-item__content">
                <a id="link-item" class="ps-cart-item__title" href="#"></a>
                <p class="text-left mb-0"><span id="qty-item">Quantity:<i></i></span></p>
                <p class="text-left mb-0"><span id="total-item">Total:<i></i></span></p>
              </div>
            </div>
            <div class="ps-cart__footer"><a class="ps-btn" href="{{ route('cart.index') }}">See Cart<i class="ps-icon-arrow-left"></i></a></div>
          </div>
        </div>
        <div class="menu-toggle"><span></span></div>
      </div>
    </div>
  </nav>
</header>
<div class="header-services">
  <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
    <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Skytech</p>
    <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Skytech</p>
    <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Skytech</p>
  </div>
</div>