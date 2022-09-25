<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;


class BasisPengetahuanSeeder extends Seeder
{
    public function run()
    {
        helper('date');
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            [
                'id_penyakit'    => '1',
                'id_gejala'    => '1',
                'mb'    => '0.4',
                'md'    => '0.6',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'id_penyakit'    => '1',
                'id_gejala'    => '4',
                'mb'    => '0.5',
                'md'    => '0.2',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id_penyakit'    => '1',
                'id_gejala'    => '5',
                'mb'    => '0.8',
                'md'    => '0.2',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:,  :created_at:, :updated_at:)", $data);

        // Using Query Builder
        //$this->db->table('orang')->insert($data);
        $this->db->table('basis_pengetahuan')->insertBatch($data);
    }
}