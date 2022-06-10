<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'pluto';
        $user->email = 'pippo@test.it';
        $user->password = bcrypt('password-cv');
        $user->save();
    }
}
