<?php

namespace App\Controllers;

use App\Models\ModelDaftarUser;

class DaftarUser extends BaseController
{
    public function daftar()
    {
        $userData = new ModelDaftarUser();

        $_POST['password'] = password_hash(
            $_POST['password'],
            PASSWORD_DEFAULT
        );
        $userData->insert($_POST);
        session()->setFlashdata('masssage', 'selamat registrasi baerhasil');
        return redirect()->to(base_url('user'));
    }
}
