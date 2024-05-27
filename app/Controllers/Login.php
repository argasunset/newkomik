<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function masuk()
    {
        $ModelUser = new \App\Models\ModelUser();
        $login = $this->request->getPost('login');
        if ($login) {
           $username = $this->request->getPost('username');
           $password = $this->request->getPost('password');
        if ($username == '' or $password == '') {
            $err = "silhkan masukan username dan password";
        }
        if (empty($err)) {
           $dataUser = $ModelUser->where("username", $username)->first();
           if ($dataUser['password'] != md5('password')) {
            $err = "password yang anda masukan salah";
            return redirect()->to('user');
           }
        }
        if (empty($err)) {
            $dataSesi = [
                'user_id' => $dataUser['member_id'],
                'username' => $dataUser['username'],
                'password' => $dataUser['password'],
            ];
            session()->set($dataSesi);
        }
        if ($err) {
            session()->setFlashdata('username', $username);
            session()->setFlashdata('error', $err);
            return redirect()->to("login");
        }
        }
        return view('masuk');
    }
}
