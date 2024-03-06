<?php

namespace App\Controllers;

use App\Models\ModuleModel;

class Module extends BaseController
{
    private $moduleModel;

    public function __construct()
    {
        $this->moduleModel = new ModuleModel();

        parent::__construct();
    }

    public function target()
    {
        $data['title'] = 'DOST X - OPCR | Modules - Modules';

        $data['target'] = $this->moduleModel->get_all('target');
        return view('modules/target', $data);
    }


}
