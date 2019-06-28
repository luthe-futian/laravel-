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
            'group_id' => 1,
            'rule_id' => 1,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 2,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 3,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 4,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 5,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 6,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 7,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 8,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 11,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 21,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 22,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 23,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 126,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 136,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 138,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 139,
        ]);
        DB::table('auth_group_rules')->insert([
            'group_id' => 1,
            'rule_id' => 140,
        ]);
    }
}
