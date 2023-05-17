<x-layout>
    <x-slot:title>Quên mật khẩu</x-slot:title>

    <div class="holder j-c_c">
        <div class="card">
            <form action="/Login/ResetPassword" method="post" class="form-login">
                <div class="text_title"><b>Cấp lại mật khẩu</b></div>
                <!-- <label for="username" class="form-label">Tài khoản</label><br> -->
                <input name="Username" type="text" id="username" class="input_primary" placeholder="Tài khoản">
                <div class="h5"></div>

                <input type="submit" value="Gửi mật khẩu qua email" class="btn_primary">
                <div class="h10"></div>
                <a href="/login" class="text_clickable center">Đăng nhập</a>
            </form>
        </div>
    </div>
</x-layout>