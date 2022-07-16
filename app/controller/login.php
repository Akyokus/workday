<?php
if (!session("user")){
    if (post('submit')){
        $email = post('username');
        $password = post('password');
        if (!$email) {
            $error = 'Lütfen email adresinizi giriniz.';
        } else if (!$password) {
            $error = 'Lütfen şifrenizi giriniz.';
        } else {
            $row = user::userExist($email);
            if ($row) {
                if ($password === $row['password']) {

                    $success = 'Başarıyla giriş yaptınız. Yönlendiriliyorsunuz...';
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['user']=$row['username'];
                    header('Refresh:1;url=' . site_url('index'));
                } else {
                    $error = 'Hatalı bir şifre girdiniz. Lütfen tekrar deneyiniz.';
                }
            } else {
                $error = 'Böyle bir email ile kayıtlı üye bulunmamaktadır.';
            }
        }
    }
}else{
    header('Refresh:1;url=' . site_url('index'));
}

require view('login');