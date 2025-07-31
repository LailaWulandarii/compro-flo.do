<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ActivityController extends BaseController
{
    public function index()
    {
        return view('aktivitas');
    }
}
