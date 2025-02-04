<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlockSeeder extends Seeder
{
    public function run()
    {
        DB::table('blocks')->insert([
            ['name' => 'joinads_WEB_Content_data', 'domain_id' => 1],
            ['name' => 'blogao_Block_1', 'domain_id' => 2],
            ['name' => 'testsite_Block_2', 'domain_id' => 3]
        ]);
    }
}
