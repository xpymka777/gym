<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'FirstName' => $this->faker->firstName,
            'LastName' => $this->faker->lastName,
            'Email' => $this->faker->unique()->safeEmail,
            'Password' => md5('password'),
            'Birthdate' => $this->faker->date,
            'Role' => $this->faker->randomElement(['user', 'trainer']),
        ];
    }
}
