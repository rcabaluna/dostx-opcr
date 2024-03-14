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

        $data['semester'] = $this -> moduleModel->get_all('tblsemester');
        $data['quarter'] = $this-> moduleModel->get_all('tblquarter');
        $data['indicators'] = $this->moduleModel->get_all('indicator');
        $data['perspectives'] = $this->moduleModel->get_all('perspective');
        $data['locations'] = $this->moduleModel->get_all('location');
        return view('module/test-view', $data);
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

        $target_id['targetsummaryid'] = $input['targetsummaryid'];
        $this->moduleModel->update_data('tbltarget_summary', $data, $target_id);
        
        return redirect()->to(base_url('module/target')); 
    }
    
    public function delete_target($id = '') {
        $targetsummary_id = $id;
    
        $deletetarget = $this->moduleModel->delete_data('tbltarget_summary', array('targetsummaryid' => $targetsummary_id));
    
        return redirect()->to(base_url('module/target')); 
    }

    public function add_edit_test()
    {
        $input = $this->request->getPost();

        $detailsid = $this-> moduleModel->get_single_data_where('tbltarget_details',array('tbldetailsid' => $input['tbldetailsid']));
        $data = [
            'value'=> $input['value'],
            'targetsummaryid' => $input['targetsummaryid'],
            'indicatorid' => $input['indicatorid'],
            'locationid' => $input['locationid'],
            'quarterid' => $input['quarterid']
        ];

        if ($detailsid == null){

            $this->moduleModel->insert_data("tbltarget_details", $data);
            return redirect()->to(base_url('module/test')); 

        } else {
            $dtls_id['targetdetailsid'] = $input['targetdetailsid'];
            $this->moduleModel->update_data('tbltarget_details', $data, $dtls_id);
            
            return redirect()->to(base_url('module/test')); 
        } 
    }
    
    
}
