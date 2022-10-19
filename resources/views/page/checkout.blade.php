@php
$user = auth()->user();
@endphp

<x-layout pageTitle="Thanh toán">
    <x-inner-header innerTitle="Đặt hàng" />

    <div class="container">
        <div id="content">

            <form action="{{ route('cart.checkout') }}" method="post" class="beta-form-checkout">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Đặt hàng</h4>
                        <div class="space20">&nbsp;</div>

                        <div class="form-block">
                            <label for="name">Họ tên*</label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}"
                                placeholder="Họ tên"
                                required>
                        </div>
                        {{-- <div class="form-block">
                            <label>Giới tính </label>
                            <input id="gender" type="radio" class="input-radio" name="gender" value="nam"
                                checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                            <input id="gender" type="radio" class="input-radio" name="gender" value="nữ"
                                style="width: 10%"><span>Nữ</span>

                        </div> --}}

                        <div class="form-block">
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}" required
                                placeholder="expample@gmail.com">
                        </div>

                        <div class="form-block">
                            <label for="adress">Địa chỉ*</label>
                            <input type="text" name="address" id="adress" value="{{ $user->address }}"
                                placeholder="Street Address" required>
                        </div>


                        <div class="form-block">
                            <label for="phone">Điện thoại*</label>
                            <input type="text" name="phone" id="phone" value="{{ $user->phone }}" required>
                        </div>

                        <div class="form-block">
                            <label for="notes">Ghi chú</label>
                            <textarea name="note" id="note"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="your-order">
                            <div class="your-order-head">
                                <h5>Đơn hàng của bạn</h5>
                            </div>
                            <div class="your-order-body" style="padding: 0px 10px">
                                <div class="your-order-item">
                                    <div>
                                        @if (session()->has('cart'))
                                            @foreach ($productCarts as $cart)
                                                <!--  one item	 -->
                                                <div class="media">
                                                    <img width="25%"
                                                        src="assets/dest/images/products/{{ $cart['item']->image }}"
                                                        alt=""
                                                        class="pull-left">
                                                    <div class="media-body">
                                                        <p class="font-large">{{ $cart['item']->name }}</p>
                                                        <span class="mt-1 color-gray your-order-info">Unit:
                                                            {{ $cart['item']->unit }}</span>
                                                        <span class="color-gray your-order-info mt-1">Quantity:
                                                            {{ $cart['qty'] }}</span>
                                                        <span class="color-gray your-order-info mt-1">Price:
                                                            {{ $cart['item']->unit_price }}</span>
                                                        <span class="color-gray your-order-info mt-1">Promotion:
                                                            {{ $cart['item']->promotion_price }}</span>
                                                    </div>
                                                </div>
                                                <!-- end one item -->
                                            @endforeach
                                        @endif

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="your-order-item">
                                    <div class="pull-left">
                                        <p class="your-order-f18">Tổng tiền:</p>
                                    </div>
                                    <div class="pull-right">
                                        <h5 class="color-black">{{ number_format($totalPrice) }}</h5>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="your-order-head">
                                <h5>Hình thức thanh toán</h5>
                            </div>

                            <div class="your-order-body">
                                <ul class="payment_methods methods">
                                    <li class="payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio"
                                            name="payment_method" value="COD" checked="checked"
                                            data-order_button_text="">
                                        <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                                        <div class="payment_box payment_method_bacs" style="display: block;">
                                            Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền
                                            cho nhân viên giao hàng
                                        </div>
                                    </li>

                                    <li class="payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio"
                                            name="payment_method" value="ATM" data-order_button_text="">
                                        <label for="payment_method_cheque">Chuyển khoản </label>
                                        <div class="payment_box payment_method_cheque" style="display: none;">
                                            Chuyển tiền đến tài khoản sau:
                                            <br>- Số tài khoản: 123 456 789
                                            <br>- Chủ TK: Tiệm bánh Baker's Alley
                                            <br>- Ngân hàng Vietcombank, Chi nhánh TPHCM
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div class="text-center"><button type='submit' class="beta-btn primary"
                                    href="{{ route('cart.checkout') }}">Đặt hàng <i
                                        class="fa fa-chevron-right"></i></button></div>
                        </div> <!-- .your-order -->
                    </div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
</x-layout>
