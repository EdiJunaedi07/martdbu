<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSatuan extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_satuan')->get()->getResultArray();
    }
}
