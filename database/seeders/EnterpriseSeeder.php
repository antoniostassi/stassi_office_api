<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Schema;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::disableForeignKeyConstraints();
        DB::table('enterprises')->truncate();

        for ($i=0; $i < 10; $i++) { 
            DB::table('enterprises')->insert([
                'title' => "Azienda #".$i+1,
                'description' => Str::random(200),
            ]);
        }
        
        Schema::enableForeignKeyConstraints();
    }
}
