<?php

namespace App\Controllers\Pemilik;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Dashboard"
        ];
        return view("Pemilik/dashboard/index", $data);
    }
}
