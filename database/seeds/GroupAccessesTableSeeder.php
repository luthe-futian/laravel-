<?php

use Illuminate\Database\Seeder;

class GroupAccessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auth_group_accesses')->insert([
            'id' => 1,
            'uid' => 1,
            'group_id' => 1,
        ]);
    }
}
