<?php

use Illuminate\Database\Seeder;


class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
         
            'fname' => Str::random(10),
            'lname' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',

        ];

        DB::table('table_applications')->insert($data);

//        factory(App\Application::class, 50)->create();
    }
}
