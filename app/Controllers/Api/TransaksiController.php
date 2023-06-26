<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\TransaksiModel;
use \Config\Services;
use CodeIgniter\API\ResponseTrait;

use function App\Helpers\generateNoTransaksi;
use function App\Helpers\generateQrCode;

class TransaksiController extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $request = service('request');
        helper('transaksi');
        $tahun = date('Y');
        $noTransaksi = generateNoTransaksi($tahun);
        $enkripsiNoTransaksi = base64_encode($noTransaksi);
        helper('qrcode');

        $orderItem = new OrderModel();
        $transaksi = new TransaksiModel();
        
        $jsonPayload = $request->getVar();
        if (empty($jsonPayload)) {
            return $this->fail('Data Tidak Ditemukan', 400);
        }

        if (!is_object($jsonPayload)) {
            return $this->fail('Data Harus Berupa Object', 400);
        }
        $tglTransaksi = date('Y-m-d');
        $namaPembeli = $jsonPayload->nama_pembeli;
        $itemsOrder = $jsonPayload->items;
        $hargaTotal = $jsonPayload->harga_total;
        $status = $jsonPayload->status;

            $data_transaksi = [
                'no_transaksi' => $noTransaksi,
                'no_order' => 'ORD/001/2023',
                'nama_pembeli' => $namaPembeli,
                'total_harga' => $hargaTotal,
                'tgl_transaksi' => $tglTransaksi,
                'status' => $status,
            ];
            if($transaksi->insert($data_transaksi) == false){
                return $this->fail('Gagal Menambahkan Data', 400);
            }
            $transaksi->insert($data_transaksi);

            foreach($itemsOrder as $item){
                $orders = [
                    'nama_produk' =>  $item->nama_produk,
                    'kuantitas_produk' => $item->kuantitas,
                    'harga_produk' => $item->harga_produk,
                ];
                if ($orderItem->insert($orders) == false) {
                    return $this->fail('Gagal Menambahkan Data', 400);
                }
                $orderItem->insert($orders);
                
            }
            $data = [
                'messages' => "Transaksi Berhasil, Tunjukan QR Code ini ke Kasir",
                'qrcode' => generateQrCode($enkripsiNoTransaksi),
            ];
            
            return $this->respond($data, 200);
            
    }

    public function view(){

    }
}
