<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class UploadModel extends Model
{
    protected $table = 'uploads';
    protected $allowedFields = ['nama','jenis_kelamin','status_rumah','status','jumlah_tanggungan','profesi','penghasilan_pertahun','kartu_kredit','created_at'];

 
    
}