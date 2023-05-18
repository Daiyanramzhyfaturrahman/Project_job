<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JobSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Odol Pipsodin',
            'category'    => 'utlities',
            'description' => 'prusahaan ini di bangun dengan sepenuh hati',
            'price'    => 10000,
            'stock'    => 100,
        ];

        // Simple Queries
        $this->db->table('jobs')->insert($data);
        
        $data = [
            'name' => 'Gayung Love',
            'category'    => 'utlities',
            'description' => 'prusahaan ini di bangun dengan sepenuh hati',
            'price'    => 15000,
            'stock'    => 200,
        ];
        // Using Query Builder
        $this->db->table('jobs')->insert($data);
    }
}