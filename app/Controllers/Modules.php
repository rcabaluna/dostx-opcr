<?php

namespace App\Controllers;

use App\Models\RegistryModel;

class Modules extends BaseController
{
    // private $registryModel;

    public function __construct()
    {
        // $this->registryModel = new RegistryModel();

        parent::__construct();
    }


    public function test()
    {
        $data['title'] = 'DOST X - OPCR | Modules - Test';

        return view('modules/test-view', $data);
    }
}
