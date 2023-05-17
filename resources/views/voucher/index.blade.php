<x-layout>
    <x-slot:title>Voucher</x-slot:title>

    <b>
        <div class="text_title text_center">THPT Dầu Tiếng Confessions</div>
    </b>

    <div class="h5"></div>

    <div class="holder j-c_c">
        <!-- <div class="text_labelFor">Điền voucher vào đây!!!</div>
        <br>
        <div class="h5"></div>
        <div class="d-flex j-c_sb">
            <form action="/Voucher" method="get">
                <input id="voucher-code" name="Code" type="text" placeholder="AWX1234" class="form-input w150 l-h30 mg-t3 bd0 bd-r5 f-s18">
                <input type="submit" value=">>Go" class="btn btn-check-voucher white t-a_c">
            </form>
        </div> -->

        <div class="input-group flex-nowrap ma-w500">
            <span class="input-group-text" id="addon-wrapping">#CODE</span>
            <input type="text" class="form-control" placeholder="ABCX1234" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
    </div>

    <div class="h10"></div>
    <div class="holder j-c_c">
        <div id="voucher" class="card">
            <b>
                <div id="SName" class="text_title text_center">ShopName</div>
            </b>
            <div id="VCode" class="t-a_c">VoucherCode</div>
            <div id="div-image" class="ma-w180 h100 mg0a mg-t10 mg-b10 bd1">
                <img src="#" class="img-fluid" alt="Hình ảnh goes here">
            </div>
            <div id="description" class="ma-w220 card-text text_content f-s16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius in tempore ducimus aspernatur velit temporibus perspiciatis aliquam nemo, dolorem harum accusantium, cum, necessitatibus veniam corrupti facere provident eum laborum magni!</div>
            <div class="mg0a">
                <button class="btn btn-success">Dùng voucher</button>
            </div>
        </div>
    </div>
    <br />
    <!-- <div class="w190 h35 mg0a red">@ViewBag.Message</div> -->
</x-layout>