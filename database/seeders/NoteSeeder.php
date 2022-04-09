<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rapport_visite')->insert([
            'VIS_MATRICULE' => 'a131',
            'RAP_NUM' => rand(20, 50),
            'PRA_NUM' => rand(2, 50),
            'RAP_DATE' =>  date("Y-m-d"),
            'RAP_BILAN' => 'Bilan de la visite',
            'RAP_MOTIF' => 'Motif de la visite',
        ]);
        
        
    }
}
