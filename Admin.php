<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('input_siswa');
    }

    public function hasil()
    {
        $data['nama'] = $this->request->getVar('nama');
        $data['nis'] = $this->request->getVar('nis');
        $data['kelas'] = $this->request->getVar('kelas');
        $data['tgl'] = $this->request->getVar('tgl');
        $data['tpl'] = $this->request->getVar('tpl');
        $data['alamat'] = $this->request->getVar('alamat');
        $data['gender'] = $this->request->getVar('gender');
        $data['agama'] = $this->request->getVar('agama');

        return view('hasil_siswa', $data);
    }
}
