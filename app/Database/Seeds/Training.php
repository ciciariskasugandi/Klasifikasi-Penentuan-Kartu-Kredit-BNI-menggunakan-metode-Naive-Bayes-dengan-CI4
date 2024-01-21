<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Training extends Seeder
{
    public function run()
    {
        //add data fake
        $data = [
            'training_nama'=> 'chindy syaputri',
            'training_jenis_kelamin'=>'Wanita',
            'training_status_rumah'=>'Milik Sendiri',
            'training_status'=>'Kawin',
            'training_jumlah_tanggungan'=> 2,
            'training_profesi'=>'BUMN',
            'training_penghasilan_pertahun'=>'Tinggi',
            'training_kartu_kredit'=>'Gold',

        ];

        //Simple Queries
        $this->db->query('INSERT INTO trainings (training_nama,training_jenis_kelamin,training_status_rumah,training_status,training_jumlah_tanggungan,training_profesi,training_penghasilan_pertahun,training_kartu_kredit) VALUES(:training_name:,:training_jenis_kelamin:,:training_status_rumah:,:training_status:,:training_jumlah_tanggungan:,:training_profesi:,:training_penghasilan_pertahun:,:training_kartu_kredit)', $data);

        //Using Query Builder
        $this->db->table('trainings')->insert($data);
    }
}
