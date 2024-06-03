<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
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
        /*
        // 1. sposob
        $user = new User;
        $user->name = 'Andrej';
        $user->email = 'andrej@gmail.com';
        $user->password = '123';
        $user->save();
        // 3. sposob
        User::create([
            'name' => 'Andrej',
            'email' => 'andrej@gmail.com',
            'password' => '123',
        ]);
        */
        
        User::forceCreate([
            'username'=> 'admin',
            'firstname' => 'Andrej',
            'surname'=> 'andrj',
            'email' => 'andrej@gmail.com',
            'password' => Hash::make('123'),
            'privilage_id' => '1'
        ]);

        User::forceCreate([
            'username' => 'juraj62',
            'firstname' => 'Juraj',
            'surname' => 'Mrázik',
            'email' => 'ingrurajmrazik@gmail.com',
            'password' => Hash::make('aa'),
            'privilage_id' => '2'
        ]);
    }
}
 