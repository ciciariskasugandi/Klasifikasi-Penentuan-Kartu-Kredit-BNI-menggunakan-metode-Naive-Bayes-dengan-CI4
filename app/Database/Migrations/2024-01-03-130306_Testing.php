<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Testing extends Migration
{
    public function up()
    {
        
        //Memuat sruktur tabel untuk testing
        $this->forge->addField([
            'testing_id' => [
                'type'                  => 'INT',
                'constraint'            => 11,
                'unsigned'              => true,
                'auto_increment'        => true,
            ],
			'testing_nama' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
            'testing_jenis_kelamin' =>[
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'testing_status_rumah' =>[
                'type'        => 'VARCHAR',
                'constraint'  => '100',
            ],
			'testing_status' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
			'testing_jumlah_tanggungan' =>[
			'type'        => 'INT',
			'constraint'  => 11,
			],
			'testing_profesi' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
			'testing_penghasilan_pertahun' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
            'testing_kartu_kredit' =>[
                'type'  => 'VARCHAR',
                'constraint'  => '100',
            ],
            'updated_at' =>[
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP'),   
            ],
            'created_at' => [
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP'),   
            ],
        ]);
        $this->forge->addKey('testing_id', true);
        $this->forge->createTable('testings');
    }
    
    public function down ()
    {
        //
    }
}

