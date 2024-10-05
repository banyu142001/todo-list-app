<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Front extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'My Todo-list-app'
        ];
        return view('front/index', $data);
    }
    // login method
    public function login()
    {

        // init model
        $userModel = new UserModel();

        // set rules
        $rules = [

            'username' => [

                'label' => 'username',
                'rules' => 'required',
            ],
            'password' => [

                'label' => 'password',
                'rules' => 'required',
            ],
        ];

        if (!$this->validate($rules)) {

            return redirect()->to('/')->withInput();
        }

        // get data
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // username cek
        $data_user = $userModel->selectAllUser($username);

        if ($data_user) {

            // password check and verify
            if (password_verify($password, $data_user['password'])) {

                // set session
                $login_session = [

                    'logged_in' => true,
                ];

                session()->set($login_session);
                return redirect()->to('/home');
            } else {

                session()->setFlashdata('flash', 'Password Wrong !!');
                return redirect()->back();
            }
        } else {

            session()->setFlashdata('flash', 'Username Not Found !!');
            return redirect()->back();
        }
    }

    // logout method
    public function logout()
    {

        session()->remove('logged_in');


        return redirect()->to('/');
    }
}


// 