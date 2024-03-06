<?php

namespace App\Models;

use CodeIgniter\Model;

class ModuleModel extends Model
{
    public function get_all($tablename){
        $builder = $this->db->table($tablename);
        $builder = $builder->get();

        return $builder->getResultArray();
    }

}