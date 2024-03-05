<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = "Dashboard";
        return view('dashboard', $data);
    }

    public function projects()
    {
        $data['title'] = "Projects";
        return view('projects', $data);
    }

    public function registry()
    {
        $data['title'] = "Registry";
        return view('registry', $data);
    }

    public function Profile()
    {
        $data['title'] = "profile";
        return view('profile', $data);
    }
}
