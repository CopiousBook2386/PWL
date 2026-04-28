<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProdukController extends BaseController
{
    public function index()
    {
        if (!session()->get('isloggedin')) {
            return redirect()->to('/login');
        }
        //SEARCHING
        $keyword = $this->request->getGet('keyword');

         $produk = [
            ['nama' => 'Laptop'],
            ['nama' => 'Mouse'],
            ['nama' => 'Keyboard']
        ];
        //FILTERING
        if ($keyword) {
        $data['produk'] = $this->produkModel
            ->like('nama', $keyword)
            ->findAll();
        }

        $data['produk'] = $produk;
        return view('v_produk', $data);
    }
}

