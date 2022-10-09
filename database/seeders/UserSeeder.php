<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::insert([
            'name' => 'root',
            'email' => 'root@gmail.com',
            'password' => bcrypt('12345678'),
            // 'photo' => 'https://via.placeholder.com/1024x1024.png/000088?text=ROOT',
            // 'type_user' => 'Administrador',
            // 'active' => true,
            // 'login_date' => now(),
            // 'login_time' => now(),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
