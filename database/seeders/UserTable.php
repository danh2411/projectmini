<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'name' => 'da',
            'email'=>'daaanh@gmail.com',
            'password' => bcrypt('123'),
            'level' =>'1',
            'create_at' =>now(),
        ];
        DB::table('user')->insert($data);

    }
}
