<?php

namespace App\Filters;


use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;


class Auth_Filter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        // jika user belum login
        if (!session()->get('logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('login');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $user = session('id');

        if ($user && is_array($user) && isset($user['role']) && $user['role'] === '1') {
            return redirect()->to('dashboard');
        }
    }
}