<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use PharIo\Manifest\Email;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'root',
            'email' => 'root@root.com',
            'password' => bcrypt('1234')
        ]);
    }
}
