<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class BasicTest extends TestCase
{
    public function testRegisterTest()
    {
        $faker = \Faker\Factory::create();
        $name = $faker->name;
        $username = $faker->username;
        $mail = $faker->unique()->safeEmail;
        $pass = Hash::make('password');
        $user = [
            'name' => $name,
            'username' => $username,
            'email' => $mail,
            'password' => $pass
        ];
    
        $response = $this->post('/register', $user);
        $response->assertRedirect('/');
    
        $this->assertDatabaseHas('users', $user);
    }

}
