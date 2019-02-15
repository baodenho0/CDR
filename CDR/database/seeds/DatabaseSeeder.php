<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(userSeeder::class);
    }


}

class userSeeder extends Seeder
{
	public function run(){
		DB::table('users')->insert([
			['name'=>'admin',
			'password'=>bcrypt('admin'),
			'quyen'=>'1',],
			['name'=>'admin1',
			'password'=>bcrypt('admin1'),
			'quyen'=>'2',]
		]);
	}
}
