<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Training extends Migration
{
    public function up()
    {
        
        //Memuat sruktur tabel untuk training
        $this->forge->addField([
            'training_id' => [
                'type'                  => 'INT',
                'constraint'            => 11,
                'unsigned'              => true,
                'auto_increment'        => true,
            ],
			'training_nama' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
            'training_jenis_kelamin' =>[
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'training_status_rumah' =>[
                'type'        => 'VARCHAR',
                'constraint'  => '100',
            ],
			'training_status' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
			'training_jumlah_tanggungan' =>[
			'type'        => 'INT',
			'constraint'  => 11,
			],
			'training_profesi' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
			'training_penghasilan_pertahun' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
            'training_kartu_kredit' =>[
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
        $this->forge->addKey('training_id', true);
        $this->forge->createTable('trainings');
    }
    
    public function down ()
    {
        //
    }
}

