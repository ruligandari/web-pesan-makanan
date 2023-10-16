<?php

namespace App\Controllers\Pemilik;

use App\Controllers\BaseController;

class ListUserController extends BaseController
{
    public function index()
    {
        $admin = new \App\Models\AdminModel();
        $admins = $admin->findAll();
        $data = [
            'title' => 'List User',
            'admin' => $admins,
        ];

        return view('pemilik/user/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah User',
        ];

        return view('pemilik/user/create', $data);
    }

    public function add()
    {
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $password = $this->request->getVar('password');
        $role = $this->request->getPost('role');

        $admin = new \App\Models\AdminModel();
        $admin->insert([
            'nama' => $nama,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => $role,
        ]);

        return redirect()->to(base_url('pemilik/list-user'))->with('success', 'User berhasil ditambahkan');
    }
}
