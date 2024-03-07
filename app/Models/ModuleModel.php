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

        // You might want to return the insert ID if needed
        return $this->db->insertID();
    }

    public function update_data($tblname, $year, $version, $id)
    {
        $builder = $this->db->table($tblname);
        $builder->where('targetsummary_id', $id['targetsummary_id']);
        $builder->update($year); // Update year
        $builder->update($version); // Update version

        // You might want to return the number of affected rows or a success flag
        return $builder->affectedRows();
    }
}
