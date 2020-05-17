<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'Afghanistan',
                'logoUri' => 'afg.png',
                'club' =>"Afghanistan Cricket Board",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'name' => 'Australia',
                'logoUri' => 'aus.png',
                'club' => 'Cricket Australia',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'name' => 'Bangladesh',
                'logoUri' => 'bng.png',
                'club' => 'Bangladesh Cricket Board',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'England',
                'logoUri' => 'eng.png',
                'club' => 'England and Wales Cricket Board',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'India',
                'logoUri' => 'ind.png',
                'club' => 'Board of Control for Cricket in India',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'New Zealand',
                'logoUri' => 'nzl.png',
                'club' => 'New Zealand Cricket',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'Pakistan',
                'logoUri' => 'pak.png',
                'club' => 'Pakistan Cricket Board',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'South Africa',
                'logoUri' => 'sar.png',
                'club' => 'Cricket South Africa',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'Sri Lanka',
                'logoUri' => 'srl.png',
                'club' => 'Sri Lanka Cricket',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'West Indies',
                'logoUri' => 'wid.png',
                'club' =>'Cricket West Indies',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
