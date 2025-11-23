<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'YAYASAN - Bersama Membangun Harapan'
        ];
        return view('home', $data);
    }
}
