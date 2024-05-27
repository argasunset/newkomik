<?php

namespace App\Controllers;

class DaftarUser extends BaseController
{
    public function masuk()
    {
        $ModelDaftarUser = new \App\Models\ModelDaftarUser();
        $login = $this->request->getPost('login');
        if ($login) {
            $first_name = $this->request->getPost('first_name');
            $last_name = $this->request->getPost('last_name');
            $email = $this->request->getPost('email');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
        }
        return view('register');
    }
}
