<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomainSeeder extends Seeder
{
    public function run()
    {
        DB::table('domains')->insert([
            ['name' => 'joinads.me'],
            ['name' => 'blogao.com'],
            ['name' => 'testsite.org']
        ]);
    }
}
