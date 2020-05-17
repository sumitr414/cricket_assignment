<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class pointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert([
            [
                'team_id' => 1,
                'matchesPlayed' => 8,
                'win' =>0,
                'loss' =>8,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 2,
                'matchesPlayed' => 8,
                'win' =>7,
                'loss' =>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 3,
                'matchesPlayed' => 7,
                'win' =>3,
                'loss' =>4,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[

                'team_id' => 4,
                'matchesPlayed' => 8,
                'win' =>5,
                'loss' =>3,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 5,
                'matchesPlayed' => 7,
                'win' =>6,
                'loss' =>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 6,
                'matchesPlayed' => 8,
                'win' =>5,
                'loss' =>3,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 7,
                'matchesPlayed' => 8,
                'win' =>4,
                'loss' =>4,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 8,
                'matchesPlayed' => 8,
                'win' =>2,
                'loss' =>6,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 9,
                'matchesPlayed' => 7,
                'win' =>3,
                'loss' =>4,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 10,
                'matchesPlayed' => 7,
                'win' =>2,
                'loss' =>5,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
