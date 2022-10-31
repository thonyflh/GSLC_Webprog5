<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class karyawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('karyawans')->insert([
            [
                'age' => '23',
                'job' => 'IT',
                'nama' => 'adji'

            ],
            [
                'age' => '25',
                'job' => 'Marketing',
                'nama' => 'anthony'
            ],
            [
                'age' => '54',
                'job' => 'OB',
                'nama' => 'hanip'
            ]
        ]);
    }

}
