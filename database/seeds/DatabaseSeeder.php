<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user -> email = 'superadmin@admin.com';
        $user -> password = Hash::make('alexganteng');
        $user -> name = 'Admin';
        $user -> save();
    }
}
