<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmailSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Upin',
            'email'    => 'upin@gmail.com',
        ];
        
        // Simple Queries
        $this->db->table('emails')->insert($data);
                

        $data = [
            'name' => 'Ipin',
            'email'    => 'ipin@gmail.com',
        ];

        // Simple Queries
        $this->db->table('emails')->insert($data);
    }
}