<?php

namespace App\Controllers;

use App\Models\RegistryModel;

class Registry extends BaseController
{
    private $registryModel;

    public function __construct(){
        $this->registryModel = new RegistryModel();

        parent::__construct();
    }

    public function perspective()
    {
        $data['title'] = 'DOST X - OPCR | Registry - Perspective';

        $data['perspectives'] = $this->registryModel->get_all('perspective');
        return view('registry/perspective-view', $data);
    }

    public function indicator()
    {
        $data['title'] = 'DOST X - OPCR | Registry - Indicator';
        return view('registry/indicator-view', $data);
    }
}
