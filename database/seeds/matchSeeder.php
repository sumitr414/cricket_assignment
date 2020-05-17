<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class matchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            [
                'teamA' => 1,
                'teamB' => 2,
                'winner' =>1,
                'matchDate' =>Carbon::create()->year(2020)->month(5)->day(15),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'teamA' => 2,
                'teamB' => 3,
                'winner' =>3,
                'matchDate' =>Carbon::create()->year(2020)->month(5)->day(16),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'teamA' => 1,
                'teamB' => 3,
                'winner' =>1,
                'matchDate' =>Carbon::create()->year(2020)->month(5)->day(17),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[

                'teamA' => 2,
                'teamB' => 5,
                'winner' =>5,
                'matchDate' =>Carbon::create()->year(2020)->month(5)->day(18),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'teamA' => 5,
                'teamB' => 3,
                'winner' =>5,
                'matchDate' =>Carbon::create()->year(2020)->month(5)->day(19),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'teamA' => 1,
                'teamB' => 5,
                'winner' =>5,
                'matchDate' =>Carbon::create()->year(2020)->month(5)->day(20),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
