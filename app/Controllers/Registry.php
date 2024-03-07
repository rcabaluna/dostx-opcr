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
        return view('registry/indicator-view', $data);
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
    
        $deletedPerspective = $this->registryModel->delete_data('perspective', array('perspectiveid' => $perspectiveId));
    
        return redirect()->to(base_url('registry/perspective')); 
    }
    
    
}
