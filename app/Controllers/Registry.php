<?php

namespace App\Controllers;

use App\Models\Users;

class Registry extends BaseController
{
    public function perspective()
    {
        $data['title'] = 'DOST X - OPCR | Registry - Perspective';
        return view('registry/perspective-view', $data);
    }

    public function indicators()
    {
    }
}
