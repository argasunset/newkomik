<?php

namespace App\Controllers;

class LoginAnggota extends BaseController
{
    public function masuk()
    {
        $ModelAnggota = new \App\Models\ModelAnggota();
        $login = $this->request->getPost('login');
        if ($login) {
           $username = $this->request->getPost('username');
           $password = $this->request->getPost('password');
        if ($username == '' or $password == '') {
            $err = "silhkan masukan username dan password";
        }
        if (empty($err)) {
           $dataAnggota = $ModelAnggota->where("username", $username)->first();
           if ($dataAnggota['password'] != md5('password')) {
            $err = "password yang anda masukan salah";
            return redirect()->to('user');
           }
        }
        if (empty($err)) {
            $dataSesi = [
                'user_id' => $dataAnggota['member_id'],
                'username' => $dataAnggota['username'],
                'password' => $dataAnggota['password'],
            ];
            session()->set($dataSesi);
        }
        if ($err) {
            session()->setFlashdata('username', $username);
            session()->setFlashdata('error', $err);
            return redirect()->to("login");
        }
        }
        return view('masuk_anggota');
    }
}
