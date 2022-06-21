<?php

namespace App\Controllers;

use App\Models\DataDiri;



class Aboute extends BaseController
{

    public function __construct()
    {
        $this->data=new DataDiri();
    }

    public function index()
    {
        echo view('/aboute/cv', ['data' => $this->data->first()]);


    }
    
    public function add()
    {
        echo view('aboute/auth');
    }
    public function simpan()
    {
        $this->data->save(
            [
                'nama' => $this->request->getVar('nama'),
                'tempat_lahir' => $this->request->getVar('tempat_lahir'),
                'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
                'alamat' => $this->request->getVar('alamat'),
                'nohp' => $this->request->getVar('nohp'),
                'email' => $this->request->getVar('email'),

            ]
        );
        return redirect()->to('/Aboute/auth');
    }
}