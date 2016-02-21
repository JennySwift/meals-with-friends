<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;
use Illuminate\Support\Facades\DB;

/**
 * Class UserSeeder
 */
class UserSeeder extends Seeder {

    /**
     *
     */
    public function run()
    {
        User::truncate();

        $human = User::create([
            'name' => 'Human',
            'email' => 'human@nowhere.com',
            'password' => bcrypt('abcdefg')
        ]);

        $bird = User::create([
            'name' => 'Bird',
            'email' => 'bird@nowhere.com',
            'password' => bcrypt('abcdefg')
        ]);
    }

}