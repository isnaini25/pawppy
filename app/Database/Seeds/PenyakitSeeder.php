<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;


class PenyakitSeeder extends Seeder
{
    public function run()
    {
        helper('date');
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            [
                'nama'    => 'Penyakit 1',
                'deskripsi'    => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem magnam eveniet, ipsam neque tenetur obcaecati illo adipisci, aperiam nihil suscipit sapiente? At soluta ratione eaque vel fugit sequi voluptates quo.',
                'saran'    => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem magnam eveniet, ipsam neque tenetur obcaecati illo adipisci, aperiam nihil suscipit sapiente? At soluta ratione eaque vel fugit sequi voluptates quo.',
                'gambar'    => 'default.png',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

            ],
            [
                'nama'    => 'Penyakit 2',
                'deskripsi'    => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem magnam eveniet, ipsam neque tenetur obcaecati illo adipisci, aperiam nihil suscipit sapiente? At soluta ratione eaque vel fugit sequi voluptates quo.',
                'saran'    => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem magnam eveniet, ipsam neque tenetur obcaecati illo adipisci, aperiam nihil suscipit sapiente? At soluta ratione eaque vel fugit sequi voluptates quo.',
                'gambar'    => 'default.png',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama'    => 'Penyakit 3',
                'deskripsi'    => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem magnam eveniet, ipsam neque tenetur obcaecati illo adipisci, aperiam nihil suscipit sapiente? At soluta ratione eaque vel fugit sequi voluptates quo.',
                'saran'    => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem magnam eveniet, ipsam neque tenetur obcaecati illo adipisci, aperiam nihil suscipit sapiente? At soluta ratione eaque vel fugit sequi voluptates quo.',
                'gambar'    => 'default.png',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:,  :created_at:, :updated_at:)", $data);

        // Using Query Builder
        //$this->db->table('orang')->insert($data);
        $this->db->table('penyakit')->insertBatch($data);
    }
}