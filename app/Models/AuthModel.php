<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    public function insert_data($data)
    {
        $builder = $this->db->table('tbluseraccount');
        $builder->insert($data);

        return view;
    }
}