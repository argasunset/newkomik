<?php

namespace App\Controllers;

use App\Models\OrangModel;
use CodeIgniter\CodeIgniter;
use CodeIgniter\HTTP\Files\UploadedFile;

class Orang extends BaseController
{
    protected $orangModel;
    public function __construct()
    {
        $this->orangModel = new OrangModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Orang',
            // 'orang' => $this->orangModel->finAll()
            'orang' => $this->orangModel->paginate(4),
            'pager' => $this->orangModel->pager
        ];
        return view('orang/index', $data);
    }
}
