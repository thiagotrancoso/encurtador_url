<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'           => 'Administrador',
            'email'          => 'admin@admin.com',
            'password'       => bcrypt('12345678'),
            'remember_token' => Str::random(10)
        ]);
    }
}
