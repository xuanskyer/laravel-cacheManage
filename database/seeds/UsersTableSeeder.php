<?php
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder {

    public function run()
    {

        DB::table(User::TABLE_NAME)->delete();

        User::create([
            'name'      =>  'admin',
            'email'     =>  'xuanskyer@163.com',
            'password'  =>  bcrypt('admin'),
        ]);

    }

}