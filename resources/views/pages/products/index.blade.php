@php
  // dd($page_datas->data);
@endphp
@extends('templates.main')

@push('content')
  <div class="ps-products-wrap pt-80 pb-80">
    <div class="ps-products" data-mh="product-listing">
      <div class="ps-product-action">
        <div class="ps-product__filter">
          <select class="ps-select selectpicker">
            <option value="lastest">Lastest</option>
            <option value="popularity">Popularity</option>
            <option value="name">Name</option>
            <option value="lower_price">Lower Price</option>
            <option value="high_price">High Price</option>
          </select>
        </div>
        <div class="ps-pagination">
          @if ($page_datas->data['total'] >= (int) $page_datas->data['per_page'])
            <ul class="pagination">
              @if ($page_datas->data['current_page'] != 1)
                <li><a href="{{ route('products.index', ['page' => $page_datas->data['current_page'] - 1]) }}"><i class="fa fa-angle-left"></i></a></li>
              @endif

              @for ($i = 1; $i <= $page_datas->data['last_page']; $i++ )
                <li class="{{ ($i == $page_datas->data['current_page']) ? 'active' : '' }}"><a href="{{ route('products.index', ['page' => $i]) }}">{{ $i }}</a></li>
              @endfor

              @if ($page_datas->data['current_page'] != $page_datas->data['last_page'])
                <li><a href="{{ route('products.index', ['page' => $page_datas->data['current_page'] + 1]) }}"><i class="fa fa-angle-right"></i></a></li>
              @endif
            </ul>
          @endif
        </div>
      </div>
      <div class="ps-product__columns">
        @forelse ($page_datas->data['data'] as $k => $v)
          @php
            // dd($page_datas->data);
          @endphp
          <div class="ps-product__column pb-40">
            <div class="ps-shoe mb-30">
              <div class="ps-shoe__thumbnail">
                @if ($v['promo'])
                  <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>{{ $v['promo']['judul'] }}</span></div>
                @endif
                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                <img src="{{ $v['thumbnail'] }}" alt="" style="max-height: 180px;"><a class="ps-shoe__overlay" href="{{ route('products.show', $v['id']) }}"></a>
              </div>
              <div class="ps-shoe__content">
                <div class="ps-shoe__variants">
                  @if (count($v['galeri']) != 0)
                    <div class="ps-shoe__variant normal">
                      @foreach ($v['galeri'] as $k2 => $v2)
                        <img src="{{ $v2 }}" alt="">
                      @endforeach
                    </div>
                  @endif

                  @php
                    $rating = floor(($v['rating']['indikator'] + $v['rating']['user_rate']) / 2);
                  @endphp
                  <select class="ps-rating ps-shoe__rating">
                    <option value="1" {{ ($rating == 1) ? 'selected' : '' }}>1</option>
                    <option value="2" {{ ($rating == 2) ? 'selected' : '' }}>2</option>
                    <option value="3" {{ ($rating == 3) ? 'selected' : '' }}>3</option>
                    <option value="4" {{ ($rating == 4) ? 'selected' : '' }}>4</option>
                    <option value="5" {{ ($rating == 5) ? 'selected' : '' }}>5</option>
                  </select>
                </div>
                <div class="ps-shoe__detail">
                  <a class="ps-shoe__name text-capitalize" href="#">{{ $v['nama'] }}</a>
                  {{-- <p class="ps-shoe__categories">
                    <a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a>
                  </p> --}}
                  <span class="ps-shoe__price pt-30">IDR {{ $v['harga'] }}</span>
                </div>
              </div>
            </div>
          </div>
        @empty
        @endforelse
      </div>
      <div class="ps-product-action">
        <div class="ps-product__filter">
          <select class="ps-select selectpicker">
            <option value="lastest">Lastest</option>
            <option value="popularity">Popularity</option>
            <option value="name">Name</option>
            <option value="lower_price">Lower Price</option>
            <option value="high_price">High Price</option>
          </select>
        </div>
        <div class="ps-pagination">
          @if ($page_datas->data['total'] >= (int) $page_datas->data['per_page'])
            <ul class="pagination">
              @if ($page_datas->data['current_page'] != 1)
                <li><a href="{{ route('products.index', ['page' => $page_datas->data['current_page'] - 1]) }}"><i class="fa fa-angle-left"></i></a></li>
              @endif

              @for ($i = 1; $i <= $page_datas->data['last_page']; $i++ )
                <li class="{{ ($i == $page_datas->data['current_page']) ? 'active' : '' }}"><a href="{{ route('products.index', ['page' => $i]) }}">{{ $i }}</a></li>
              @endfor

              @if ($page_datas->data['current_page'] != $page_datas->data['last_page'])
                <li><a href="{{ route('products.index', ['page' => $page_datas->data['current_page'] + 1]) }}"><i class="fa fa-angle-right"></i></a></li>
              @endif
            </ul>
          @endif
        </div>
      </div>
    </div>
    <div class="ps-sidebar" data-mh="product-listing">
      @if ($page_datas->filter['data'])
        @foreach ($page_datas->filter['data'] as $i => $v)
          <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
              <h3>{{ $v['nama'] }}</h3>
            </div>
            @if ($v['sub'])
              <div class="ps-widget__content">
                <ul class="ps-list--checked">
                  @foreach ($v['sub'] as $i2 => $v2)
                    <li><a href="">{{ $v2['nama'] }}</a></li>
                  @endforeach
                </ul>
              </div>
            @endif
          </aside>
        @endforeach
      @endif
      <aside class="ps-widget--sidebar ps-widget--filter">
        <div class="ps-widget__header">
          <h3>Price</h3>
        </div>
        <div class="ps-widget__content">
          <div class="ac-slider" data-default-min="300" data-default-max="2000" data-max="3450" data-step="50" data-unit="Rp"></div>
          <p class="ac-slider__meta">Price:<span class="ac-slider__value ac-slider__min"></span>-<span class="ac-slider__value ac-slider__max"></span></p><a class="ac-slider__filter ps-btn" href="#">Filter</a>
        </div>
      </aside>
      <div class="ps-sticky desktop">
        <aside class="ps-widget--sidebar">
          <div class="ps-widget__header">
            <h3>Color</h3>
          </div>
          <div class="ps-widget__content">
            <ul class="ps-list--color">
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ul>
          </div>
        </aside>
      </div>
      <!--aside.ps-widget--sidebar-->
      <!--    .ps-widget__header: h3 Ads Banner-->
      <!--    .ps-widget__content-->
      <!--        a(href='product-listing'): img(src="/images/offer/sidebar.jpg" alt="")-->
      <!---->
      <!--aside.ps-widget--sidebar-->
      <!--    .ps-widget__header: h3 Best Seller-->
      <!--    .ps-widget__content-->
      <!--        - for (var i = 0; i < 3; i ++)-->
      <!--            .ps-shoe--sidebar-->
      <!--                .ps-shoe__thumbnail-->
      <!--                    a(href='#')-->
      <!--                    img(src="/images/shoe/sidebar/"+(i+1)+".jpg" alt="")-->
      <!--                .ps-shoe__content-->
      <!--                    if i == 1-->
      <!--                        a(href='#').ps-shoe__title Nike Flight Bonafide-->
      <!--                    else if i == 2-->
      <!--                        a(href='#').ps-shoe__title Nike Sock Dart QS-->
      <!--                    else-->
      <!--                        a(href='#').ps-shoe__title Men's Shoe-->
      <!--                    p <del> £253.00</del> £152.00-->
      <!--                    a(href='#').ps-btn PURCHASE-->
    </div>
  </div>
@endpush

@push('scripts')
@endpush