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
        $data['title'] = 'DOST X - OPCR | Module - Module';

        $data['targets'] = $this->moduleModel->get_all('tbltarget_summary');
        return view('module/target-view', $data);
    }


}
