<?php

namespace App\Models;

use CodeIgniter\Model;

class TestingModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'testings';
    protected $primaryKey       = 'testing_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['testing_id','testing_nama','testing_jenis_kelamin','testing_status_rumah','testing_status','testing_jumlah_tanggungan','testing_profesi','testing_penghasilan_pertahun','testing_kartu_kredit'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
