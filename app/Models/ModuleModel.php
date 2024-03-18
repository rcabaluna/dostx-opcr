<?php

namespace App\Models;

use CodeIgniter\Model;

class ModuleModel extends Model
{
    public function get_all($tablename)
    {
        $builder = $this->db->table($tablename);
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function get_single_data_where($tablename, $param)
    {
        $builder = $this->db->table($tablename);
        $builder->where($param);
        $query = $builder->get();

        return $query->getRowArray();
    }

    public function get_all_data_where($tablename, $param)
    {
        $builder = $this->db->table($tablename);
        $builder->where($param);
        $query = $builder->get();

        return $query->getRowArray();
    }

    public function delete_data($tablename, $param)
    {
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

    public function update_data($tblname, $data, $id)
    {
        $builder = $this->db->table($tblname);
        $builder->where('targetsummaryid', $id);
        $builder->update($data); 

        return;
    }

    public function update_test($tblname, $data, $id)
    {
        $builder = $this->db->table($tblname);
        $builder->where('targetdetailsid',$id);
        $builder->update($data); 

        return;
    }
}
