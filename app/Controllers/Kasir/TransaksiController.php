<?php

namespace App\Controllers\Kasir;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;

class TransaksiController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Transaksi'
        ];

        return view('kasir/transaksi/index', $data);
    }
    public function detail($id)
    {
        $modelTransaksi = new TransaksiModel();

        $decodeNoTransaksi = base64_decode($id);
        $getTransaksi = $modelTransaksi->find($decodeNoTransaksi);
        $noOrder = $getTransaksi['no_order'];
        $datasOrder = $modelTransaksi->getTransaksi($noOrder);
        $data = [
            'id_transaksi' => $decodeNoTransaksi,
            'nama_pembeli' => $getTransaksi['nama_pembeli'],
            'total_harga' => $getTransaksi['total_harga'],
            'data_order' => $datasOrder
        ];
        return json_encode($data);
    }
}
