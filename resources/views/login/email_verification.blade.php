<x-layout>
    <x-slot:title>
        Đăng ký tài khoản
    </x-slot:title>

    <div class="holder j-c_c">
        <div id="form-verification" class="card">
            <form action="{{ url('email_verification') }}" method="post" id="form-register-account">
                @csrf
                <b>
                    <div class="text_title">Mã xác nhận</div>
                </b>

                <input name="verification_code" type="text" class="input_primary" placeholder="Mã xác nhận">

                <input type="submit" value="Xác nhận" id="verify" class="btn_primary">

                <div id="line-wrap" class="holder j-c_s-b">
                    <a href="/login/back_register_account" id="back-form-register" class="text_clickable center">Quay lại</a>
                    <a href="#" class="text_clickable center">Gửi lại mã</a>
                </div>
        </div>
        </form>
    </div>
</x-layout>