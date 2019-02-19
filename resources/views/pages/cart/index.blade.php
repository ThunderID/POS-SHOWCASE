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
              <th>Quantity</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @forelse ($page_datas->data['data'] as $i => $v)
              <tr>
                <td>
                  <a class="ps-product__preview" href="{{ route('products.show', $v['id']) }}">
                    <div class="ps-shoe__image-preview-cart" style="background-image: url('{{ $v['thumbnail'] }}')"></div>
                    {{ $v['nama'] }}
                  </a>
                </td>
                <td>{{ $v['harga'] }}</td>
                <td>
                  <div class="form-group--number">
                    <button class="minus"><span>-</span></button>
                    <input class="form-control" type="text" value="2">
                    <button class="plus"><span>+</span></button>
                  </div>
                </td>
                <td>{{ $v['harga'] * 2 }}</td>
                <td><div class="ps-remove"></div></td>
              </tr>
            @empty
              <tr>
                <td class="text-center" colspan="5">Sorry your cart is empty</td>
              </tr>
            @endforelse
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
              <button class="ps-btn ps-btn--gray">Continue Shopping</button>
            </div>
          </div>
          <div class="ps-cart__total">
            <h3>Total Price: <span> 2599.00 $</span></h3><a class="ps-btn" href="checkout.html">Process to checkout<i class="ps-icon-next"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endpush

@push('scripts')
@endpush