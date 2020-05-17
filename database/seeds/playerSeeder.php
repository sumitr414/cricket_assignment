<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class playerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
                'team_id' => 1,
                'firstName' => 'Mohammad',
                'lastName' =>"Nabi Eisakhil",
                'imageUri' =>"nabi_eisakhil.png",
                'playerJerseyNo' =>8,
                'country' =>"Afganistan",
                'matches' =>98,
                'runs' =>2287,
                'highestScore' =>116,
                'fifties' =>11,
                'hundreds' =>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 1,
                'firstName' => 'Nawroz Khan',
                'lastName' =>"Mangal",
                'imageUri' =>"mangal.png",
                'playerJerseyNo' =>9,
                'country' =>"Afganistan",
                'matches' =>49,
                'runs' =>1139,
                'highestScore' =>129,
                'fifties' =>4,
                'hundreds' =>2,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 2,
                'firstName' => 'Steven Peter',
                'lastName' =>"Devereux Smith",
                'imageUri' =>"devereux_smith.png",
                'playerJerseyNo' =>12,
                'country' =>"Australia",
                'matches' =>108,
                'runs' =>3431,
                'highestScore' =>164,
                'fifties' =>19,
                'hundreds' =>8,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 2,
                'firstName' => 'David Andrew',
                'lastName' =>"Warner",
                'imageUri' =>"warner.png",
                'playerJerseyNo' =>4,
                'country' =>"Australia",
                'matches' =>106,
                'runs' =>4343,
                'highestScore' =>179,
                'fifties' =>17,
                'hundreds' =>14,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 5,
                'firstName' => 'Virat',
                'lastName' =>"Kohli",
                'imageUri' =>"kohli.png",
                'playerJerseyNo' =>18,
                'country' =>"India",
                'matches' =>248,
                'runs' =>11867,
                'highestScore' =>183,
                'fifties' =>58,
                'hundreds' =>43,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 5,
                'firstName' => 'MS',
                'lastName' =>"Dhoni",
                'imageUri' =>"dhoni.png",
                'playerJerseyNo' =>7,
                'country' =>"India",
                'matches' =>350,
                'runs' =>10773,
                'highestScore' =>183,
                'fifties' =>73,
                'hundreds' =>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
