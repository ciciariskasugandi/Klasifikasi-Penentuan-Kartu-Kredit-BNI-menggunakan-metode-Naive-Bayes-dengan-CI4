<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class User extends Migration
{
    public function up()
    {
        
        //Memuat sruktur tabel untuk user
        $this->forge->addField([
            'ID' => [
                'type'                  => 'INT',
                'constraint'            => 11,
                'unsigned'              => true,
                'auto_increment'        => true,
            ],
			'Username' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
            'Password' =>[
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'NamaLengkap' =>[
                'type'        => 'VARCHAR',
                'constraint'  => '100',
            ],
        ]);
        $this->forge->addKey('ID', true);
        $this->forge->createTable('users');
    }
    
    public function down ()
    {
        //
    }
}

