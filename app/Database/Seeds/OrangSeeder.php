<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
    public function run()
    {
    //     $data = [
    //     [
    //         'nama' => 'Ramiro Arga Pratama',
    //         'alamat'    => 'Jl. Soekarno',
    //         'created_at' => Time::now(),
    //         'updated_at' => Time::now(),
    //     ],
    //     [
    //         'nama' => 'Ramiro',
    //         'alamat'    => 'Jl. Penggung',
    //         'created_at' => Time::now(),
    //         'updated_at' => Time::now(),
    //     ],
    //     [
    //         'nama' => 'Arga',
    //         'alamat'    => 'Jl. Saladara',
    //         'created_at' => Time::now(),
    //         'updated_at' => Time::now(),
    //     ]
    // ];

    $faker = \Faker\Factory::create('fr_FR');
    
    $data = [
                'nama'       => $faker->name,
                'alamat'     => $faker->address,
                'created_at' => Time::createFromDate($faker->unixTime()),
                'updated_at' => Time::now(),
            ];
            $this->db->table('orang')->insert($data);
  
        // Simple Queries
        // $this->db->query('INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        // $this->db->table('orang')->insertBatch($data);
    }
}
