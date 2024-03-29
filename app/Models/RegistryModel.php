<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistryModel extends Model
{
    public function get_all($tablename){
        $builder = $this->db->table($tablename);
        $builder = $builder->get();

        return $builder->getResultArray();
    }

    public function get_single_data_where($tablename,$param){
        $builder = $this->db->table($tablename);
        $builder->where($param);
        $builder = $builder->get();

        return $builder->getRowArray();
    }

    public function delete_data($tablename, $param) {
        $builder = $this->db->table($tablename);
        $builder->where($param);
        $result = $builder->delete();
    
        return $result;
    } 

    public function insert_data($tblname, $data)
    {
        $builder = $this->db->table($tblname);
        $builder->insert($data);

        return;
    }

    public function update_data($tblname, $name, $id)
    {
        $builder = $this->db->table($tblname);
        $builder->where($id, $id);
        $builder->update($name);
    
        return;
    }
    

}