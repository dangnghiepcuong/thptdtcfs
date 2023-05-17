<x-layout>
    <x-slot:title>
        Đăng nhập
    </x-slot:title>

    <div class="holder j-c_c">
        <div class="card">
            <form action="{{ url('login') }}" method="post" class="form-login">
                @csrf
                <b>
                    <div class="text_title">Đăng nhập</div>
                </b>
                <!-- <label for="username" class="form-label">Tài khoản</label><br> -->
                <input name="Username" type="text" id="username" class="input_primary" placeholder="Tài khoản">
                <div class="input-warning"></div>
                <!-- <div class="h5"></div> -->

                <!-- <label for="password" class="form-label">Mật khẩu</label><br> -->
                <input name="Password" type="password" id="password" class="input_primary" placeholder="Mật khẩu">
                <div class="input-warning"></div>

                <input type="submit" value="Đăng nhập" class="btn_primary">
                <div id="line-wrap" class="holder j-c_s-b">
                    <a href="/login/forgot_password" class="text_clickable center">Quên mật khẩu</a>
                    <a href="{{url('/login/register_account')}}" class="text_clickable center">Đăng ký tài khoản</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>