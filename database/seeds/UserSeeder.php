<?php

use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$professions = DB::select('SELECT id FROM professions WHERE title = "Desarrollador back-end"');
        //dd($professions);

        //$profession = DB::table('professions')->select('id')->first();

        $professionId = Profession::where('title', 'Desarrollador back-end')->value('id');

        //DB::table('users')->insert([
        factory(User::class)->create([
            'name' => 'Hernan Gordillo',
            'email' => 'luishernangordillo@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);

        factory(User::class)->create([
            'profession_id' => $professionId
        ]);

        factory(User::class, 48)->create();
    }
}
