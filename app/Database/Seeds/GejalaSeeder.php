<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;


class GejalaSeeder extends Seeder
{
    public function run()
    {
        helper('date');
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            [
                'keterangan'    => 'Kebotakan berbentuk lingkaran dengan “cincin” merah di pinggirnya',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Kulit menjadi kelam dan bernanah',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Bersin dan batuk',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Cairan dari mata dan hidung',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Mata lengket dan tertutup',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Kelopak mata ketiga terlihat',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Tidak nafsu makan',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Lemas',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Muntah',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Demam',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Lesu',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Kembung',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Diare',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Mulut berbau busuk',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Telapa kaki mengeras',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => ' Kucing sering berada di tempat minum, namun tidak minum banyak',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Kucing kesakitan seperti menangis atau berteriak saat buang air kecil',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Sering menjilati bagian kelamin',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Air seni yang dikeluarkan sangat sedikit atau tidak ada',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Air seni bercampur darah',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Sering buang air besar',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Sering menjilati anus',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Terdapat cacing di dalam kotoran atau dubur kucing',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Sulit Bernapas',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Gusi pucat',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Pembesaran kelenjar getah bening',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Bulu rontok',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Kulit bersisik dan mengeras',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'keterangan'    => 'Kulit berkerak',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
        ];


        // Simple Queries
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:,  :created_at:, :updated_at:)", $data);

        // Using Query Builder
        //$this->db->table('orang')->insert($data);
        $this->db->table('gejala')->insertBatch($data);
    }
}