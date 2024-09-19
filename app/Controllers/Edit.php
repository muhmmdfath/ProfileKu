<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Edit extends BaseController
{
    //
    protected $db, $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index()
    {

        $query = $this->builder->get();
        $data['users'] = $query->getResult();

        return view('edit/index', $data);
    }

    public function edit($id)
    {

        $this->builder->where('id', $id);
        $user = $this->builder->get()->getRow();

        if (empty($user)) {
            return redirect()->to('/admin');
        }

        // Debugging: Lihat properti dari objek user
        // var_dump($user);
        // die;

        $data['user'] = $user;
        $data['title'] = 'Edit Profile';

        return view('edit/index', $data);
    }

    public function update($id)
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'fullname' => $this->request->getPost('fullname'),
        ];

        $this->builder->where('id', $id);
        $this->builder->update($data);

        return redirect()->to('/admin')->with('message', 'User updated successfully.');
    }
}
