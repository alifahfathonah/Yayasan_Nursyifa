<?php

namespace App\Controllers;

use App\Models\user;


class Login extends BaseController{

    public function login(): string{
        return view('login');
    }

    public function register(): string{
        return view('register');
    }

    public function index(){
        if(session('id')){
            return redirect()->to(site_url('dashboard'));
        }
        return view('login');
    }

    public function login_user(){
        $session = session();

        if(!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors'=> ['required' => 'Username Tidak Boleh Kosong!']
                ],
            'password' => [
                'rules' => 'required',
                'errors'=> ['required' => 'Password Tidak Boleh Kosong!']
            ]
        ]))
        {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $userModel = new user();

        $user = $userModel->where('username',$username)->first();

        if($user){
            if(password_verify($password, $user['password'])){
                //jika username dan password benar
                $userData = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'username' => $user['username'],
                    'role' => $user ['role'],
                    'logged_in' => true
                ];

                $data = [];
                session()->set($userData);

                if($user ['role'] === '1'){
                    session()->setFlashdata('success', 'Login Berhasil', $data);
                    return redirect()->to('dashboard');
                }
               
            }
            else{
                return redirect()->back()->with('error', 'Username atau Password Salah!');
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('login')->with('Pesan', 'Logout sukses!');
    }

    public function register_user()
    {
        if(!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required'=> 'Username harus diisi!'
                ]
                ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required'=> 'Email harus diisi!'
                ]
                ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required'=> 'Password harus diisi!'
                ]
                ],
            'confirm_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required'=> 'Password harus diisi!',
                    'matches' => 'masukan Password yang sama!'
                ]
            ]
        ]))
        {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $data_user = new user();
        $data_user -> insert([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'role' => $this->request->getVar('role'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ]);

        session()->getFlashdata('success', 'Data user berhasil dibuat!');
        return redirect()->to(base_url('dashboard'));
    }
}


?>