<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert(
            [
                ['id' => '1','name' => '歌颂党'],
                ['id' => '2','name' => '歌颂国'],
                ['id' => '3','name' => '工匠精神'],
                ['id' => '4','name' => '脱贫攻坚'],
                ['id' => '5','name' => '乡村振兴'],
            ]
        );
    }
}
