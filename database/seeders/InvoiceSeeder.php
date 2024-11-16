<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('invoices')->truncate();
        for ($i=0; $i < 15; $i++) { 
            # code...
            DB::table('invoices')->insert([
                'description' => Str::random(10),
                'amount' => rand(100, 1500),
                'received' => rand(0,1),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
        
    }
}
