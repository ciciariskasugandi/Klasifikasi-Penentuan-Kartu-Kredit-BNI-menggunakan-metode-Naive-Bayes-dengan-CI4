<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Prediksi extends Migration
{
    public function up()
    {
        
        //Memuat sruktur tabel untuk prediksi
        $this->forge->addField([
            'prediksi_id' => [
                'type'                  => 'INT',
                'constraint'            => 11,
                'unsigned'              => true,
                'auto_increment'        => true,
            ],
			'prediksi_nama' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
            'prediksi_jenis_kelamin' =>[
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'prediksi_status_rumah' =>[
                'type'        => 'VARCHAR',
                'constraint'  => '100',
            ],
			'prediksi_status' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
			'prediksi_jumlah_tanggungan' =>[
			'type'        => 'INT',
			'constraint'  => 11,
			],
			'prediksi_profesi' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
			'prediksi_penghasilan_pertahun' =>[
			'type'        => 'VARCHAR',
			'constraint'  => '100',
			],
            'prediksi_kartu_kredit' =>[
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
        $this->forge->addKey('prediksi_id', true);
        $this->forge->createTable('prediksis');
    }
    
    public function down ()
    {
        //
    }
}

