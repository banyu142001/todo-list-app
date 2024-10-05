<?php

namespace App\Controllers;

use App\Models\MateriModel;

class Materi extends BaseController
{

    function index()
    {

        $materiModel = new MateriModel();

        $data = [
            'title' => 'todo-list-app | Materi Belajar',
            'data_materi' => $materiModel->selectAllData()
        ];

        return view('list/index', $data);
    }


    // create data materi
    public function create()
    {

        $data = [

            'title' => 'Create Materi'
        ];

        return view('list/create', $data);
    }

    // save data materi

    public function save()
    {

        // inisialisasi Model
        $materiModel = new MateriModel();

        // set rules
        $rules = [

            'judul' => [

                'label' => 'Judul Materi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Materi tidak boleh kosong !!'
                ]
            ]
        ];

        // validation check
        if (!$this->validate($rules)) {

            return redirect()->to('/materi/create')->withInput();
        }

        // getData
        $data = [

            'judul_materi' => $this->request->getVar('judul'),
            'des_materi' => $this->request->getVar('deskripsi'),
            'sumber' => $this->request->getVar('sumber'),
        ];

        $materiModel->saveData($data);

        session()->setFlashdata('flash', 'Data berhasil ditambahkan !');
        return redirect()->to('materi');
    }

    // edit / data materi
    public function edit($id_materi)
    {

        $materiModel = new MateriModel();

        $data = [
            'title' => 'Edit Materi',
            'materi' => $materiModel->selectAllData(['id_materi' => $id_materi]),
        ];

        return view('list/edit', $data);
    }
    public function update()
    {
        $materiModel = new MateriModel();

        // set rules
        $rules = [

            'judul' => [

                'label' => 'Judul Materi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Materi tidak boleh kosong !!'
                ]
            ]
        ];

        if (!$this->validate($rules)) {

            return redirect()->to('/materi/edit/' . $this->request->getVar('id_materi'))->withInput();
        }

        // getData
        $data = [

            'judul_materi' => $this->request->getVar('judul'),
            'des_materi' => $this->request->getVar('deskripsi'),
            'sumber' => $this->request->getVar('sumber'),
            'id_materi' => $this->request->getVar('id_materi'),
        ];

        $materiModel->save($data);

        return redirect()->to('/materi');
    }

    // delete materi

    public function delete($id_materi)
    {

        $materiModel = new MateriModel();

        $materiModel->delete(['id_materi' => $id_materi]);

        return redirect()->to('materi');
    }
}
