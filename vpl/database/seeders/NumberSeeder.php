<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Number::create([
            'country_id' => 181,
            'area_name' => 'Moscow',
            'area_code' => 495,
            'number' => '7-495-145-2140',
            'setup_charges' => 1,
            'monthly_charges' => 6,
            'per_mintue_charges' => 0.01,
            'per_sms_charges' => 0,
            'forwarding_url' => ''
        ]);
    }
}
