<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();

        $User=new User();
        $User->name='Alvaro Casado';
        $User->email='alvarocasado@gmail.com';
        $User->email_verified_at=now();
        $User->password='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $User->phone=fake()->phoneNumber();
        $User->save();
    }
}
