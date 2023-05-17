$(document).ready(function () {
    $('#username').change(function(){
        $.ajax({
            cache: false,
            url: 'register_account',
            type: 'POST',
            data:'_token = <?php echo csrf_token() ?>',
            success: function (data) {
                
            }
        })
    })

    $('#register_account').click(function () {
        username = $('#username').val()
        password = $('#password').val()
        repeat_password = $('#repeat_password').val()

        message1 = ''
        message2 = ''
        message3 = ''
        message4 = ''

        validation = true

        if (username == '') {
            validation = false
            message1 = '*Nhập tên tài khoản'
        }
        if (password == '') {
            validation = false
            message2 = '*Nhập mật khẩu'
        }
        else if (repeat_password == '') {
            validation = false
            message3 = '*Nhập lại mật khẩu'
        }
        else if (password != repeat_password) {
            validation = false
            message3 = '*Nhập lại mật khẩu phải giống với mật khẩu'
        }

        $('#message1').text(message1)
        $('#message2').text(message2)
        $('#message3').text(message3)


        if (validation == false)
            return
        else 
            $('#form-register-account').submit()
    })
})