<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create([
            'name' => 'admin',
            'display_name' => 'Administration',
            'description' => 'Administrator',
            'allowed_route' => 'admin',
        ]);

        $supervisorRole = Role::create([
            'name' => 'supervisor',
            'display_name' => 'Supervisor',
            'description' => 'Supervisor',
            'allowed_route' => 'admin',
        ]);

        $customerRole = Role::create([
            'name' => 'customer',
            'display_name' => 'Customer',
            'description' => 'Customer',
            'allowed_route' => null,
        ]);

        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'System',
            'username' => 'admin',
            'email' => 'admin@ecommerce.test',
            'email_verified_at' => now(),
            'mobile' => '96660000000',
            'password' => bcrypt('123123123'),
            'user_image' => 'avatar.svg',
            'status' => 1,
            'remember_token' => Str::random(10),
        ]);
        $admin->attachRole($adminRole);  

        $supervisor = User::create([
            'first_name' => 'Supervisor',
            'last_name' => 'System',
            'username' => 'supervisor',
            'email' => 'supervisor@ecommerce.test',
            'email_verified_at' => now(),
            'mobile' => '96660000001',
            'password' => bcrypt('123123123'),
            'user_image' => 'avatar.svg',
            'status' => 1,
            'remember_token' => Str::random(10),
        ]);
        $supervisor->attachRole($supervisorRole);  
        
        $customer = User::create([
            'first_name' => 'Mahmoud',
            'last_name' => 'Hossam',
            'username' => 'mahmoud99',
            'email' => 'mahmoud@gmail.com',
            'email_verified_at' => now(),
            'mobile' => '96660000002',
            'password' => bcrypt('123123123'),
            'user_image' => 'avatar.svg',
            'status' => 1,
            'remember_token' => Str::random(10),
        ]);
        $customer->attachRole($customerRole);  

        // for($i=0 ; $i<20 ; $i++){
        //     $random_customer= User::create([
        //         'first_name' => 'Mahmoud',
        //         'last_name' => 'Hossam',
        //         'email' => 'mahmoud@gmail.com',
        //         'email_verified_at' => now(),
        //         'mobile' => '96660000002',
        //         'password' => bcrypt('123123123'),
        //         'user_image' => 'avatar.svg',
        //         'status' => 1,
        //         'remember_token' => Str::random(10),
        //     ]);
        //     $random_customer->attachRole($customerRole);  
        // }

       $customers = CustomerFactory::new()->count(20)->create();

        foreach ($customers as $customer) {
            $customer->attachRole($customerRole);
        }
    }
}
