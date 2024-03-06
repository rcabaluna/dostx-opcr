<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    public function insert_data($tblname, $data)
    {
        $builder = $this->db->table($tblname);
        $builder->insert($data);

        return;
    }
}