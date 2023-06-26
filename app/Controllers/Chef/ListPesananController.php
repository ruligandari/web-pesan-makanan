<?php

namespace App\Controllers\Chef;

use App\Controllers\BaseController;

class ListPesananController extends BaseController
{
    public function index()
    {
        $listPesanan = new \App\Models\TransaksiModel();
        $data = [
            'title' => 'List Pesanan',
            'listpesanan' => $listPesanan->findAll()
        ];

        return view('chef/list-pesanan/index', $data);

    }

    public function detail($s1, $s2, $s3)
    {
        $noOrder = $s1.'/'.$s2.'/'.$s3;
        $listPesanan = new \App\Models\TransaksiModel();
        $no_order = $listPesanan->getTransaksi($noOrder);
        $data = [
            'title' => 'Detail Pesanan',
            'listpesanan' => $no_order,
        ];

        return view('chef/list-pesanan/detail', $data);
    }
}
