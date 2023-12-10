<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{

    protected $model = User::class;

    public function definition()
    {
        return [
            'first_name' => fake()->name,
            'last_name' => fake()->name,
            'username' => fake()->unique()->userName,
            'email' => fake()->unique()->email,
            'email_verified_at' => now(),
            'mobile' => '9666' . fake()->numberBetween(1000000, 9000000),
            'password' => bcrypt('123123123'),
            'user_image' => 'avatar.svg',
            'status' => 1,
            'remember_token' => Str::random(10),
        ];
    }
}
