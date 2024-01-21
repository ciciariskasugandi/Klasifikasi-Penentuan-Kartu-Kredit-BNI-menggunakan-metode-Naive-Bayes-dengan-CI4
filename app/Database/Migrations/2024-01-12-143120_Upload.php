<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Upload extends Migration
{
    public function up()
    {
        
        //Memuat sruktur tabel untuk upload
        $this->forge->addField([
			'nama' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
            'jenis_kelamin' =>[
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'status_rumah' =>[
                'type'        => 'VARCHAR',
                'constraint'  => '100',
            ],
			'status' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
			'jumlah_tanggungan' =>[
			'type'        => 'INT',
			'constraint'  => 11,
			],
			'profesi' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
			'penghasilan_pertahun' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
            'kartu_kredit' =>[
                'type'  => 'VARCHAR',
                'constraint'  => '100',
            ],
            'created_at' => [
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP'),   
            ],
        ]);
         $this->forge->addKey('', true);
        $this->forge->createTable('uploads');
    }
    
    public function down ()
    {
        //
    }
}

