<?php

use Illuminate\Database\Seeder;

class GroupRuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auth_group_rules')->insert([
            ['group_id' => 1, 'rule_id' => 1],
            ['group_id' => 1, 'rule_id' => 2],
            ['group_id' => 1, 'rule_id' => 3],
            ['group_id' => 1, 'rule_id' => 4],
            ['group_id' => 1, 'rule_id' => 5],
            ['group_id' => 1, 'rule_id' => 6],
            ['group_id' => 1, 'rule_id' => 7],
            ['group_id' => 1, 'rule_id' => 8],
            ['group_id' => 1, 'rule_id' => 9],
            ['group_id' => 1, 'rule_id' => 10],
            ['group_id' => 1, 'rule_id' => 11],
            ['group_id' => 1, 'rule_id' => 12],
            ['group_id' => 1, 'rule_id' => 13],
            ['group_id' => 1, 'rule_id' => 14],
            ['group_id' => 1, 'rule_id' => 15],
            ['group_id' => 1, 'rule_id' => 16],
            ['group_id' => 1, 'rule_id' => 17],
            ['group_id' => 1, 'rule_id' => 18],
            ['group_id' => 1, 'rule_id' => 19],
            ['group_id' => 1, 'rule_id' => 20],
            ['group_id' => 1, 'rule_id' => 21],
            ['group_id' => 1, 'rule_id' => 22],
            ['group_id' => 1, 'rule_id' => 23],
            ['group_id' => 1, 'rule_id' => 24],
            ['group_id' => 1, 'rule_id' => 25],
            ['group_id' => 1, 'rule_id' => 26]
       ]);
    }
}
