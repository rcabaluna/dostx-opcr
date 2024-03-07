<?php

namespace App\Controllers;

use App\Models\ModuleModel;

class Module extends BaseController
{
    private $moduleModel;

    public function __construct()
    {
        // Initialize ModuleModel
        $this->moduleModel = new ModuleModel();

        parent::__construct();
    }

    public function target()
    {
        // Set title
        $data['title'] = 'DOST X - OPCR | Module - Module';

        // Get targets data from Model
        $data['targets'] = $this->moduleModel->get_all('tbltarget_summary');

        // Load view with data
        return view('module/target-view', $data);
    }

    public function add_target()
    {
        // Get POST data
        $data = $this->request->getPost();

        // Insert data into the database
        $insert = $this->moduleModel->insert_data("tbltarget_summary", $data);

        // Redirect to target page
        return redirect()->to(base_url('module/target'));
    }

    public function edit_target()
    {
        // Get POST data
        $input = $this->request->getPost();

        // Prepare data for updating
        $target_year['year'] = $input['year'];
        $target_version['version'] = $input['version'];
        $target_id['targetsummary_id'] = $input['targetsummary_id'];

        // Update data in the database
        $this->moduleModel->update_data('tbltarget_summary', $target_year, $target_version, $target_id);

        // Redirect to target page
        return redirect()->to(base_url('module/target'));
    }

    public function delete_target($id = '')
    {
        // Get target summary ID
        $targetsummary_id = $id;

        // Delete target from the database
        $deletetarget = $this->moduleModel->delete_data('tbltarget_summary', array('targetsummary_id' => $targetsummary_id));

        // Redirect to target page
        return redirect()->to(base_url('module/target'));
    }
}
