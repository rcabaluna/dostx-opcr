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

        $data['indicator'] = $this->registryModel->get_all('indicator');
        $data['perspectives'] = $this->registryModel->get_all('perspective');
        return view('registry/indicator-view', $data);
    }

    public function location()
    {
        $data['title'] = 'DOST X - OPCR | Registry - Location';

        $data['locations'] = $this->registryModel->get_all('location');
        return view('registry/location-view', $data);
    }


    public function add_perspective()
    {

        $data = $this->request->getPost();
        $insert = $this->registryModel->insert_data("perspective", $data);

        return redirect()->to(base_url('registry/perspective')); 
    }

    public function edit_perspective()
    {
        $input = $this->request->getPost();
        $pers_name['name'] = $input['name'];
        $pers_id['perspectiveid'] = $input['perspectiveid'];
        $this->registryModel->update_data('perspective', $pers_name, $pers_id);
        
        return redirect()->to(base_url('registry/perspective')); 
    }
    
    public function delete_perspective($id = '') {
        $perspectiveId = $id;
    
        $this->registryModel->delete_data('perspective', array('perspectiveid' => $perspectiveId));
    
        return redirect()->to(base_url('registry/perspective')); 
    }

    public function add_indicator()
    {

        $data = $this->request->getPost();
        $insert = $this->registryModel->insert_data("indicator", $data);

        return redirect()->to(base_url('registry/indicator')); 
    }


    public function edit_indicator()
    {
    $input = $this->request->getPost();
    
    $data = [
        'perspectiveid' => $input['perspectiveid'],
        'description' => $input['description'],
        'order' => $input['order'],
    ];
    
    $indicatorid['indicatorid'] = $input['indicatorid'];
    
    $this->registryModel->update_data('indicator', $data, $indicatorid);
    
    return redirect()->to(base_url('registry/indicator')); 
    }

    public function delete_indicator($id = '') {
        $indicatorid = $id;
    
        $this->registryModel->delete_data('indicator', array('indicatorid' => $indicatorid));
    
        return redirect()->to(base_url('registry/indicator')); 
    }
    
}
