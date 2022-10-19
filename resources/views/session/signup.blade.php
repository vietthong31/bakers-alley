<x-layout pageTitle='Đăng ký'>

    <x-inner-header innerTitle='Đăng ký' />

    <div class="container">
        <div id="content">

            @if (session()->has('success'))
                <x-noti :message="session('success')" />
            @endif

            <form action="#" method="post" class="beta-form-checkout">
                @csrf
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <h4>Đăng kí</h4>
                        <div class="space20">&nbsp;</div>


                        <div class="form-block">
                            <label for="email">Email address*</label>
                            <input type="email" name="email" id="email" required>
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-block">
                            <label for="your_last_name">Fullname*</label>
                            <input type="text" name="name" id="name" required>
                            @error('name')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-block">
                            <label for="adress">Address*</label>
                            <input type="text" name="address" id="address" value="" required>
                            @error('address')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="form-block">
                            <label for="phone">Phone*</label>
                            <input type="text" name="phone" id="phone" required>
                            @error('phone')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <input type="hidden" name="level" value="2">

                        <div class="form-block">
                            <label for="phone">Password*</label>
                            <input type="text" name="password" id="password" required>
                            @error('password')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-block">
                            <label for="phone">Confirm password</label>
                            <input type="text" name="confirmpwd" id="confirmpwd" required>
                            @error('confirmpwd')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
</x-layout>
