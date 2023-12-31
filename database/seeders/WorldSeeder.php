<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql_file = public_path("e-commerce_world.sql");
        $db = [
            'host' => '127.0.0.1',
            'database' => 'e-commerce',
            'username' => 'root',
            'password' => null,
        ];

        exec("mysql --user={$db['username']} --password={$db['password']} --host={$db['host']} --database={$db['database']} < $sql_file");
    }
}
