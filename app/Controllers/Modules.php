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

    public function target_details($id = '')
    {
        $targetsummary_id = $id;
        $data['title'] = 'DOST X - OPCR | Modules - Target Details';
        $data['targetsummaryid'] = $targetsummary_id;
        $data['semester'] = $this -> moduleModel->get_all('tblsemester');
        $data['quarter'] = $this-> moduleModel->get_all('tblquarter');
        $data['indicators'] = $this->moduleModel->get_all('indicator');
        $data['perspectives'] = $this->moduleModel->get_all('perspective');
        $data['locations'] = $this->moduleModel->get_all('location');

        $data['targetdetails'] = json_encode($this->moduleModel->get_target_details_value('tbltarget_details', array('targetsummaryid' => $targetsummary_id)));
    
        return view('module/details-view', $data);
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


        $this->moduleModel->update_data('tbltarget_summary', $data, $input['targetsummaryid']);
        
        return redirect()->to(base_url('module/target')); 
    }
    
    public function delete_target($id = '') {
        $targetsummary_id = $id;
    
        $deletetarget = $this->moduleModel->delete_data('tbltarget_summary', array('targetsummaryid' => $targetsummary_id));
    
        return redirect()->to(base_url('module/target')); 
    }
    
        public function add_edit_test()
        {
            if ($this->request->isAJAX()) {
                $input = $this->request->getPost(); 

                $data = array(
                    'targetsummaryid' => $input['targetsummaryid'],
                    'indicatorid' => $input['indicatorid'],
                    'locationid' => $input['locationid'],
                    'quarterid' => $input['quarterid']
                );

                $detailsid = $this->moduleModel->get_single_data_where('tbltarget_details', $data);
                var_dump($detailsid);
                if ($detailsid == null) {
                    $this->moduleModel->insert_data("tbltarget_details", $input);
                } else {
                    $this->moduleModel->update_test('tbltarget_details', $input, $detailsid['targetdetailsid']);
                }
                return $this->response->setJSON(['status' => 'success']);
            } else {
                return redirect()->to(base_url('modules/test'));
            }
        }
    
}
