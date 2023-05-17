<x-layout>
    <x-slot:title>
        Đăng ký tài khoản
    </x-slot:title>

    <div class="holder j-c_c">
        <div id="form-register" class="card">
            <form action="{{ url('/login/register_account') }}" method="post" id="form-register-account">
                @csrf
                <b>
                    <div class="text_title">Đăng ký tài khoản</div>
                </b>
                <input id="username" name="username" type="text" class="input_primary" placeholder="Tên tài khoản" 
                value="<?php echo session()->get('username'); ?>">
                <div id="message1" class="input-warning"><?php echo session()->get('message1'); ?></div>

                <input id="password" name="password" type="password" class="input_primary" placeholder="Mật khẩu" value="">
                <div id="message2" class="input-warning"><?php echo session()->get('message2'); ?></div>

                <input id="repeat_password" name="repeat_password" type="password" class="input_primary" placeholder="Nhập lại mật khẩu" value="">
                <div id="message3" class="input-warning"><?php echo session()->get('message3'); ?></div>

                <input id="email" name="email" type="text" class="input_primary" placeholder="Email" 
                value="<?php echo session()->get('email'); ?>">
                <div id="message4" class="input-warning"><?php echo session()->get('message4'); ?></div>

                <div for="target_user" class="text_labelFor">Đối tượng sử dụng</div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="target_user" id="customer" checked>
                    <label class="form-check-label" for="customer">
                        Khách hàng
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="target_user" id="shop">
                    <label class="form-check-label" for="shop">
                        Shop
                    </label>
                </div>

                <input type="submit" value="Đăng ký" id="register_account" class="btn_primary">
                <a href="/login" class="text_clickable center">Đăng nhập</a>
            </form>
        </div>
    </div>

    <?php
    ?>

    <!-- <script src="{{ asset('resources/js/register_account.js') }}"></script> -->
</x-layout>