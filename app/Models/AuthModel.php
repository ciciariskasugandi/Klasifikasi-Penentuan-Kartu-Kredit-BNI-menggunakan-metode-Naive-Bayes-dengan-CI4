<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'ID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = [ 'ID','Username','Password','NamaLengkap'];

    public function ceklogin($username, $password)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        return $builder->getWhere(['Username'=>$username, 'Password'=>$password]);
    }
}
