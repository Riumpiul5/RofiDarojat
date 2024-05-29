<?php

namespace App\Controllers;

use App\Models\ResumeModel;

class ResumeController extends BaseController
{
    // public function index(): string
    // {
    //     return view('layout/resume');
    // }

    // public function ubah($name){
    //     $data['judul'] = "Ubah Data about me";
    //     $users = new ResumeModel();
    //     $data['users_get'] = $users->where('name', $name)->first();
        
    //     echo view ('resume_ubah', $data);
    // }

    protected $resumeModel;

    public function __construct()
    {
        $this->resumeModel = new ResumeModel();
    }

    public function index()
    {
        // Ambil data dari database, misalnya dengan ID 1
        $data['users'] = $this->resumeModel->find(1);
        echo view('layout/resume', $data);
    }

    public function edit($id)
    {
        $users = $this->resumeModel->find($id);

        if (!$users) {
            return redirect()->to('/resume_controller/1/edit')->with('error', 'User not found.');
        }

        
        $data['users'] = $users;
        return view('/layout/resume_ubah', $data);
    }

    public function update($id)
    {
        // Ambil data dari form
        $data = [
            'name' => $this->request->getPost('name'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'hoby' => $this->request->getPost('hoby'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
        ];

        if ($this->resumeModel->update($id, $data)) {
            return redirect()->to (base_url('/#'))->with('message', 'Data has been updated successfully.');
        } else {
            return redirect()->back(base_url('/#'))->with('error', 'Failed to update data.');
        }

        
    }

    // public function update($id){
    //     $users = new ResumeModel();
    //     $data = ['users'] = $users->where('id', $id)->first();
    //     $validation = \Config\Services::validation();
    //     $validation->setRules([
    //         'name' => 'required',
    //         'tanggal_lahir' => 'required',
    //         'alamat' => 'required',
    //         'hoby' => 'required',
    //         'email' => 'required',
    //         'phone' => 'required',
    //     ]);
    //     $isDataValid = $validation->withRequest($this->request)->run();
    //     if($isDataValid){
    //         $users->where('id', $id);
    //         $users->set([
    //             'name' => $this->request->getPost('name'),
    //             'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
    //            'alamat' => $this->request->getPost('alamat'),
    //             'hoby' => $this->request->getPost('hoby'),
    //             'email' => $this->request->getPost('email'),
    //             'phone'=> $this->request->getPost('phone'),
    //         ]);
    //         $users->update();
    //         sess
    //     }

    //     echo view('/layout/resume_ubah', $data);
            
    


}