<x-layout>
    <x-slot:title>
        Đăng ký tài khoản
    </x-slot:title>
    <?php
    $legal_route = session()->get('legal_route');
    $message = session()->get('message');
    if ($legal_route == true && $message != '')
    {
        echo $message;
    }
    else
        echo 'Truy cập không hợp lệ!';
    ?>
</x-layout>