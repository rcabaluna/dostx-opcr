<?php

namespace App\Controllers;

use App\Models\ModuleModel;

class Modules extends BaseController
{
    private $moduleModel;

    public function __construct()
    {
        $this->moduleModel = new ModuleModel();

        parent::__construct();
    }


    public function test()
    {
        $data['title'] = 'DOST X - OPCR | Modules - Test';

        return view('modules/test-view', $data);
    }

    public function target()
    {
        $data['title'] = 'DOST X - OPCR | Module - Module';
        $data['targets'] = $this->moduleModel->get_all('tbltarget_summary');
        return view('module/target-view', $data);
    }

    public function add_target()
    {
        $data = $this->request->getPost();
        $insert = $this->moduleModel->insert_data("tbltarget_summary", $data);
        return redirect()->to(base_url('module/target')); 
    }

    public function edit_target()
    {
        $input = $this->request->getPost();

        $data = [
            'year'=> $input['year'],
            'version' => $input['version'],
            'status' => $input['status']
        ];

        $target_id['targetsummary_id'] = $input['targetsummary_id'];
        $this->moduleModel->update_data('tbltarget_summary', $data, $target_id);
        
        return redirect()->to(base_url('module/target')); 
    }
    
    public function delete_target($id = '') {
        $targetsummary_id = $id;
    
        $deletetarget = $this->moduleModel->delete_data('tbltarget_summary', array('targetsummary_id' => $targetsummary_id));
    
        return redirect()->to(base_url('module/target')); 
    }
    
}
