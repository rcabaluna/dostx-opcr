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
        $insert = $this->authModel->insert_data("perspective", $data);

        return redirect()->to(base_url('registry/perspective')); 
    }

    public function edit_perspective(){
        $persdata = $param = [];
        $input = $this->request->getPost('$persdata');

        parse_str($_POST['$persdata'], $persdata);
        $param['perspectiveid'] = $persdata['perspectivei'];
        unset($persdata['perspectivei']);

        if (!array_key_exists('is_active',$persdata)) {
            $persdata['is_active'] = 0;
        }

        $persuser = $this->registryModel->update_data('tblusers',$persdata,$param);

        $this->session->setFlashdata('okstatus', 'true');
        echo $persuser;
    }

    public function delete_perspective($id = '') {
        $perspectiveId = $id;
    
        $deletedPerspective = $this->registryModel->delete_data('perspective', array('perspectiveid' => $perspectiveId));
    
        return redirect()->to(base_url('registry/perspective')); 
    }
    
    
}
