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

    public function get_single_data_where($tablename,$param){
        $builder = $this->db->table($tablename);
        $builder->where($param);
        $builder = $builder->get();

        return $builder->getRowArray();
    }
    
}