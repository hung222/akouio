<?php

use Illuminate\Database\Seeder;

class taotk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablename')->where('column', 'filter')->get();
    }
}
