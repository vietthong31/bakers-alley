<x-layout pageTitle='Đăng nhập'>
    <x-inner-header innerTitle='Đăng nhập' />
    <div class="container">
        <div id="content">

            <form action="#" method="post" class="beta-form-checkout">
                @csrf
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <h4>Đăng nhập</h4>
                        <div class="space20">&nbsp;</div>


                        <div class="form-block">
                            <label for="email">Email address*</label>
                            <input type="email" name="email" id="email" required>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-block">
                            <label for="pwd">Password*</label>
                            <input type="text" name="pwd" id="pwd" required>
                            @error('pwd')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                        @if (session()->has('message'))
                            {{ session('message') }}
                        @endif
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
</x-layout>
