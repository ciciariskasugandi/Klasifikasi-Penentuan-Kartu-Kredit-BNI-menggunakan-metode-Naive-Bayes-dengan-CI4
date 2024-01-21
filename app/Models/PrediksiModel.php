<?php

namespace App\Models;

use CodeIgniter\Model;

class prediksiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'prediksis';
    protected $primaryKey       = 'prediksi_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['prediksi_id','prediksi_nama','prediksi_jenis_kelamin','prediksi_status_rumah','prediksi_status','prediksi_jumlah_tanggungan','prediksi_profesi','prediksi_penghasilan_pertahun','prediksi_kartu_kredit'];

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
