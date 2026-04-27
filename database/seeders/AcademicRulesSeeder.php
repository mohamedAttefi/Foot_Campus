<?php

namespace Database\Seeders;

use App\Models\AcademicRules;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rules = [
            [
                'min_average_threshold' => 2.50,
                'max_failed_subjects' => 2,
                'is_active' => true,
            ],
            [
                'min_average_threshold' => 3.50,
                'max_failed_subjects' => 1,
                'is_active' => true,
            ],
            [
                'min_average_threshold' => 2.00,
                'max_failed_subjects' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($rules as $rule) {
            AcademicRules::create($rule);
        }
    }
}
