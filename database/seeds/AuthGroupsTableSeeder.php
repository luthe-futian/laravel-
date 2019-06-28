<?php

use Illuminate\Database\Seeder;

class AuthGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auth_groups')->insert(
            ['id' => 1, 'title' => '管理员', 'status' => 1]
        );
    }
}
