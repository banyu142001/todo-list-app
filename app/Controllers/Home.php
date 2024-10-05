<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'todo-list-app | Home',
        ];

        return view('home/index', $data);
    }
}
